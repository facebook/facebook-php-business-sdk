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

class ExtendedCreditApplicationFields extends AbstractEnum {

  const BILLING_COUNTRY = 'billing_country';
  const CITY = 'city';
  const CNPJ = 'cnpj';
  const COUNTRY = 'country';
  const DISPLAY_CURRENCY = 'display_currency';
  const DUNS_NUMBER = 'duns_number';
  const ID = 'id';
  const INVOICE_EMAIL_ADDRESS = 'invoice_email_address';
  const IS_UMI = 'is_umi';
  const LEGAL_ENTITY_NAME = 'legal_entity_name';
  const ORIGINAL_ONLINE_LIMIT = 'original_online_limit';
  const PHONE_NUMBER = 'phone_number';
  const POSTAL_CODE = 'postal_code';
  const PRODUCT_TYPES = 'product_types';
  const PROPOSED_CREDIT_LIMIT = 'proposed_credit_limit';
  const REGISTRATION_NUMBER = 'registration_number';
  const RUN_ID = 'run_id';
  const STATE = 'state';
  const STATUS = 'status';
  const STREET1 = 'street1';
  const STREET2 = 'street2';
  const SUBMITTER = 'submitter';
  const TAX_EXEMPT_STATUS = 'tax_exempt_status';
  const TAX_ID = 'tax_id';
  const TERMS = 'terms';

  public function getFieldTypes() {
    return array(
      'billing_country' => 'string',
      'city' => 'string',
      'cnpj' => 'string',
      'country' => 'string',
      'display_currency' => 'string',
      'duns_number' => 'string',
      'id' => 'string',
      'invoice_email_address' => 'string',
      'is_umi' => 'bool',
      'legal_entity_name' => 'string',
      'original_online_limit' => 'CurrencyAmount',
      'phone_number' => 'string',
      'postal_code' => 'string',
      'product_types' => 'list<string>',
      'proposed_credit_limit' => 'CurrencyAmount',
      'registration_number' => 'string',
      'run_id' => 'string',
      'state' => 'string',
      'status' => 'string',
      'street1' => 'string',
      'street2' => 'string',
      'submitter' => 'User',
      'tax_exempt_status' => 'string',
      'tax_id' => 'string',
      'terms' => 'string',
    );
  }
}
