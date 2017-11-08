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

class TransactionFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const APP_AMOUNT = 'app_amount';
  const BILLING_END_TIME = 'billing_end_time';
  const BILLING_REASON = 'billing_reason';
  const BILLING_START_TIME = 'billing_start_time';
  const CHARGE_TYPE = 'charge_type';
  const CHECKOUT_CAMPAIGN_GROUP_ID = 'checkout_campaign_group_id';
  const CREDENTIAL_ID = 'credential_id';
  const FATURA_ID = 'fatura_id';
  const ID = 'id';
  const IS_BUSINESS_EC_CHARGE = 'is_business_ec_charge';
  const PAYMENT_OPTION = 'payment_option';
  const PRODUCT_TYPE = 'product_type';
  const PROVIDER_AMOUNT = 'provider_amount';
  const STATUS = 'status';
  const TIME = 'time';
  const TRACKING_ID = 'tracking_id';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'app_amount' => 'TransactionCurrencyAmount',
      'billing_end_time' => 'unsigned int',
      'billing_reason' => 'string',
      'billing_start_time' => 'unsigned int',
      'charge_type' => 'string',
      'checkout_campaign_group_id' => 'string',
      'credential_id' => 'string',
      'fatura_id' => 'unsigned int',
      'id' => 'string',
      'is_business_ec_charge' => 'bool',
      'payment_option' => 'string',
      'product_type' => 'ProductType',
      'provider_amount' => 'TransactionCurrencyAmount',
      'status' => 'string',
      'time' => 'unsigned int',
      'tracking_id' => 'string',
    );
  }
}
