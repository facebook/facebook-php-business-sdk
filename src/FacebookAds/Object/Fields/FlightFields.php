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

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class FlightFields extends AbstractEnum {

  const APPLINKS = 'applinks';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const DESTINATION_AIRPORT = 'destination_airport';
  const DESTINATION_CITY = 'destination_city';
  const FLIGHT_ID = 'flight_id';
  const ID = 'id';
  const IMAGES = 'images';
  const ONEWAY_CURRENCY = 'oneway_currency';
  const ONEWAY_PRICE = 'oneway_price';
  const ORIGIN_AIRPORT = 'origin_airport';
  const ORIGIN_CITY = 'origin_city';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'applinks' => 'CatalogItemAppLinks',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'description' => 'string',
      'destination_airport' => 'string',
      'destination_city' => 'string',
      'flight_id' => 'string',
      'id' => 'string',
      'images' => 'list<string>',
      'oneway_currency' => 'string',
      'oneway_price' => 'string',
      'origin_airport' => 'string',
      'origin_city' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'url' => 'string',
    );
  }
}
