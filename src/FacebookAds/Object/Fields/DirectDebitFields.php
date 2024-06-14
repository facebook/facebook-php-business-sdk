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

class DirectDebitFields extends AbstractEnum {

  const BANK_ACCOUNT_LAST_4 = 'bank_account_last_4';
  const BANK_CODE_LAST_4 = 'bank_code_last_4';
  const BANK_NAME = 'bank_name';
  const DEFAULT_RECEIVING_METHOD_PRODUCTS = 'default_receiving_method_products';
  const DISPLAY_STRING = 'display_string';
  const ID = 'id';
  const LAST_FOUR_DIGITS = 'last_four_digits';
  const ONBOARDING_URL = 'onboarding_url';
  const OWNER_NAME = 'owner_name';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'bank_account_last_4' => 'string',
      'bank_code_last_4' => 'string',
      'bank_name' => 'string',
      'default_receiving_method_products' => 'list<string>',
      'display_string' => 'string',
      'id' => 'string',
      'last_four_digits' => 'string',
      'onboarding_url' => 'string',
      'owner_name' => 'string',
      'status' => 'int',
    );
  }
}
