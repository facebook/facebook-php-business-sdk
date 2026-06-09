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

class ProductGroupGetFields extends AbstractEnum {

  const ID = 'id';
  const MINI_SHOPS_PRODUCT_SETS_COUNT = 'mini_shops_product_sets_count';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCTS = 'products';
  const REPRESENTATIVE_ITEM_ID = 'representative_item_id';
  const RETAILER_ID = 'retailer_id';
  const VARIANTS = 'variants';

  public function getFieldTypes() {
    return array(
      'id' => 'int',
      'mini_shops_product_sets_count' => 'int',
      'product_catalog' => 'object',
      'products' => 'object',
      'representative_item_id' => 'string',
      'retailer_id' => 'string',
      'variants' => 'list<object>',
    );
  }
}
