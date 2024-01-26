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

class CurrencyFields extends AbstractEnum {

  const CURRENCY_OFFSET = 'currency_offset';
  const USD_EXCHANGE = 'usd_exchange';
  const USD_EXCHANGE_INVERSE = 'usd_exchange_inverse';
  const USER_CURRENCY = 'user_currency';

  public function getFieldTypes() {
    return array(
      'currency_offset' => 'unsigned int',
      'usd_exchange' => 'float',
      'usd_exchange_inverse' => 'float',
      'user_currency' => 'string',
    );
  }
}
