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

class ExtendedCreditAllocationConfigFields extends AbstractEnum {

  const CURRENCY_AMOUNT = 'currency_amount';
  const ID = 'id';
  const LIABILITY_TYPE = 'liability_type';
  const OWNING_BUSINESS = 'owning_business';
  const OWNING_CREDENTIAL = 'owning_credential';
  const PARTITION_TYPE = 'partition_type';
  const RECEIVING_BUSINESS = 'receiving_business';
  const RECEIVING_CREDENTIAL = 'receiving_credential';
  const REQUEST_STATUS = 'request_status';
  const SEND_BILL_TO = 'send_bill_to';

  public function getFieldTypes() {
    return array(
      'currency_amount' => 'CurrencyAmount',
      'id' => 'string',
      'liability_type' => 'string',
      'owning_business' => 'Business',
      'owning_credential' => 'ExtendedCredit',
      'partition_type' => 'string',
      'receiving_business' => 'Business',
      'receiving_credential' => 'ExtendedCredit',
      'request_status' => 'string',
      'send_bill_to' => 'string',
    );
  }
}
