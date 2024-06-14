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

class PaymentRequestDetailsFields extends AbstractEnum {

  const AMOUNT = 'amount';
  const CREATION_TIME = 'creation_time';
  const NOTE = 'note';
  const PAYMENT_REQUEST_ID = 'payment_request_id';
  const RECEIVER_ID = 'receiver_id';
  const REFERENCE_NUMBER = 'reference_number';
  const SENDER_ID = 'sender_id';
  const STATUS = 'status';
  const TRANSACTION_TIME = 'transaction_time';

  public function getFieldTypes() {
    return array(
      'amount' => 'Object',
      'creation_time' => 'int',
      'note' => 'string',
      'payment_request_id' => 'string',
      'receiver_id' => 'string',
      'reference_number' => 'string',
      'sender_id' => 'string',
      'status' => 'string',
      'transaction_time' => 'int',
    );
  }
}
