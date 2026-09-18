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

class ProductCatalogProductSetsPostFields extends AbstractEnum {

  const FILTER = 'filter';
  const ID = 'id';
  const NAME = 'name';
  const PARENT_ID = 'parent_id';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCT_COUNT = 'product_count';
  const RETAILER_ID = 'retailer_id';

  public function getFieldTypes() {
    return array(
      'filter' => 'string',
      'id' => 'int',
      'name' => 'string',
      'parent_id' => 'int',
      'product_catalog' => 'object',
      'product_count' => 'int',
      'retailer_id' => 'string',
    );
  }
}
