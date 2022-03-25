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

class OmegaCustomerTrxFields extends AbstractEnum {

  const AD_ACCOUNT_IDS = 'ad_account_ids';
  const ADVERTISER_NAME = 'advertiser_name';
  const AMOUNT = 'amount';
  const AMOUNT_DUE = 'amount_due';
  const BILLED_AMOUNT_DETAILS = 'billed_amount_details';
  const BILLING_PERIOD = 'billing_period';
  const CDN_DOWNLOAD_URI = 'cdn_download_uri';
  const CURRENCY = 'currency';
  const DOWNLOAD_URI = 'download_uri';
  const DUE_DATE = 'due_date';
  const ENTITY = 'entity';
  const ID = 'id';
  const INVOICE_DATE = 'invoice_date';
  const INVOICE_ID = 'invoice_id';
  const INVOICE_TYPE = 'invoice_type';
  const LIABILITY_TYPE = 'liability_type';
  const PAYMENT_STATUS = 'payment_status';
  const PAYMENT_TERM = 'payment_term';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'ad_account_ids' => 'list<string>',
      'advertiser_name' => 'string',
      'amount' => 'string',
      'amount_due' => 'CurrencyAmount',
      'billed_amount_details' => 'Object',
      'billing_period' => 'string',
      'cdn_download_uri' => 'string',
      'currency' => 'string',
      'download_uri' => 'string',
      'due_date' => 'datetime',
      'entity' => 'string',
      'id' => 'string',
      'invoice_date' => 'datetime',
      'invoice_id' => 'string',
      'invoice_type' => 'string',
      'liability_type' => 'string',
      'payment_status' => 'string',
      'payment_term' => 'string',
      'type' => 'string',
    );
  }
}
