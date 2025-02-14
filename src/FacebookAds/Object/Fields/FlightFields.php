<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
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
  const CUSTOM_LABEL_0 = 'custom_label_0';
  const CUSTOM_LABEL_1 = 'custom_label_1';
  const CUSTOM_LABEL_2 = 'custom_label_2';
  const CUSTOM_LABEL_3 = 'custom_label_3';
  const CUSTOM_LABEL_4 = 'custom_label_4';
  const CUSTOM_NUMBER_0 = 'custom_number_0';
  const CUSTOM_NUMBER_1 = 'custom_number_1';
  const CUSTOM_NUMBER_2 = 'custom_number_2';
  const CUSTOM_NUMBER_3 = 'custom_number_3';
  const CUSTOM_NUMBER_4 = 'custom_number_4';
  const DESCRIPTION = 'description';
  const DESTINATION_AIRPORT = 'destination_airport';
  const DESTINATION_CITY = 'destination_city';
  const FLIGHT_ID = 'flight_id';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const ONEWAY_CURRENCY = 'oneway_currency';
  const ONEWAY_PRICE = 'oneway_price';
  const ORIGIN_AIRPORT = 'origin_airport';
  const ORIGIN_CITY = 'origin_city';
  const PRICE = 'price';
  const PRODUCT_PRIORITY_0 = 'product_priority_0';
  const PRODUCT_PRIORITY_1 = 'product_priority_1';
  const PRODUCT_PRIORITY_2 = 'product_priority_2';
  const PRODUCT_PRIORITY_3 = 'product_priority_3';
  const PRODUCT_PRIORITY_4 = 'product_priority_4';
  const SANITIZED_IMAGES = 'sanitized_images';
  const TAGS = 'tags';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VISIBILITY = 'visibility';

  public function getFieldTypes() {
    return array(
      'applinks' => 'CatalogItemAppLinks',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'custom_number_0' => 'unsigned int',
      'custom_number_1' => 'unsigned int',
      'custom_number_2' => 'unsigned int',
      'custom_number_3' => 'unsigned int',
      'custom_number_4' => 'unsigned int',
      'description' => 'string',
      'destination_airport' => 'string',
      'destination_city' => 'string',
      'flight_id' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'oneway_currency' => 'string',
      'oneway_price' => 'string',
      'origin_airport' => 'string',
      'origin_city' => 'string',
      'price' => 'string',
      'product_priority_0' => 'float',
      'product_priority_1' => 'float',
      'product_priority_2' => 'float',
      'product_priority_3' => 'float',
      'product_priority_4' => 'float',
      'sanitized_images' => 'list<string>',
      'tags' => 'list<string>',
      'unit_price' => 'Object',
      'url' => 'string',
      'visibility' => 'Visibility',
    );
  }
}
