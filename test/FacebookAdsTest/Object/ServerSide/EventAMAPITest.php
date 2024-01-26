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
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\UserData;

class EventAMAPITest extends AbstractUnitTestCase {
    public function testBuilder() {
      $user_data = new UserData(array('email' => 'eg@test.com'));
      $custom_data = new CustomData(array('col_1' => 'foo2'));
      $expected = array(
        'event_name' => 'custom',
        'event_time' => 1234,
        'user_data' => $user_data->normalize(),
        'custom_data' => $custom_data->normalize(),
        'data_processing_options' => array('AMO'),
        'advanced_measurement_table' => 'test_am_table',
      );

      $event = (new Event())
        ->setEventName($expected['event_name'])
        ->setEventTime($expected['event_time'])
        ->setUserData($user_data)
        ->setCustomData($custom_data)
        ->setDataProcessingOptions($expected['data_processing_options'])
        ->setAdvancedMeasurementTable($expected['advanced_measurement_table']);

      $this->assertEquals($expected, $event->normalize());
    }
  }
