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

class TransactableItemFields extends AbstractEnum {

  const ACTION_TITLE = 'action_title';
  const APPLINKS = 'applinks';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const DURATION_TIME = 'duration_time';
  const DURATION_TYPE = 'duration_type';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const ORDER_INDEX = 'order_index';
  const PRICE = 'price';
  const PRICE_TYPE = 'price_type';
  const SANITIZED_IMAGES = 'sanitized_images';
  const SESSION_TYPE = 'session_type';
  const TIME_PADDING_AFTER_END = 'time_padding_after_end';
  const TITLE = 'title';
  const TRANSACTABLE_ITEM_ID = 'transactable_item_id';
  const URL = 'url';
  const VISIBILITY = 'visibility';

  public function getFieldTypes() {
    return array(
      'action_title' => 'string',
      'applinks' => 'CatalogItemAppLinks',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'description' => 'string',
      'duration_time' => 'unsigned int',
      'duration_type' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'order_index' => 'unsigned int',
      'price' => 'string',
      'price_type' => 'string',
      'sanitized_images' => 'list<string>',
      'session_type' => 'string',
      'time_padding_after_end' => 'unsigned int',
      'title' => 'string',
      'transactable_item_id' => 'string',
      'url' => 'string',
      'visibility' => 'Visibility',
    );
  }
}
