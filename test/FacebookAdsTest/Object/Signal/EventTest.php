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

namespace FacebookAdsTest\Object\Signal;

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Object\Signal\CustomData;
use FacebookAds\Object\Signal\Event;
use FacebookAds\Object\Signal\UserData;

class EventTest extends AbstractUnitTestCase {
  public function testBuilder() {
    $user_data = new UserData(array('email' => 'aaa@fb.com'));
    $billing_contact = new UserData(array('email' => 'bbb@fb.com'));
    $shipping_contact = new UserData(array('email' => 'ccc@fb.com'));
    $custom_data = (new CustomData())
    ->setOrderId('order_id')
    ->setBillingContact($billing_contact)
    ->setShippingContact($shipping_contact);
    $expected = array(
      'event_name' => 'event_name',
      'event_time' => 1234,
      'event_id' => 'event_id',
      'data_processing_options' => array('LDU'),
      'data_processing_options_country' => 1,
      'data_processing_options_state' => 1000,
    );

    $event = (new Event())
      ->setEventName($expected['event_name'])
      ->setEventTime($expected['event_time'])
      ->setEventId($expected['event_id'])
      ->setUserData($user_data)
      ->setCustomData($custom_data)
      ->setDataProcessingOptions($expected['data_processing_options'])
      ->setDataProcessingOptionsCountry($expected['data_processing_options_country'])
      ->setDataProcessingOptionsState($expected['data_processing_options_state']);

    $expected['user_data'] = $user_data->getBusinessDataUserData()->toJson();
    $expected['custom_data'] = $custom_data->getBusinessDataCustomData()->toJson();
    $this->assertEquals($expected, $event->getBusinessDataEvent()->toJson());
    $this->assertEquals('order_id', $event->getBusinessDataEvent()->getCustomData()->getOrderId());
    $this->assertEquals('ccc@fb.com', $event->getBusinessDataEvent()->getCustomData()->getShippingContact()->getEmail());
    $this->assertEquals('bbb@fb.com', $event->getBusinessDataEvent()->getCustomData()->getBillingContact()->getEmail());
    $this->assertEquals('aaa@fb.com', $event->getBusinessDataEvent()->getUserData()->getEmail());

    $expected['user_data'] = $user_data->getServerSideUserData()->normalize();
    $expected['custom_data'] = $custom_data->getServerSideCustomData()->normalize();
    $this->assertEquals($expected, $event->getServerSideEvent()->normalize());
    $this->assertEquals('order_id', $event->getServerSideEvent()->getCustomData()->getOrderId());
    $this->assertEquals('aaa@fb.com', $event->getServerSideEvent()->getUserData()->getEmail());

  }
}
