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

class ShadowIGUserCatalogProductSearchFields extends AbstractEnum {

  const IMAGE_URL = 'image_url';
  const IS_CHECKOUT_FLOW = 'is_checkout_flow';
  const MERCHANT_ID = 'merchant_id';
  const PRODUCT_ID = 'product_id';
  const PRODUCT_NAME = 'product_name';
  const PRODUCT_VARIANTS = 'product_variants';
  const RETAILER_ID = 'retailer_id';
  const REVIEW_STATUS = 'review_status';

  public function getFieldTypes() {
    return array(
      'image_url' => 'string',
      'is_checkout_flow' => 'bool',
      'merchant_id' => 'int',
      'product_id' => 'int',
      'product_name' => 'string',
      'product_variants' => 'list<ShadowIGUserCatalogProductVariant>',
      'retailer_id' => 'string',
      'review_status' => 'string',
    );
  }
}
