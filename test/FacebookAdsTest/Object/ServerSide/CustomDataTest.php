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
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\Content;
use FacebookAds\Object\ServerSide\DeliveryCategory;

class CustomDataTest extends AbstractUnitTestCase {
  public function testBuilderAndConstructor() {
    $custom_properties = array(
      'custom1' => 'property1',
      'custom2' => 'property2'
    );
    $content_state = array('title' => 'content-1');
    $content = new Content($content_state);
    $state = array(
      'value' => 0.1,
      'currency' => 'usd',
      'content_name' => 'content-name-2',
      'content_category' => 'content-category-3',
      'content_ids' => array('id-1', 'id2'),
      'content_type' => 'content-type-4',
      'order_id' => 'order-id-5',
      'predicted_ltv' => 6.10,
      'num_items' => 7,
      'status' => 'status-8',
      'search_string' => 'search-string-9',
      'item_number' => 'item-number-10',
      'delivery_category' => DeliveryCategory::CURBSIDE,
    );
    $expected = array_merge(
      $state,
      array('contents' => array($content_state)),
      $custom_properties
    );
    $builder = (new CustomData())
      ->setValue($state['value'])
      ->setCurrency($state['currency'])
      ->setContentName($state['content_name'])
      ->setContentCategory($state['content_category'])
      ->setContentIds($state['content_ids'])
      ->setContents(array($content))
      ->setContentType($state['content_type'])
      ->setOrderId($state['order_id'])
      ->setPredictedLtv($state['predicted_ltv'])
      ->setNumItems($state['num_items'])
      ->setStatus($state['status'])
      ->setSearchString($state['search_string'])
      ->setItemNumber($state['item_number'])
      ->setDeliveryCategory($state['delivery_category'])
      ->setCustomProperties($custom_properties);
    $this->assertEquals($expected, $builder->normalize());

    $constructor = new CustomData(array(
      'value' => $state['value'],
      'currency' => $state['currency'],
      'content_name' => $state['content_name'],
      'content_category' => $state['content_category'],
      'content_ids' => $state['content_ids'],
      'contents' => array($content),
      'content_type' => $state['content_type'],
      'order_id' => $state['order_id'],
      'predicted_ltv' => $state['predicted_ltv'],
      'num_items' => $state['num_items'],
      'status' => $state['status'],
      'search_string' => $state['search_string'],
      'item_number' => $state['item_number'],
      'delivery_category' => $state['delivery_category'],
      'custom_properties' => $custom_properties
    ));
    $this->assertEquals($expected, $constructor->normalize());
  }

  public function testInvalidDeliveryCategory() {
    $test_delivery_category = 'invalid_delivery_category';

    $custom_data = (new CustomData())->setDeliveryCategory($test_delivery_category);

    try {
     $normalized_payload = $custom_data->normalize();
    } catch (\Exception $exception) {
      $has_throw_exception = true;
      $expected_string = sprintf("Invalid delivery_category passed: %s",$test_delivery_category);
      $this->assertStringContainsString($expected_string, $exception->getMessage());
    }

    $this->assertTrue($has_throw_exception);
  }

  public function testZeroCustomDataValue() {
    $custom_data = (new CustomData())->setValue(0.0);

    $normalized_payload = $custom_data->normalize();
    $this->assertEquals($normalized_payload['value'], 0);
  }
}
