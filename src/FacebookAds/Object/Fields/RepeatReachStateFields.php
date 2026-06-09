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

class RepeatReachStateFields extends AbstractEnum {

  const CURRENT_SATURATION_LEVEL = 'current_saturation_level';
  const FORECASTED_SATURATION_LEVEL = 'forecasted_saturation_level';
  const HIGH_SATURATION_THRESHOLD = 'high_saturation_threshold';
  const SHOULD_DISPLAY_CPR = 'should_display_cpr';

  public function getFieldTypes() {
    return array(
      'current_saturation_level' => 'float',
      'forecasted_saturation_level' => 'float',
      'high_saturation_threshold' => 'float',
      'should_display_cpr' => 'bool',
    );
  }
}
