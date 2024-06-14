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

class AdAccountSpendLimitFields extends AbstractEnum {

  const AMOUNT_SPENT = 'amount_spent';
  const GROUP_ID = 'group_id';
  const LIMIT_ID = 'limit_id';
  const LIMIT_VALUE = 'limit_value';
  const TIME_CREATED = 'time_created';
  const TIME_START = 'time_start';
  const TIME_STOP = 'time_stop';

  public function getFieldTypes() {
    return array(
      'amount_spent' => 'string',
      'group_id' => 'string',
      'limit_id' => 'string',
      'limit_value' => 'string',
      'time_created' => 'unsigned int',
      'time_start' => 'unsigned int',
      'time_stop' => 'unsigned int',
    );
  }
}
