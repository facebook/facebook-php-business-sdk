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

class AdAccountSpendCapChangeHistoryFields extends AbstractEnum {

  const ACTION = 'action';
  const SPEND_CAP = 'spend_cap';
  const TIME_START = 'time_start';
  const TIME_STOP = 'time_stop';

  public function getFieldTypes() {
    return array(
      'action' => 'string',
      'spend_cap' => 'int',
      'time_start' => 'string',
      'time_stop' => 'string',
    );
  }
}
