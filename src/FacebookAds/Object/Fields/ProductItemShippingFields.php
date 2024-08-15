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

class ProductItemShippingFields extends AbstractEnum {

  const SHIPPING_COUNTRY = 'shipping_country';
  const SHIPPING_PRICE_CURRENCY = 'shipping_price_currency';
  const SHIPPING_PRICE_VALUE = 'shipping_price_value';
  const SHIPPING_REGION = 'shipping_region';
  const SHIPPING_SERVICE = 'shipping_service';

  public function getFieldTypes() {
    return array(
      'shipping_country' => 'string',
      'shipping_price_currency' => 'string',
      'shipping_price_value' => 'float',
      'shipping_region' => 'string',
      'shipping_service' => 'string',
    );
  }
}
