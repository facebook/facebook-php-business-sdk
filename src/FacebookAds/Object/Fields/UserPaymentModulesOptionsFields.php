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

class UserPaymentModulesOptionsFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AVAILABLE_PAYMENT_OPTIONS = 'available_payment_options';
  const COUNTRY = 'country';
  const CURRENCY = 'currency';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'available_payment_options' => 'list<Object>',
      'country' => 'string',
      'currency' => 'string',
    );
  }
}
