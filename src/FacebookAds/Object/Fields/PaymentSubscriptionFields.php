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

class PaymentSubscriptionFields extends AbstractEnum {

  const AMOUNT = 'amount';
  const APP_PARAM_DATA = 'app_param_data';
  const APPLICATION = 'application';
  const BILLING_PERIOD = 'billing_period';
  const CANCELED_REASON = 'canceled_reason';
  const CREATED_TIME = 'created_time';
  const CURRENCY = 'currency';
  const ID = 'id';
  const LAST_PAYMENT = 'last_payment';
  const NEXT_BILL_TIME = 'next_bill_time';
  const NEXT_PERIOD_AMOUNT = 'next_period_amount';
  const NEXT_PERIOD_CURRENCY = 'next_period_currency';
  const NEXT_PERIOD_PRODUCT = 'next_period_product';
  const PAYMENT_STATUS = 'payment_status';
  const PENDING_CANCEL = 'pending_cancel';
  const PERIOD_START_TIME = 'period_start_time';
  const PRODUCT = 'product';
  const STATUS = 'status';
  const TEST = 'test';
  const TRIAL_AMOUNT = 'trial_amount';
  const TRIAL_CURRENCY = 'trial_currency';
  const TRIAL_EXPIRY_TIME = 'trial_expiry_time';
  const UPDATED_TIME = 'updated_time';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'amount' => 'string',
      'app_param_data' => 'string',
      'application' => 'Application',
      'billing_period' => 'string',
      'canceled_reason' => 'string',
      'created_time' => 'datetime',
      'currency' => 'string',
      'id' => 'string',
      'last_payment' => 'PaymentEnginePayment',
      'next_bill_time' => 'datetime',
      'next_period_amount' => 'string',
      'next_period_currency' => 'string',
      'next_period_product' => 'string',
      'payment_status' => 'string',
      'pending_cancel' => 'bool',
      'period_start_time' => 'datetime',
      'product' => 'string',
      'status' => 'string',
      'test' => 'unsigned int',
      'trial_amount' => 'string',
      'trial_currency' => 'string',
      'trial_expiry_time' => 'datetime',
      'updated_time' => 'datetime',
      'user' => 'User',
    );
  }
}
