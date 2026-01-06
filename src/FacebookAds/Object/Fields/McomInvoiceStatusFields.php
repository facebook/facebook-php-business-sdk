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

class McomInvoiceStatusFields extends AbstractEnum {

  const BANK_ACCOUNT_NUMBER = 'bank_account_number';
  const BANK_CODE = 'bank_code';
  const INVOICE_ID = 'invoice_id';
  const INVOICE_STATUS = 'invoice_status';
  const PAGE_ID = 'page_id';
  const PAYMENT_METHOD = 'payment_method';
  const PAYMENT_TYPE = 'payment_type';
  const PAYOUT_AMOUNT = 'payout_amount';
  const SLIP_VERIFICATION_ERROR = 'slip_verification_error';
  const SLIP_VERIFICATION_STATUS = 'slip_verification_status';
  const SOF_TRANSFER_ID = 'sof_transfer_id';
  const SOF_TRANSFER_TIMESTAMP = 'sof_transfer_timestamp';
  const TRANSACTION_FEE = 'transaction_fee';
  const TRANSFER_SLIP = 'transfer_slip';
  const TRANSFER_SLIP_QR_CODE = 'transfer_slip_qr_code';

  public function getFieldTypes() {
    return array(
      'bank_account_number' => 'string',
      'bank_code' => 'string',
      'invoice_id' => 'string',
      'invoice_status' => 'string',
      'page_id' => 'string',
      'payment_method' => 'string',
      'payment_type' => 'string',
      'payout_amount' => 'Object',
      'slip_verification_error' => 'string',
      'slip_verification_status' => 'string',
      'sof_transfer_id' => 'string',
      'sof_transfer_timestamp' => 'int',
      'transaction_fee' => 'Object',
      'transfer_slip' => 'string',
      'transfer_slip_qr_code' => 'string',
    );
  }
}
