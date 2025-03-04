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
use FacebookAds\Object\ServerSide\Event;


class ServerSideEventTest extends AbstractUnitTestCase {

  public function testEventData(){
    $testName = 'Test123Event';
    $testUrl = 'www.example.com';
    $testTime = time();

    $event = (new Event())
      ->setEventName($testName)
      ->setEventTime($testTime)
      ->setEventSourceUrl($testUrl);

    $normalized_array = $event->normalize();
    $this->assertEquals($normalized_array['event_name'], $testName);
    $this->assertEquals($normalized_array['event_time'], $testTime);
    $this->assertEquals($normalized_array['event_source_url'], $testUrl);
  }

  public function testEmptyLDUData(){
    $event = (new Event())
      ->setEventName('TestEvent')
      ->setDataProcessingOptions([]);

    $normalized_array = $event->normalize();

    $this->assertEquals($normalized_array['data_processing_options'], array());
  }

  public function testDefaultLDUData(){
    $event = (new Event())
      ->setEventName('TestEvent')
      ->setDataProcessingOptions(['LDU'])
      ->setDataProcessingOptionsCountry(0)
      ->setDataProcessingOptionsState(0);

    $normalized_array = $event->normalize();

    $this->assertEquals($normalized_array['data_processing_options'], array("LDU"));
    $this->assertEquals($normalized_array['data_processing_options_state'], "0");
    $this->assertEquals($normalized_array['data_processing_options_country'], "0");
  }

  public function testValidLDUStateCountryData(){
    $event = (new Event())
      ->setEventName('TestEvent')
      ->setDataProcessingOptions(['LDU'])
      ->setDataProcessingOptionsCountry(1)
      ->setDataProcessingOptionsState(1000);

    $normalized_array = $event->normalize();

    $this->assertEquals($normalized_array['data_processing_options'], array("LDU"));
    $this->assertEquals($normalized_array['data_processing_options_state'], "1000");
    $this->assertEquals($normalized_array['data_processing_options_country'], "1");
  }
}
