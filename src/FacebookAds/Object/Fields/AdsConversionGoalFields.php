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

class AdsConversionGoalFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const CONVERSION_EVENT_VALUE_SOURCE = 'conversion_event_value_source';
  const DESCRIPTION = 'description';
  const GOAL_CREATION_METHOD = 'goal_creation_method';
  const ID = 'id';
  const NAME = 'name';
  const PERFORMANCE_GOAL = 'performance_goal';
  const UPDATE_STATUS = 'update_status';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'conversion_event_value_source' => 'string',
      'description' => 'string',
      'goal_creation_method' => 'string',
      'id' => 'string',
      'name' => 'string',
      'performance_goal' => 'string',
      'update_status' => 'string',
    );
  }
}
