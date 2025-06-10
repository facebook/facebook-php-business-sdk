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

namespace FacebookAdsTest\Object;

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Object\ServerSide\OriginalEventData;

class OriginalEventDataTest extends AbstractUnitTestCase {
  public function testBuilderAndConstructor() {
    $expected = array(
      'event_name' => 'event-name-1',
      'event_time' => 123456,
      'order_id' => 'order-1',
      'event_id' => 'event-1'
    );
    $builder = (new OriginalEventData())
      ->setEventName($expected['event_name'])
      ->setCurrency($expected['event_time'])
      ->setOrderID($expected['order_id'])
      ->setEventID($expected['event_id']);
    $this->assertEquals($expected, $builder->normalize());

    $constructor = new OriginalEventData(array(
      'event_name' => $expected['event_name'],
      'event_time' => $expected['event_time'],
      'order_id' => $expected['order_id'],
      'event_id' => $expected['event_id']
    ));
    $this->assertEquals($expected, $constructor->normalize());
  }
}
