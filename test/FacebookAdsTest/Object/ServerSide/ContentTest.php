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
use FacebookAds\Object\ServerSide\Content;
use FacebookAds\Object\ServerSide\DeliveryCategory;


class ContentTest extends AbstractUnitTestCase {
  public function testContentBuilder() {
    $expected = array(
      'id' => 'product-test',
      'quantity' => 10,
      'item_price' => 4.99,
      'title' => 'title-test',
      'description' => 'description-test',
      'brand' => 'brand-test',
      'category' => 'category-test',
      'delivery_category' => DeliveryCategory::CURBSIDE,
    );

    $content = (new Content())
      ->setProductId($expected['id'])
      ->setQuantity($expected['quantity'])
      ->setItemPrice($expected['item_price'])
      ->setTitle($expected['title'])
      ->setDescription($expected['description'])
      ->setBrand($expected['brand'])
      ->setCategory($expected['category'])
      ->setDeliveryCategory($expected['delivery_category']);

    $this->assertEquals($content->normalize(), $expected);
  }

  public function testContentConstructor() {
    $initial = array(
      'product_id' => 'product-test',
      'quantity' => 10,
      'item_price' => 4.99,
      'title' => 'title-test',
      'description' => 'description-test',
      'brand' => 'brand-test',
      'category' => 'category-test',
      'delivery_category' => DeliveryCategory::CURBSIDE,
    );
    $expected = array(
      'id' => $initial['product_id'],
      'quantity' => $initial['quantity'],
      'item_price' => $initial['item_price'],
      'title' => $initial['title'],
      'description' => $initial['description'],
      'brand' => $initial['brand'],
      'category' => $initial['category'],
      'delivery_category' => DeliveryCategory::CURBSIDE,
    );
    $content = new Content($initial);

    $this->assertEquals($content->normalize(), $expected);
  }

  public function testInvalidDeliveryCategory() {
    $test_delivery_category = 'invalid_delivery_category';
    $content = (new Content())->setDeliveryCategory($test_delivery_category);
    try {
     $normalized_payload = $content->normalize();
    } catch (\Exception $exception) {
      $threw_exception = true;
      $expected_string = sprintf("Invalid delivery_category passed: %s", $test_delivery_category);
      $this->assertStringContainsString($expected_string, $exception->getMessage());
    }

    $this->assertTrue($threw_exception);
  }
}
