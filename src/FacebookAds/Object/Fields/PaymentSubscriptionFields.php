<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
