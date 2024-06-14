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

class AdKpiShiftFields extends AbstractEnum {

  const AD_SET = 'ad_set';
  const COST_PER_RESULT_SHIFT = 'cost_per_result_shift';
  const ENOUGH_EFFECTIVE_DAYS = 'enough_effective_days';
  const RESULT_INDICATOR = 'result_indicator';
  const RESULT_SHIFT = 'result_shift';
  const SPEND_SHIFT = 'spend_shift';

  public function getFieldTypes() {
    return array(
      'ad_set' => 'AdSet',
      'cost_per_result_shift' => 'float',
      'enough_effective_days' => 'bool',
      'result_indicator' => 'string',
      'result_shift' => 'float',
      'spend_shift' => 'float',
    );
  }
}
