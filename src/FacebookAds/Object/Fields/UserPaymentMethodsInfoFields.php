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

class UserPaymentMethodsInfoFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AVAILABLE_CARD_TYPES = 'available_card_types';
  const AVAILABLE_PAYMENT_METHODS = 'available_payment_methods';
  const AVAILABLE_PAYMENT_METHODS_DETAILS = 'available_payment_methods_details';
  const COUNTRY = 'country';
  const CURRENCY = 'currency';
  const EXISTING_PAYMENT_METHODS = 'existing_payment_methods';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'available_card_types' => 'list<string>',
      'available_payment_methods' => 'list<string>',
      'available_payment_methods_details' => 'list<Object>',
      'country' => 'string',
      'currency' => 'string',
      'existing_payment_methods' => 'list<Object>',
    );
  }
}
