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

class AdAccountBusinessConstraintsFields extends AbstractEnum {

  const AUDIENCE_CONTROLS = 'audience_controls';
  const CAMPAIGNS_WITH_ERROR = 'campaigns_with_error';
  const IS_AGE_RESTRICTION_ENABLED = 'is_age_restriction_enabled';
  const PLACEMENT_CONTROLS = 'placement_controls';
  const PLACEMENT_CONTROLS_PER_OBJECTIVE = 'placement_controls_per_objective';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'audience_controls' => 'Object',
      'campaigns_with_error' => 'list<string>',
      'is_age_restriction_enabled' => 'bool',
      'placement_controls' => 'Object',
      'placement_controls_per_objective' => 'Object',
      'status' => 'Status',
    );
  }
}
