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
