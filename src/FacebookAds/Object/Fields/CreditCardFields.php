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

class CreditCardFields extends AbstractEnum {

  const BILLING_ADDRESS = 'billing_address';
  const CARD_COBADGING = 'card_cobadging';
  const CARD_HOLDER_NAME = 'card_holder_name';
  const CARD_TYPE = 'card_type';
  const CREDENTIAL_ID = 'credential_id';
  const DEFAULT_RECEIVING_METHOD_PRODUCTS = 'default_receiving_method_products';
  const EXPIRY_MONTH = 'expiry_month';
  const EXPIRY_YEAR = 'expiry_year';
  const ID = 'id';
  const IS_CVV_TRICKY_BIN = 'is_cvv_tricky_bin';
  const IS_ENABLED = 'is_enabled';
  const IS_LAST_USED = 'is_last_used';
  const IS_NETWORK_TOKENIZED_IN_INDIA = 'is_network_tokenized_in_india';
  const IS_SOFT_DISABLED = 'is_soft_disabled';
  const IS_USER_VERIFIED = 'is_user_verified';
  const IS_ZIP_VERIFIED = 'is_zip_verified';
  const LAST4 = 'last4';
  const READABLE_CARD_TYPE = 'readable_card_type';
  const TIME_CREATED = 'time_created';
  const TIME_CREATED_TS = 'time_created_ts';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'billing_address' => 'Object',
      'card_cobadging' => 'string',
      'card_holder_name' => 'string',
      'card_type' => 'string',
      'credential_id' => 'int',
      'default_receiving_method_products' => 'list<string>',
      'expiry_month' => 'string',
      'expiry_year' => 'string',
      'id' => 'string',
      'is_cvv_tricky_bin' => 'bool',
      'is_enabled' => 'bool',
      'is_last_used' => 'bool',
      'is_network_tokenized_in_india' => 'bool',
      'is_soft_disabled' => 'bool',
      'is_user_verified' => 'bool',
      'is_zip_verified' => 'bool',
      'last4' => 'string',
      'readable_card_type' => 'string',
      'time_created' => 'datetime',
      'time_created_ts' => 'int',
      'type' => 'string',
    );
  }
}
