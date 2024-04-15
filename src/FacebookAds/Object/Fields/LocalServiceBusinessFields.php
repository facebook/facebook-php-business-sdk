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

class LocalServiceBusinessFields extends AbstractEnum {

  const ADDRESS = 'address';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const BRAND = 'brand';
  const CATEGORY = 'category';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CONDITION = 'condition';
  const CUISINE_TYPE = 'cuisine_type';
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
  const EXPIRATION_DATE = 'expiration_date';
  const GTIN = 'gtin';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const LOCAL_INFO = 'local_info';
  const LOCAL_SERVICE_BUSINESS_ID = 'local_service_business_id';
  const MAIN_LOCAL_INFO = 'main_local_info';
  const PHONE = 'phone';
  const PRICE = 'price';
  const PRICE_RANGE = 'price_range';
  const RETAILER_CATEGORY = 'retailer_category';
  const SANITIZED_IMAGES = 'sanitized_images';
  const SIZE = 'size';
  const TAGS = 'tags';
  const TITLE = 'title';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VENDOR_ID = 'vendor_id';
  const VISIBILITY = 'visibility';

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
      'applinks' => 'CatalogItemAppLinks',
      'availability' => 'Availability',
      'brand' => 'string',
      'category' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'condition' => 'Condition',
      'cuisine_type' => 'string',
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
      'expiration_date' => 'string',
      'gtin' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'local_info' => 'ProductItemLocalInfo',
      'local_service_business_id' => 'string',
      'main_local_info' => 'ProductItemLocalInfo',
      'phone' => 'string',
      'price' => 'string',
      'price_range' => 'string',
      'retailer_category' => 'string',
      'sanitized_images' => 'list<string>',
      'size' => 'string',
      'tags' => 'list<string>',
      'title' => 'string',
      'unit_price' => 'Object',
      'url' => 'string',
      'vendor_id' => 'string',
      'visibility' => 'Visibility',
    );
  }
}
