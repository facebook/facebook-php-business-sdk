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

class DeliveryInfoFields extends AbstractEnum {

  const ACTIVE_ACCELERATED_CAMPAIGN_COUNT = 'active_accelerated_campaign_count';
  const ACTIVE_DAY_PARTED_CAMPAIGN_COUNT = 'active_day_parted_campaign_count';
  const AD_PENALTY_MAP = 'ad_penalty_map';
  const ARE_ALL_DAILY_BUDGETS_SPENT = 'are_all_daily_budgets_spent';
  const CREDIT_NEEDED_ADS_COUNT = 'credit_needed_ads_count';
  const ELIGIBLE_FOR_DELIVERY_INSIGHTS = 'eligible_for_delivery_insights';
  const END_TIME = 'end_time';
  const HAS_ACCOUNT_HIT_SPEND_LIMIT = 'has_account_hit_spend_limit';
  const HAS_CAMPAIGN_GROUP_HIT_SPEND_LIMIT = 'has_campaign_group_hit_spend_limit';
  const HAS_NO_ACTIVE_ADS = 'has_no_active_ads';
  const HAS_NO_ADS = 'has_no_ads';
  const INACTIVE_ADS_COUNT = 'inactive_ads_count';
  const INACTIVE_CAMPAIGN_COUNT = 'inactive_campaign_count';
  const IS_ACCOUNT_CLOSED = 'is_account_closed';
  const IS_ACCOUNT_DISABLED = 'is_account_disabled';
  const IS_AD_UNECONOMICAL = 'is_ad_uneconomical';
  const IS_ADFARM_PENALIZED = 'is_adfarm_penalized';
  const IS_ADGROUP_PARTIALLY_REJECTED = 'is_adgroup_partially_rejected';
  const IS_CAMPAIGN_ACCELERATED = 'is_campaign_accelerated';
  const IS_CAMPAIGN_COMPLETED = 'is_campaign_completed';
  const IS_CAMPAIGN_DAY_PARTED = 'is_campaign_day_parted';
  const IS_CAMPAIGN_DISABLED = 'is_campaign_disabled';
  const IS_CAMPAIGN_GROUP_DISABLED = 'is_campaign_group_disabled';
  const IS_CLICKBAIT_PENALIZED = 'is_clickbait_penalized';
  const IS_DAILY_BUDGET_SPENT = 'is_daily_budget_spent';
  const IS_ENGAGEMENT_BAIT_PENALIZED = 'is_engagement_bait_penalized';
  const IS_LQWE_PENALIZED = 'is_lqwe_penalized';
  const IS_REACH_AND_FREQUENCY_MISCONFIGURED = 'is_reach_and_frequency_misconfigured';
  const IS_SENSATIONALISM_PENALIZED = 'is_sensationalism_penalized';
  const IS_SPLIT_TEST_ACTIVE = 'is_split_test_active';
  const IS_SPLIT_TEST_VALID = 'is_split_test_valid';
  const LIFT_STUDY_TIME_PERIOD = 'lift_study_time_period';
  const NEEDS_CREDIT = 'needs_credit';
  const NEEDS_TAX_NUMBER = 'needs_tax_number';
  const NON_DELETED_ADS_COUNT = 'non_deleted_ads_count';
  const NOT_DELIVERING_CAMPAIGN_COUNT = 'not_delivering_campaign_count';
  const PENDING_ADS_COUNT = 'pending_ads_count';
  const REACH_FREQUENCY_CAMPAIGN_UNDERDELIVERY_REASON = 'reach_frequency_campaign_underdelivery_reason';
  const REJECTED_ADS_COUNT = 'rejected_ads_count';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const TEXT_PENALTY_LEVEL = 'text_penalty_level';

  public function getFieldTypes() {
    return array(
      'active_accelerated_campaign_count' => 'int',
      'active_day_parted_campaign_count' => 'int',
      'ad_penalty_map' => 'list<map<string, bool>>',
      'are_all_daily_budgets_spent' => 'bool',
      'credit_needed_ads_count' => 'int',
      'eligible_for_delivery_insights' => 'bool',
      'end_time' => 'datetime',
      'has_account_hit_spend_limit' => 'bool',
      'has_campaign_group_hit_spend_limit' => 'bool',
      'has_no_active_ads' => 'bool',
      'has_no_ads' => 'bool',
      'inactive_ads_count' => 'int',
      'inactive_campaign_count' => 'int',
      'is_account_closed' => 'bool',
      'is_account_disabled' => 'bool',
      'is_ad_uneconomical' => 'bool',
      'is_adfarm_penalized' => 'bool',
      'is_adgroup_partially_rejected' => 'bool',
      'is_campaign_accelerated' => 'bool',
      'is_campaign_completed' => 'bool',
      'is_campaign_day_parted' => 'bool',
      'is_campaign_disabled' => 'bool',
      'is_campaign_group_disabled' => 'bool',
      'is_clickbait_penalized' => 'bool',
      'is_daily_budget_spent' => 'bool',
      'is_engagement_bait_penalized' => 'bool',
      'is_lqwe_penalized' => 'bool',
      'is_reach_and_frequency_misconfigured' => 'bool',
      'is_sensationalism_penalized' => 'bool',
      'is_split_test_active' => 'bool',
      'is_split_test_valid' => 'bool',
      'lift_study_time_period' => 'string',
      'needs_credit' => 'bool',
      'needs_tax_number' => 'bool',
      'non_deleted_ads_count' => 'int',
      'not_delivering_campaign_count' => 'int',
      'pending_ads_count' => 'int',
      'reach_frequency_campaign_underdelivery_reason' => 'string',
      'rejected_ads_count' => 'int',
      'start_time' => 'datetime',
      'status' => 'string',
      'text_penalty_level' => 'string',
    );
  }
}
