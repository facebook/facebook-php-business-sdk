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

class AdAccountReachEstimateFields extends AbstractEnum {

  const ESTIMATE_READY = 'estimate_ready';
  const USERS_LOWER_BOUND = 'users_lower_bound';
  const USERS_UPPER_BOUND = 'users_upper_bound';

  public function getFieldTypes() {
    return array(
      'estimate_ready' => 'bool',
      'users_lower_bound' => 'int',
      'users_upper_bound' => 'int',
    );
  }
}
