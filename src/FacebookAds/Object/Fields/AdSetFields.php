<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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

class AdSetFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ADLABELS = 'adlabels';
  const ADSET_SCHEDULE = 'adset_schedule';
  const ASSET_FEED_ID = 'asset_feed_id';
  const ATTRIBUTION_SPEC = 'attribution_spec';
  const BID_ADJUSTMENTS = 'bid_adjustments';
  const BID_AMOUNT = 'bid_amount';
  const BID_CONSTRAINTS = 'bid_constraints';
  const BID_INFO = 'bid_info';
  const BID_STRATEGY = 'bid_strategy';
  const BILLING_EVENT = 'billing_event';
  const BUDGET_REMAINING = 'budget_remaining';
  const CAMPAIGN = 'campaign';
  const CAMPAIGN_ID = 'campaign_id';
  const CONFIGURED_STATUS = 'configured_status';
  const CREATED_TIME = 'created_time';
  const CREATIVE_SEQUENCE = 'creative_sequence';
  const DAILY_BUDGET = 'daily_budget';
  const DAILY_MIN_SPEND_TARGET = 'daily_min_spend_target';
  const DAILY_SPEND_CAP = 'daily_spend_cap';
  const DESTINATION_TYPE = 'destination_type';
  const EFFECTIVE_STATUS = 'effective_status';
  const END_TIME = 'end_time';
  const EXISTING_CUSTOMER_BUDGET_PERCENTAGE = 'existing_customer_budget_percentage';
  const FREQUENCY_CONTROL_SPECS = 'frequency_control_specs';
  const FULL_FUNNEL_EXPLORATION_MODE = 'full_funnel_exploration_mode';
  const ID = 'id';
  const INSTAGRAM_ACTOR_ID = 'instagram_actor_id';
  const IS_DYNAMIC_CREATIVE = 'is_dynamic_creative';
  const ISSUES_INFO = 'issues_info';
  const LEARNING_STAGE_INFO = 'learning_stage_info';
  const LIFETIME_BUDGET = 'lifetime_budget';
  const LIFETIME_IMPS = 'lifetime_imps';
  const LIFETIME_MIN_SPEND_TARGET = 'lifetime_min_spend_target';
  const LIFETIME_SPEND_CAP = 'lifetime_spend_cap';
  const MULTI_OPTIMIZATION_GOAL_WEIGHT = 'multi_optimization_goal_weight';
  const NAME = 'name';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const OPTIMIZATION_SUB_EVENT = 'optimization_sub_event';
  const PACING_TYPE = 'pacing_type';
  const PROMOTED_OBJECT = 'promoted_object';
  const RECOMMENDATIONS = 'recommendations';
  const RECURRING_BUDGET_SEMANTICS = 'recurring_budget_semantics';
  const REVIEW_FEEDBACK = 'review_feedback';
  const RF_PREDICTION_ID = 'rf_prediction_id';
  const SOURCE_ADSET = 'source_adset';
  const SOURCE_ADSET_ID = 'source_adset_id';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const TARGETING = 'targeting';
  const TARGETING_OPTIMIZATION_TYPES = 'targeting_optimization_types';
  const TIME_BASED_AD_ROTATION_ID_BLOCKS = 'time_based_ad_rotation_id_blocks';
  const TIME_BASED_AD_ROTATION_INTERVALS = 'time_based_ad_rotation_intervals';
  const UPDATED_TIME = 'updated_time';
  const USE_NEW_APP_CLICK = 'use_new_app_click';
  const CAMPAIGN_SPEC = 'campaign_spec';
  const DAILY_IMPS = 'daily_imps';
  const DATE_FORMAT = 'date_format';
  const EXECUTION_OPTIONS = 'execution_options';
  const LINE_NUMBER = 'line_number';
  const RB_PREDICTION_ID = 'rb_prediction_id';
  const TIME_START = 'time_start';
  const TIME_STOP = 'time_stop';
  const TOPLINE_ID = 'topline_id';
  const TUNE_FOR_CATEGORY = 'tune_for_category';
  const UPSTREAM_EVENTS = 'upstream_events';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'adlabels' => 'list<AdLabel>',
      'adset_schedule' => 'list<DayPart>',
      'asset_feed_id' => 'string',
      'attribution_spec' => 'list<AttributionSpec>',
      'bid_adjustments' => 'AdBidAdjustments',
      'bid_amount' => 'unsigned int',
      'bid_constraints' => 'AdCampaignBidConstraint',
      'bid_info' => 'map<string, unsigned int>',
      'bid_strategy' => 'BidStrategy',
      'billing_event' => 'BillingEvent',
      'budget_remaining' => 'string',
      'campaign' => 'Campaign',
      'campaign_id' => 'string',
      'configured_status' => 'ConfiguredStatus',
      'created_time' => 'datetime',
      'creative_sequence' => 'list<string>',
      'daily_budget' => 'string',
      'daily_min_spend_target' => 'string',
      'daily_spend_cap' => 'string',
      'destination_type' => 'string',
      'effective_status' => 'EffectiveStatus',
      'end_time' => 'datetime',
      'existing_customer_budget_percentage' => 'unsigned int',
      'frequency_control_specs' => 'list<AdCampaignFrequencyControlSpecs>',
      'full_funnel_exploration_mode' => 'string',
      'id' => 'string',
      'instagram_actor_id' => 'string',
      'is_dynamic_creative' => 'bool',
      'issues_info' => 'list<AdCampaignIssuesInfo>',
      'learning_stage_info' => 'AdCampaignLearningStageInfo',
      'lifetime_budget' => 'string',
      'lifetime_imps' => 'int',
      'lifetime_min_spend_target' => 'string',
      'lifetime_spend_cap' => 'string',
      'multi_optimization_goal_weight' => 'string',
      'name' => 'string',
      'optimization_goal' => 'OptimizationGoal',
      'optimization_sub_event' => 'string',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'AdPromotedObject',
      'recommendations' => 'list<AdRecommendation>',
      'recurring_budget_semantics' => 'bool',
      'review_feedback' => 'string',
      'rf_prediction_id' => 'string',
      'source_adset' => 'AdSet',
      'source_adset_id' => 'string',
      'start_time' => 'datetime',
      'status' => 'Status',
      'targeting' => 'Targeting',
      'targeting_optimization_types' => 'map<string, int>',
      'time_based_ad_rotation_id_blocks' => 'list<list<int>>',
      'time_based_ad_rotation_intervals' => 'list<unsigned int>',
      'updated_time' => 'datetime',
      'use_new_app_click' => 'bool',
      'campaign_spec' => 'Object',
      'daily_imps' => 'unsigned int',
      'date_format' => 'string',
      'execution_options' => 'list<ExecutionOptions>',
      'line_number' => 'unsigned int',
      'rb_prediction_id' => 'string',
      'time_start' => 'datetime',
      'time_stop' => 'datetime',
      'topline_id' => 'string',
      'tune_for_category' => 'TuneForCategory',
      'upstream_events' => 'map',
    );
  }
}
