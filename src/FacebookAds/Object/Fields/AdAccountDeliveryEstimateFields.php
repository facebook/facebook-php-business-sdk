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

class AdAccountDeliveryEstimateFields extends AbstractEnum {

  const DAILY_OUTCOMES_CURVE = 'daily_outcomes_curve';
  const ESTIMATE_DAU = 'estimate_dau';
  const ESTIMATE_MAU_LOWER_BOUND = 'estimate_mau_lower_bound';
  const ESTIMATE_MAU_UPPER_BOUND = 'estimate_mau_upper_bound';
  const ESTIMATE_READY = 'estimate_ready';
  const TARGETING_OPTIMIZATION_TYPES = 'targeting_optimization_types';

  public function getFieldTypes() {
    return array(
      'daily_outcomes_curve' => 'list<OutcomePredictionPoint>',
      'estimate_dau' => 'int',
      'estimate_mau_lower_bound' => 'int',
      'estimate_mau_upper_bound' => 'int',
      'estimate_ready' => 'bool',
      'targeting_optimization_types' => 'list<map<string, int>>',
    );
  }
}
