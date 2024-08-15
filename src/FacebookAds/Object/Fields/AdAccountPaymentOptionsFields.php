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

class AdAccountPaymentOptionsFields extends AbstractEnum {

  const AVAILABLE_ALTPAY_OPTIONS = 'available_altpay_options';
  const AVAILABLE_CARD_TYPES = 'available_card_types';
  const AVAILABLE_PAYMENT_OPTIONS = 'available_payment_options';
  const EXISTING_PAYMENT_METHODS = 'existing_payment_methods';

  public function getFieldTypes() {
    return array(
      'available_altpay_options' => 'list<Object>',
      'available_card_types' => 'list<string>',
      'available_payment_options' => 'list<string>',
      'existing_payment_methods' => 'list<Object>',
    );
  }
}
