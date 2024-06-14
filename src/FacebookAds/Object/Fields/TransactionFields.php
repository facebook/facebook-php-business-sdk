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

class TransactionFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const APP_AMOUNT = 'app_amount';
  const BILLING_END_TIME = 'billing_end_time';
  const BILLING_REASON = 'billing_reason';
  const BILLING_START_TIME = 'billing_start_time';
  const CARD_CHARGE_MODE = 'card_charge_mode';
  const CHARGE_TYPE = 'charge_type';
  const CHECKOUT_CAMPAIGN_GROUP_ID = 'checkout_campaign_group_id';
  const CREDENTIAL_ID = 'credential_id';
  const FATURA_ID = 'fatura_id';
  const ID = 'id';
  const IS_BUSINESS_EC_CHARGE = 'is_business_ec_charge';
  const IS_FUNDING_EVENT = 'is_funding_event';
  const PAYMENT_OPTION = 'payment_option';
  const PRODUCT_TYPE = 'product_type';
  const PROVIDER_AMOUNT = 'provider_amount';
  const STATUS = 'status';
  const TIME = 'time';
  const TRACKING_ID = 'tracking_id';
  const TRANSACTION_TYPE = 'transaction_type';
  const TX_TYPE = 'tx_type';
  const VAT_INVOICE_ID = 'vat_invoice_id';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'app_amount' => 'Object',
      'billing_end_time' => 'unsigned int',
      'billing_reason' => 'string',
      'billing_start_time' => 'unsigned int',
      'card_charge_mode' => 'unsigned int',
      'charge_type' => 'string',
      'checkout_campaign_group_id' => 'string',
      'credential_id' => 'string',
      'fatura_id' => 'unsigned int',
      'id' => 'string',
      'is_business_ec_charge' => 'bool',
      'is_funding_event' => 'bool',
      'payment_option' => 'string',
      'product_type' => 'ProductType',
      'provider_amount' => 'Object',
      'status' => 'string',
      'time' => 'unsigned int',
      'tracking_id' => 'string',
      'transaction_type' => 'string',
      'tx_type' => 'unsigned int',
      'vat_invoice_id' => 'string',
    );
  }
}
