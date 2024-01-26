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
