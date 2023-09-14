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

class HighDemandPeriodFields extends AbstractEnum {

  const AD_OBJECT_ID = 'ad_object_id';
  const BUDGET_VALUE = 'budget_value';
  const BUDGET_VALUE_TYPE = 'budget_value_type';
  const ID = 'id';
  const RECURRENCE_TYPE = 'recurrence_type';
  const TIME_END = 'time_end';
  const TIME_START = 'time_start';
  const WEEKLY_SCHEDULE = 'weekly_schedule';

  public function getFieldTypes() {
    return array(
      'ad_object_id' => 'string',
      'budget_value' => 'int',
      'budget_value_type' => 'string',
      'id' => 'string',
      'recurrence_type' => 'string',
      'time_end' => 'datetime',
      'time_start' => 'datetime',
      'weekly_schedule' => 'list<HighDemandPeriodTimeSuggestionWeeklySegment>',
    );
  }
}
