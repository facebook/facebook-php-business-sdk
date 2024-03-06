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

class AnalyticsSegmentFields extends AbstractEnum {

  const CUSTOM_AUDIENCE_INELIGIBLITY_REASONS = 'custom_audience_ineligiblity_reasons';
  const DESCRIPTION = 'description';
  const ESTIMATED_CUSTOM_AUDIENCE_SIZE = 'estimated_custom_audience_size';
  const EVENT_INFO_RULES = 'event_info_rules';
  const EVENT_RULES = 'event_rules';
  const FILTER_SET = 'filter_set';
  const HAS_DEMOGRAPHIC_RULES = 'has_demographic_rules';
  const ID = 'id';
  const IS_ALL_USER = 'is_all_user';
  const IS_ELIGIBLE_FOR_PUSH_CAMPAIGN = 'is_eligible_for_push_campaign';
  const IS_INTERNAL = 'is_internal';
  const NAME = 'name';
  const PERCENTILE_RULES = 'percentile_rules';
  const TIME_LAST_SEEN = 'time_last_seen';
  const TIME_LAST_UPDATED = 'time_last_updated';
  const USER_PROPERTY_RULES = 'user_property_rules';
  const WEB_PARAM_RULES = 'web_param_rules';

  public function getFieldTypes() {
    return array(
      'custom_audience_ineligiblity_reasons' => 'list<string>',
      'description' => 'string',
      'estimated_custom_audience_size' => 'unsigned int',
      'event_info_rules' => 'list<Object>',
      'event_rules' => 'list<Object>',
      'filter_set' => 'string',
      'has_demographic_rules' => 'bool',
      'id' => 'string',
      'is_all_user' => 'bool',
      'is_eligible_for_push_campaign' => 'bool',
      'is_internal' => 'bool',
      'name' => 'string',
      'percentile_rules' => 'list<Object>',
      'time_last_seen' => 'unsigned int',
      'time_last_updated' => 'unsigned int',
      'user_property_rules' => 'list<Object>',
      'web_param_rules' => 'list<Object>',
    );
  }
}
