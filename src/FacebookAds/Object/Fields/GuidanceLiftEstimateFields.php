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

class GuidanceLiftEstimateFields extends AbstractEnum {

  const ACTUAL_7D_CPR = 'actual_7d_cpr';
  const ADOPTION_DATE = 'adoption_date';
  const GUIDANCE_NAME = 'guidance_name';
  const LIFT_ESTIMATION = 'lift_estimation';
  const PREDICTED_7D_CPR = 'predicted_7d_cpr';

  public function getFieldTypes() {
    return array(
      'actual_7d_cpr' => 'float',
      'adoption_date' => 'string',
      'guidance_name' => 'string',
      'lift_estimation' => 'float',
      'predicted_7d_cpr' => 'float',
    );
  }
}
