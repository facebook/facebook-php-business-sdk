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

class PaymentEnginePaymentFields extends AbstractEnum {

  const ACTIONS = 'actions';
  const APPLICATION = 'application';
  const COUNTRY = 'country';
  const CREATED_TIME = 'created_time';
  const DISPUTES = 'disputes';
  const FRAUD_STATUS = 'fraud_status';
  const FULFILLMENT_STATUS = 'fulfillment_status';
  const ID = 'id';
  const IS_FROM_AD = 'is_from_ad';
  const IS_FROM_PAGE_POST = 'is_from_page_post';
  const ITEMS = 'items';
  const PAYOUT_FOREIGN_EXCHANGE_RATE = 'payout_foreign_exchange_rate';
  const PHONE_SUPPORT_ELIGIBLE = 'phone_support_eligible';
  const PLATFORM = 'platform';
  const REFUNDABLE_AMOUNT = 'refundable_amount';
  const REQUEST_ID = 'request_id';
  const TAX = 'tax';
  const TAX_COUNTRY = 'tax_country';
  const TEST = 'test';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'actions' => 'list<Object>',
      'application' => 'Application',
      'country' => 'string',
      'created_time' => 'datetime',
      'disputes' => 'list<Object>',
      'fraud_status' => 'string',
      'fulfillment_status' => 'string',
      'id' => 'string',
      'is_from_ad' => 'bool',
      'is_from_page_post' => 'bool',
      'items' => 'list<Object>',
      'payout_foreign_exchange_rate' => 'float',
      'phone_support_eligible' => 'bool',
      'platform' => 'string',
      'refundable_amount' => 'CurrencyAmount',
      'request_id' => 'string',
      'tax' => 'string',
      'tax_country' => 'string',
      'test' => 'unsigned int',
      'user' => 'User',
    );
  }
}
