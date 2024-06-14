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

class MerchantReportFields extends AbstractEnum {

  const ADD_TO_CART = 'add_to_cart';
  const BRAND = 'brand';
  const CATALOG_SEGMENT_ID = 'catalog_segment_id';
  const CATALOG_SEGMENT_PURCHASE_VALUE = 'catalog_segment_purchase_value';
  const CATEGORY = 'category';
  const DATE = 'date';
  const LATEST_DATE = 'latest_date';
  const LINK_CLICKS = 'link_clicks';
  const MERCHANT_CURRENCY = 'merchant_currency';
  const PAGE_ID = 'page_id';
  const PRODUCT_ID = 'product_id';
  const PRODUCT_QUANTITY = 'product_quantity';
  const PRODUCT_TOTAL_VALUE = 'product_total_value';
  const PURCHASE = 'purchase';
  const PURCHASE_VALUE = 'purchase_value';

  public function getFieldTypes() {
    return array(
      'add_to_cart' => 'int',
      'brand' => 'string',
      'catalog_segment_id' => 'string',
      'catalog_segment_purchase_value' => 'float',
      'category' => 'string',
      'date' => 'string',
      'latest_date' => 'string',
      'link_clicks' => 'int',
      'merchant_currency' => 'string',
      'page_id' => 'string',
      'product_id' => 'string',
      'product_quantity' => 'int',
      'product_total_value' => 'float',
      'purchase' => 'int',
      'purchase_value' => 'float',
    );
  }
}
