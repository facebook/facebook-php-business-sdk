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

class OfflineProductItemFields extends AbstractEnum {

  const APPLINKS = 'applinks';
  const BRAND = 'brand';
  const CATEGORY = 'category';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGE_URL = 'image_url';
  const IMAGES = 'images';
  const NAME = 'name';
  const OFFLINE_PRODUCT_ITEM_ID = 'offline_product_item_id';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const URL = 'url';
  const VISIBILITY = 'visibility';

  public function getFieldTypes() {
    return array(
      'applinks' => 'CatalogItemAppLinks',
      'brand' => 'string',
      'category' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'description' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'image_url' => 'string',
      'images' => 'list<string>',
      'name' => 'string',
      'offline_product_item_id' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'url' => 'string',
      'visibility' => 'Visibility',
    );
  }
}
