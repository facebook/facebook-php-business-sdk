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

class AdCampaignGroupAdvantageStateFields extends AbstractEnum {

  const ADVANTAGE_AUDIENCE_STATE = 'advantage_audience_state';
  const ADVANTAGE_BUDGET_STATE = 'advantage_budget_state';
  const ADVANTAGE_PLACEMENT_STATE = 'advantage_placement_state';
  const ADVANTAGE_STATE = 'advantage_state';

  public function getFieldTypes() {
    return array(
      'advantage_audience_state' => 'string',
      'advantage_budget_state' => 'string',
      'advantage_placement_state' => 'string',
      'advantage_state' => 'string',
    );
  }
}
