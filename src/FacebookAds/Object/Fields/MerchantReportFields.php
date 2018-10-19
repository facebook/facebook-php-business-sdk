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

class MerchantReportFields extends AbstractEnum {

  const ADD_TO_CART = 'add_to_cart';
  const BRAND = 'brand';
  const CATALOG_SEGMENT_ID = 'catalog_segment_id';
  const CATALOG_SEGMENT_PURCHASE_VALUE = 'catalog_segment_purchase_value';
  const CATEGORY = 'category';
  const DATE = 'date';
  const LINK_CLICKS = 'link_clicks';
  const PAGE_ID = 'page_id';
  const PRODUCT_ID = 'product_id';
  const PRODUCT_QUANTITY = 'product_quantity';
  const PRODUCT_TOTAL_VALUE = 'product_total_value';
  const PURCHASE = 'purchase';
  const PURCHASE_VALUE = 'purchase_value';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'add_to_cart' => 'int',
      'brand' => 'string',
      'catalog_segment_id' => 'string',
      'catalog_segment_purchase_value' => 'float',
      'category' => 'string',
      'date' => 'string',
      'link_clicks' => 'int',
      'page_id' => 'string',
      'product_id' => 'string',
      'product_quantity' => 'int',
      'product_total_value' => 'float',
      'purchase' => 'int',
      'purchase_value' => 'float',
      'id' => 'string',
    );
  }
}
