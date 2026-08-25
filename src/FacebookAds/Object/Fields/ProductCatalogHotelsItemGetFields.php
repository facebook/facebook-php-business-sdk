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

class ProductCatalogHotelsItemGetFields extends AbstractEnum {

  const ADDITIONAL_IMAGE_URLS = 'additional_image_urls';
  const ADDRESS = 'address';
  const APPLINK_ANDROID_APP_NAME = 'applink_android_app_name';
  const APPLINK_ANDROID_CLASS = 'applink_android_class';
  const APPLINK_ANDROID_PACKAGE = 'applink_android_package';
  const APPLINK_ANDROID_URL = 'applink_android_url';
  const APPLINK_IOS_APP_NAME = 'applink_ios_app_name';
  const APPLINK_IOS_APP_STORE_ID = 'applink_ios_app_store_id';
  const APPLINK_IOS_URL = 'applink_ios_url';
  const APPLINKS = 'applinks';
  const BRAND = 'brand';
  const CATEGORY = 'category';
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
  const DA_DISPLAY_PREVIEW_URL = 'da_display_preview_url';
  const DESCRIPTION = 'description';
  const GUEST_RATINGS = 'guest_ratings';
  const HOTEL_ID = 'hotel_id';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGE_URL = 'image_url';
  const IMAGES = 'images';
  const LOWEST_BASE_PRICE = 'lowest_base_price';
  const LOYALTY_PROGRAM = 'loyalty_program';
  const MARGIN_LEVEL = 'margin_level';
  const NAME = 'name';
  const NUMBER_OF_ROOMS = 'number_of_rooms';
  const PHONE = 'phone';
  const PRICE = 'price';
  const PRODUCT_PRIORITY_0 = 'product_priority_0';
  const PRODUCT_PRIORITY_1 = 'product_priority_1';
  const PRODUCT_PRIORITY_2 = 'product_priority_2';
  const PRODUCT_PRIORITY_3 = 'product_priority_3';
  const PRODUCT_PRIORITY_4 = 'product_priority_4';
  const RETAILER_ID = 'retailer_id';
  const SALE_PRICE = 'sale_price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const STAR_RATING = 'star_rating';
  const TAGS = 'tags';
  const URL = 'url';
  const VIDEO_URLS = 'video_urls';
  const VIDEOS_METADATA = 'videos_metadata';
  const VISIBILITY = 'visibility';

  public function getFieldTypes() {
    return array(
      'additional_image_urls' => 'list<string>',
      'address' => 'string',
      'applink_android_app_name' => 'string',
      'applink_android_class' => 'string',
      'applink_android_package' => 'string',
      'applink_android_url' => 'string',
      'applink_ios_app_name' => 'string',
      'applink_ios_app_store_id' => 'int',
      'applink_ios_url' => 'string',
      'applinks' => 'object',
      'brand' => 'string',
      'category' => 'string',
      'currency' => 'string',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'custom_number_0' => 'int',
      'custom_number_1' => 'int',
      'custom_number_2' => 'int',
      'custom_number_3' => 'int',
      'custom_number_4' => 'int',
      'da_display_preview_url' => 'string',
      'description' => 'string',
      'guest_ratings' => 'string',
      'hotel_id' => 'string',
      'id' => 'int',
      'image_fetch_status' => 'string',
      'image_url' => 'string',
      'images' => 'list<string>',
      'lowest_base_price' => 'string',
      'loyalty_program' => 'string',
      'margin_level' => 'int',
      'name' => 'string',
      'number_of_rooms' => 'int',
      'phone' => 'string',
      'price' => 'string',
      'product_priority_0' => 'float',
      'product_priority_1' => 'float',
      'product_priority_2' => 'float',
      'product_priority_3' => 'float',
      'product_priority_4' => 'float',
      'retailer_id' => 'string',
      'sale_price' => 'string',
      'sanitized_images' => 'list<string>',
      'star_rating' => 'float',
      'tags' => 'list<string>',
      'url' => 'string',
      'video_urls' => 'list<string>',
      'videos_metadata' => 'object',
      'visibility' => 'string',
    );
  }
}
