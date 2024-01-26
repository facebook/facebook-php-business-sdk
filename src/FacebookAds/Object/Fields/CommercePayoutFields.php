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

class CommercePayoutFields extends AbstractEnum {

  const AMOUNT = 'amount';
  const PAYOUT_DATE = 'payout_date';
  const PAYOUT_REFERENCE_ID = 'payout_reference_id';
  const STATUS = 'status';
  const TRANSFER_ID = 'transfer_id';

  public function getFieldTypes() {
    return array(
      'amount' => 'Object',
      'payout_date' => 'string',
      'payout_reference_id' => 'string',
      'status' => 'string',
      'transfer_id' => 'string',
    );
  }
}
