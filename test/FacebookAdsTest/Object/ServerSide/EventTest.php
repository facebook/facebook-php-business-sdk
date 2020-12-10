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
use FacebookAds\Object\ServerSide\ActionSource;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\UserData;

class EventTest extends AbstractUnitTestCase {
  public function testBuilder() {
    $user_data = new UserData(array('email' => 'eg@test.com'));
    $custom_data = new CustomData(array('order_id' => '123'));
    $expected = array(
      'event_name' => 'event_name-0',
      'event_time' => 1234,
      'event_source_url' => 'event_source_url-2',
      'opt_out' => false,
      'event_id' => 'event_id-3',
      'user_data' => $user_data->normalize(),
      'custom_data' => $custom_data->normalize(),
      'data_processing_options' => array('1', '2'),
      'data_processing_options_country' => 1,
      'data_processing_options_state' => 2,
      'action_source' => ActionSource::WEBSITE,
    );

    $event = (new Event())
      ->setEventName($expected['event_name'])
      ->setEventTime($expected['event_time'])
      ->setEventSourceUrl($expected['event_source_url'])
      ->setOptOut($expected['opt_out'])
      ->setEventId($expected['event_id'])
      ->setUserData($user_data)
      ->setCustomData($custom_data)
      ->setDataProcessingOptions($expected['data_processing_options'])
      ->setDataProcessingOptionsCountry($expected['data_processing_options_country'])
      ->setDataProcessingOptionsState($expected['data_processing_options_state'])
      ->setActionSource($expected['action_source']);

    $this->assertEquals($expected, $event->normalize());
  }

  public function testWhenOptOutIsTrue() {
    $event = (new Event())->setOptOut(true);

    $this->assertEquals(array('opt_out' => true), $event->normalize());
  }

  public function testInvalidActionSource() {
    $action_source = 'invalid action source';
    $event = (new Event())->setActionSource($action_source);

    try {
     $normalized_payload = $event->normalize();
    } catch (\Exception $exception) {
      $has_thrown_exception = true;
      $expected_string = sprintf("Invalid action_source passed: %s",$action_source);
      $this->assertStringContainsString($expected_string, $exception->getMessage());
    }

    $this->assertTrue($has_thrown_exception);
  }

  public function testActionSourceGetsNormalized() {
    $event = (new Event())->setActionSource('Email');
    $normalized_payload = $event->normalize();

    $this->assertEquals($normalized_payload['action_source'], 'email');
  }

  public function testActionSourceIsNull() {
    $event = (new Event());
    $normalized_payload = $event->normalize();

    $this->assertFalse(array_key_exists('action_source', $normalized_payload));
  }
}
