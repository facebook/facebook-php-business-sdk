<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAds\Object\ServerSide;

use GuzzleHttp\Promise;

class BatchProcessor {
  protected $batch_size;
  protected $concurrent_requests;
  protected $pixel_id;

  /**
   * Constructor
   * @param int $pixel_id
   * @param int $batch_size
   * @param int $concurrent_requests
   */
  public function __construct($pixel_id, $batch_size = 50, $concurrent_requests = 4) {
    $this->pixel_id = $pixel_id;
    // Note: batch_size is only used in processEvents and processEventsGenerator
    $this->batch_size = $batch_size;
    $this->concurrent_requests = $concurrent_requests;
  }

  /**
   * Processes events that have identical event_request params
   * @param array $event_request_params
   * @param array|\FacebookAds\Object\ServerSide\Event $events
   * @return void
   */
  public function processEvents($event_request_params, $events) {
    $generator = $this->processEventsGenerator($event_request_params, $events);
    foreach ($generator as $promises) {
      Promise\unwrap($promises);
    }
  }

  /**
   * This generator returns event_requests promises for events that have identical event_request params
   * @param array $event_request_params
   * @param array|\FacebookAds\Object\ServerSide\Event $events
   * @return Generator|array|\GuzzleHttp\Promise\PromiseInterface $promises
   */
  public function processEventsGenerator($event_request_params, $events) {
    $index = 0;
    while ($index < count($events)) {
      $promises = [];

      while ($index < count($events) && count($promises) < $this->concurrent_requests) {
        $params = array_merge(
          array('events' => array_slice($events, $index, $this->batch_size)),
          $event_request_params
        );
        $event_request = new EventRequestAsync(
          $this->pixel_id,
          $params
        );

        $promises[] = $event_request->execute();
        $index += $this->batch_size;
      }

      yield $promises;
    }
  }

  /**
   * Processes async event_requests
   * @param array|\FacebookAds\Object\ServerSide\EventRequestAsync $event_requests_async
   * @return void
   */
  public function processEventRequests($event_requests_async) {
    $generator = $this->processEventRequestsGenerator($event_requests_async);
    foreach ($generator as $promises) {
      Promise\unwrap($promises);
    }
  }

  /**
   * This generator returns event_requests promises
   * @param array|\FacebookAds\Object\ServerSide\EventRequestAsync $event_requests_async
   * @return Generator|array|\GuzzleHttp\Promise\PromiseInterface $promises
   */
  public function processEventRequestsGenerator($event_requests_async) {
    $index = 0;
    while ($index < count($event_requests_async)) {
      $promises = [];

      $offset = 0;
      while (($index + $offset) < count($event_requests_async) && count($promises) < $this->concurrent_requests) {
        $promises[] = $event_requests_async[$index + $offset]->execute();
        $offset += 1;
      }
      $index += $offset;

      yield $promises;
    }
  }
}
