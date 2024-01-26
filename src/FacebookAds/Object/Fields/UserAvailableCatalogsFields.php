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

class UserAvailableCatalogsFields extends AbstractEnum {

  const CATALOG_ID = 'catalog_id';
  const CATALOG_NAME = 'catalog_name';
  const PRODUCT_COUNT = 'product_count';
  const SHOP_NAME = 'shop_name';

  public function getFieldTypes() {
    return array(
      'catalog_id' => 'string',
      'catalog_name' => 'string',
      'product_count' => 'int',
      'shop_name' => 'string',
    );
  }
}
