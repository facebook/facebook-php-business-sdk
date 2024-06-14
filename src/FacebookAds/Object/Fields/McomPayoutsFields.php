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

class McomPayoutsFields extends AbstractEnum {

  const NUMBER_OF_ORDERS = 'number_of_orders';
  const ORDER_IDS = 'order_ids';
  const PAYOUT_AMOUNT = 'payout_amount';
  const PAYOUT_PROVIDER_REFERENCE_ID = 'payout_provider_reference_id';
  const PAYOUT_STATUS = 'payout_status';
  const PAYOUT_TIME = 'payout_time';
  const PROVIDER = 'provider';

  public function getFieldTypes() {
    return array(
      'number_of_orders' => 'int',
      'order_ids' => 'list<string>',
      'payout_amount' => 'Object',
      'payout_provider_reference_id' => 'string',
      'payout_status' => 'string',
      'payout_time' => 'int',
      'provider' => 'string',
    );
  }
}
