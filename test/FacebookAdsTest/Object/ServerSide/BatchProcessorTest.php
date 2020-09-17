<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAdsTest\Object\ServerSide;

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\UserData;
use FacebookAds\Object\ServerSide\BatchProcessor;
use FacebookAds\Api;
use GuzzleHttp\Promise;
use Mockery as m;

class BatchProcessorTest extends AbstractUnitTestCase {
  protected function setUp(): void {
    $this->user_data = (new UserData())->setEmail('joe@eg.com');
    $this->event = (new Event())
      ->setEventName('Purchase')
      ->setEventTime(time())
      ->setUserData($this->user_data);
    $this->pixel_id = 'pixel-id-0';
    $this->test_event_code = 'test-code-1';
    $batch_size = 5;
    $concurrent_requests = 2;
    $this->batch_processor = new BatchProcessor($this->pixel_id, $batch_size, $concurrent_requests);
  }

  protected function tearDown(): void {
    m::close();
  }

  public function testProcessEvents() {
    $expected_event_request_params = array(
      'events' => array_fill(0, 5, $this->event),
      'test_event_code' => $this->test_event_code,
    );

    $mock_event_request_async = m::mock('overload:FacebookAds\Object\ServerSide\EventRequestAsync');
    $mock_guzzle_promise = m::mock();

    $mock_event_request_async
      ->shouldReceive('__construct')
      ->atLeast()
      ->once()
      ->with($this->pixel_id, $expected_event_request_params);
    $mock_event_request_async
      ->shouldReceive('execute')
      ->atLeast()
      ->once()
      ->andReturn($mock_guzzle_promise);
    $mock_guzzle_promise
      ->shouldReceive('wait')
      ->times(3);
    $this->addToAssertionCount(
      m::getContainer()->mockery_getExpectationCount()
    );

    $events = array_fill(0, 15, $this->event);
    $this->batch_processor->processEvents(
      array('test_event_code' => $this->test_event_code),
      $events
    );
  }

  public function testProcessEventsGenerator() {
    $expected_event_request_params = array(
      'events' => array_fill(0, 5, $this->event),
      'test_event_code' => $this->test_event_code,
    );

    $mock_event_request_async = m::mock('overload:FacebookAds\Object\ServerSide\EventRequestAsync');
    $mock_guzzle_promise = m::mock();

    $mock_event_request_async
      ->shouldReceive('__construct')
      ->atLeast()
      ->once()
      ->with($this->pixel_id, $expected_event_request_params);
    $mock_event_request_async
      ->shouldReceive('execute')
      ->atLeast()
      ->once()
      ->andReturn($mock_guzzle_promise);
    $mock_guzzle_promise
      ->shouldReceive('wait')
      ->times(3);

    $events = array_fill(0, 15, $this->event);
    $generator = $this->batch_processor->processEventsGenerator(
      array('test_event_code' => $this->test_event_code),
      $events
    );
    $iterations = 0;
    foreach ($generator as $promises) {
      $iterations += 1;
      Promise\unwrap($promises);
    }

    $this->assertEquals($iterations, 2);
  }

  public function testProcessEventRequests() {
    $mock_event_request_async = m::mock();
    $mock_guzzle_promise = m::mock();
    $expected_event_request_params = array_fill(0, 5, $mock_event_request_async);

    $mock_event_request_async
      ->shouldReceive('execute')
      ->times(5)
      ->andReturn($mock_guzzle_promise);
    $mock_guzzle_promise
      ->shouldReceive('wait')
      ->times(5);
    $this->addToAssertionCount(
      m::getContainer()->mockery_getExpectationCount()
    );

    $event_requests = array_fill(0, 5, $mock_event_request_async);
    $this->batch_processor->processEventRequests($event_requests);
  }

  public function testProcessEventRequestsGenerator() {
    $mock_event_request_async = m::mock();
    $mock_guzzle_promise = m::mock();
    $expected_event_request_params = array_fill(0, 5, $mock_event_request_async);

    $mock_event_request_async
      ->shouldReceive('execute')
      ->times(5)
      ->andReturn($mock_guzzle_promise);
    $mock_guzzle_promise
      ->shouldReceive('wait')
      ->times(5);

    $event_requests = array_fill(0, 5, $mock_event_request_async);
    $generator = $this->batch_processor->processEventRequestsGenerator($event_requests);
    $iterations = 0;
    foreach ($generator as $promises) {
      $iterations += 1;
      Promise\unwrap($promises);
    }

    $this->assertEquals(3, $iterations);
  }
}
