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

class AdAccountPaymentDetailsFields extends AbstractEnum {

  const AMOUNT = 'amount';
  const CREATE_DATE = 'create_date';
  const ID = 'id';
  const LAST_ACTION_STATUS = 'last_action_status';
  const METADATA = 'metadata';
  const PAYMENT_DETAILS_ID = 'payment_details_id';

  public function getFieldTypes() {
    return array(
      'amount' => 'CurrencyAmount',
      'create_date' => 'int',
      'id' => 'string',
      'last_action_status' => 'string',
      'metadata' => 'Object',
      'payment_details_id' => 'string',
    );
  }
}
