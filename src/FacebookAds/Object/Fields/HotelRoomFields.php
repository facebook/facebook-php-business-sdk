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

class HotelRoomFields extends AbstractEnum {

  const APPLINKS = 'applinks';
  const BASE_PRICE = 'base_price';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const IMAGES = 'images';
  const MARGIN_LEVEL = 'margin_level';
  const NAME = 'name';
  const ROOM_ID = 'room_id';
  const SALE_PRICE = 'sale_price';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'applinks' => 'CatalogItemAppLinks',
      'base_price' => 'string',
      'currency' => 'string',
      'description' => 'string',
      'id' => 'string',
      'images' => 'list<string>',
      'margin_level' => 'string',
      'name' => 'string',
      'room_id' => 'string',
      'sale_price' => 'string',
      'url' => 'string',
    );
  }
}
