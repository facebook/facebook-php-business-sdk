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

class UserPaymentMobilePricepointsFields extends AbstractEnum {

  const MOBILE_COUNTRY = 'mobile_country';
  const PHONE_NUMBER_LAST4 = 'phone_number_last4';
  const PRICEPOINTS = 'pricepoints';
  const USER_CURRENCY = 'user_currency';

  public function getFieldTypes() {
    return array(
      'mobile_country' => 'string',
      'phone_number_last4' => 'string',
      'pricepoints' => 'list<Object>',
      'user_currency' => 'string',
    );
  }
}
