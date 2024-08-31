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

class CommerceOrderTransactionDetailFields extends AbstractEnum {

  const MERCHANT_ORDER_ID = 'merchant_order_id';
  const NET_PAYMENT_AMOUNT = 'net_payment_amount';
  const ORDER_CREATED = 'order_created';
  const ORDER_DETAILS = 'order_details';
  const ORDER_ID = 'order_id';
  const PAYOUT_REFERENCE_ID = 'payout_reference_id';
  const POSTAL_CODE = 'postal_code';
  const PROCESSING_FEE = 'processing_fee';
  const STATE = 'state';
  const TAX_RATE = 'tax_rate';
  const TRANSACTION_DATE = 'transaction_date';
  const TRANSACTION_TYPE = 'transaction_type';
  const TRANSFER_ID = 'transfer_id';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'merchant_order_id' => 'string',
      'net_payment_amount' => 'Object',
      'order_created' => 'string',
      'order_details' => 'CommerceOrder',
      'order_id' => 'string',
      'payout_reference_id' => 'string',
      'postal_code' => 'string',
      'processing_fee' => 'Object',
      'state' => 'string',
      'tax_rate' => 'string',
      'transaction_date' => 'string',
      'transaction_type' => 'string',
      'transfer_id' => 'string',
      'id' => 'string',
    );
  }
}
