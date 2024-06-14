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

class EventTicketTierFields extends AbstractEnum {

  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const END_SALES_TIME = 'end_sales_time';
  const END_SHOW_TIME = 'end_show_time';
  const FEE_SETTINGS = 'fee_settings';
  const ID = 'id';
  const MAXIMUM_QUANTITY = 'maximum_quantity';
  const METADATA = 'metadata';
  const MINIMUM_QUANTITY = 'minimum_quantity';
  const NAME = 'name';
  const PRICE = 'price';
  const PRIORITY = 'priority';
  const RETAILER_ID = 'retailer_id';
  const SEATING_MAP_IMAGE_URL = 'seating_map_image_url';
  const START_SALES_TIME = 'start_sales_time';
  const START_SHOW_TIME = 'start_show_time';
  const STATUS = 'status';
  const TOTAL_QUANTITY = 'total_quantity';

  public function getFieldTypes() {
    return array(
      'currency' => 'string',
      'description' => 'string',
      'end_sales_time' => 'datetime',
      'end_show_time' => 'datetime',
      'fee_settings' => 'string',
      'id' => 'string',
      'maximum_quantity' => 'int',
      'metadata' => 'string',
      'minimum_quantity' => 'int',
      'name' => 'string',
      'price' => 'int',
      'priority' => 'int',
      'retailer_id' => 'string',
      'seating_map_image_url' => 'string',
      'start_sales_time' => 'datetime',
      'start_show_time' => 'datetime',
      'status' => 'string',
      'total_quantity' => 'int',
    );
  }
}
