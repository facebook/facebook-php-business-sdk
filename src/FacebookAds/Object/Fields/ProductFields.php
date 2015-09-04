<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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
 * @method static ProductFields getInstance()
 */
class ProductFields extends AbstractEnum {

  const ID = 'id';
  const AGE_GROUP = 'age_group';
  const AVAILABILITY = 'availability';
  const BRAND = 'brand';
  const CATEGORY = 'category';
  const COLOR = 'color';
  const CONDITION = 'condition';
  const DESCRIPTION = 'description';
  const EXPIRATION_DATE = 'expiration_date';
  const GENDER = 'gender';
  const GTIN = 'gtin';
  const IMAGE_URL = 'image_url';
  const MATERIAL = 'material';
  const MANUFACTURER_PART_NUMBER = 'manufacturer_part_number';
  const NAME = 'name';
  const PATTERN = 'pattern';
  const PRICE = 'price';
  const PRODUCT_TYPE = 'product_type';
  const RETAILER_ID = 'retailer_id';
  const RETAILER_PRODUCT_GROUP_ID = 'retailer_product_group_id';
  const SALE_PRICE = 'sale_price';
  const SALE_PRICE_START_DATE = 'sale_price_start_date';
  const SALE_PRICE_END_DATE = 'sale_price_end_date';
  const SHIPPING_WEIGHT_VALUE = 'shipping_weight_value';
  const SHIPPING_WEIGHT_UNIT = 'shipping_weight_unit';
  const SIZE = 'size';
  const URL = 'url';
  const PRODUCT_FEED = 'product_feed';
}
