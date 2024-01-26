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

class ShadowIGMediaProductTagsFields extends AbstractEnum {

  const IMAGE_URL = 'image_url';
  const IS_CHECKOUT = 'is_checkout';
  const MERCHANT_ID = 'merchant_id';
  const NAME = 'name';
  const PRICE_STRING = 'price_string';
  const PRODUCT_ID = 'product_id';
  const REVIEW_STATUS = 'review_status';
  const STRIPPED_PRICE_STRING = 'stripped_price_string';
  const STRIPPED_SALE_PRICE_STRING = 'stripped_sale_price_string';
  const X = 'x';
  const Y = 'y';

  public function getFieldTypes() {
    return array(
      'image_url' => 'string',
      'is_checkout' => 'bool',
      'merchant_id' => 'int',
      'name' => 'string',
      'price_string' => 'string',
      'product_id' => 'int',
      'review_status' => 'string',
      'stripped_price_string' => 'string',
      'stripped_sale_price_string' => 'string',
      'x' => 'float',
      'y' => 'float',
    );
  }
}
