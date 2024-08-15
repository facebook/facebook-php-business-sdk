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

class AdAssetOnsiteDestinationsFields extends AbstractEnum {

  const AUTO_OPTIMIZATION = 'auto_optimization';
  const DETAILS_PAGE_PRODUCT_ID = 'details_page_product_id';
  const SHOP_COLLECTION_PRODUCT_SET_ID = 'shop_collection_product_set_id';
  const STOREFRONT_SHOP_ID = 'storefront_shop_id';

  public function getFieldTypes() {
    return array(
      'auto_optimization' => 'string',
      'details_page_product_id' => 'string',
      'shop_collection_product_set_id' => 'string',
      'storefront_shop_id' => 'string',
    );
  }
}
