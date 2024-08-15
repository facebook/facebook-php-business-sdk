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

class AdsPaymentCycleFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const CREATED_TIME = 'created_time';
  const MULTIPLIER = 'multiplier';
  const REQUESTED_THRESHOLD_AMOUNT = 'requested_threshold_amount';
  const THRESHOLD_AMOUNT = 'threshold_amount';
  const UPDATED_TIME = 'updated_time';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'created_time' => 'datetime',
      'multiplier' => 'unsigned int',
      'requested_threshold_amount' => 'unsigned int',
      'threshold_amount' => 'unsigned int',
      'updated_time' => 'datetime',
    );
  }
}
