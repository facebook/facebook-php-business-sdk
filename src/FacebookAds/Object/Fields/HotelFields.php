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

class HotelFields extends AbstractEnum {

  const ADDRESS = 'address';
  const APPLINKS = 'applinks';
  const BRAND = 'brand';
  const CATEGORY = 'category';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const GUEST_RATINGS = 'guest_ratings';
  const HOTEL_ID = 'hotel_id';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const LOWEST_BASE_PRICE = 'lowest_base_price';
  const LOYALTY_PROGRAM = 'loyalty_program';
  const MARGIN_LEVEL = 'margin_level';
  const NAME = 'name';
  const PHONE = 'phone';
  const SALE_PRICE = 'sale_price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const STAR_RATING = 'star_rating';
  const TAGS = 'tags';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VISIBILITY = 'visibility';
  const BASE_PRICE = 'base_price';

  public function getFieldTypes() {
    return array(
      'address' => 'string',
      'applinks' => 'CatalogItemAppLinks',
      'brand' => 'string',
      'category' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'description' => 'string',
      'guest_ratings' => 'string',
      'hotel_id' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'lowest_base_price' => 'string',
      'loyalty_program' => 'string',
      'margin_level' => 'unsigned int',
      'name' => 'string',
      'phone' => 'string',
      'sale_price' => 'string',
      'sanitized_images' => 'list<string>',
      'star_rating' => 'float',
      'tags' => 'list<string>',
      'unit_price' => 'Object',
      'url' => 'string',
      'visibility' => 'Visibility',
      'base_price' => 'unsigned int',
    );
  }
}
