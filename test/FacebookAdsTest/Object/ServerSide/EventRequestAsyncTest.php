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
use FacebookAds\Object\ServerSide\EventRequestAsync;
use FacebookAds\Api;

class EventRequestAsyncTest extends AbstractUnitTestCase {
  public function testBuilder() {
    $event = new Event(array('event_name' => 'my-event'));
    $expected = array(
      'data' => array(array('event_name' => $event['event_name'])),
      'test_event_code' => 'test-event-code-0',
      'partner_agent' => 'partner-agent-1',
      'namespace_id' => 'namespace-id-2',
      'upload_id' => 'upload-id-3',
      'upload_tag' => 'upload-tag-4',
      'upload_source' => 'upload-source-5',
    );
    $event_request_async = (new EventRequestAsync('pixel-id'))
      ->setEvents(array($event))
      ->setTestEventCode($expected['test_event_code'])
      ->setPartnerAgent($expected['partner_agent'])
      ->setNamespaceId($expected['namespace_id'])
      ->setUploadId($expected['upload_id'])
      ->setUploadTag($expected['upload_tag'])
      ->setUploadSource($expected['upload_source']);

    $this->assertEquals($expected, $event_request_async->normalize());
  }

  public function testConstructor() {
    $event = new Event(array('event_name' => 'my-event'));
    $expected_event = array('data' => [array('event_name' => $event['event_name'])]);
    $state = array(
      'test_event_code' => 'test-event-code-0',
      'partner_agent' => 'partner-agent-1',
      'namespace_id' => 'namespace-id-2',
      'upload_id' => 'upload-id-3',
      'upload_tag' => 'upload-tag-4',
      'upload_source' => 'upload-source-5',
    );
    $data = array_merge(array('events' => array($event)), $state);
    $expected = array_merge($state, $expected_event);
    $event_request_async = new EventRequestAsync('pixel-id', $data);

    $this->assertEquals($expected, $event_request_async->normalize());
  }

  public function testPromiseCancel() {
    Api::init(null, null, 'access-token-123');
    $event_request_async = new EventRequestAsync('pixel-id-456', array(
      'test_event_code' => 'test-event-code-0',
      'events' => array(new Event(array('event_name' => 'my-event')))
    ));
    $promise = $event_request_async->execute();
    $promise->cancel();

    $this->assertEquals('rejected', $promise->getState());
  }

  public function testPromiseReject() {
    Api::init(null, null, 'access-token-123');
    $event_request_async = new EventRequestAsync('pixel-id-456', array(
      'test_event_code' => 'test-event-code-0',
      'events' => array(new Event(array('event_name' => 'my-event')))
    ));
    $promise = $event_request_async->execute();
    $promise->reject('some error');

    $this->assertEquals('rejected', $promise->getState());
  }
}
