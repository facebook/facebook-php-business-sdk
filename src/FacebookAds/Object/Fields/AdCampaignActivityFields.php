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

class AdCampaignActivityFields extends AbstractEnum {

  const AUTO_CREATE_LOOKALIKE_NEW = 'auto_create_lookalike_new';
  const AUTO_CREATE_LOOKALIKE_OLD = 'auto_create_lookalike_old';
  const BID_ADJUSTMENTS_SPEC_NEW = 'bid_adjustments_spec_new';
  const BID_ADJUSTMENTS_SPEC_OLD = 'bid_adjustments_spec_old';
  const BID_AMOUNT_NEW = 'bid_amount_new';
  const BID_AMOUNT_OLD = 'bid_amount_old';
  const BID_CONSTRAINTS_NEW = 'bid_constraints_new';
  const BID_CONSTRAINTS_OLD = 'bid_constraints_old';
  const BID_INFO_NEW = 'bid_info_new';
  const BID_INFO_OLD = 'bid_info_old';
  const BID_STRATEGY_NEW = 'bid_strategy_new';
  const BID_STRATEGY_OLD = 'bid_strategy_old';
  const BID_TYPE_NEW = 'bid_type_new';
  const BID_TYPE_OLD = 'bid_type_old';
  const BILLING_EVENT_NEW = 'billing_event_new';
  const BILLING_EVENT_OLD = 'billing_event_old';
  const BUDGET_LIMIT_NEW = 'budget_limit_new';
  const BUDGET_LIMIT_OLD = 'budget_limit_old';
  const CREATED_TIME = 'created_time';
  const DAILY_IMPRESSIONS_NEW = 'daily_impressions_new';
  const DAILY_IMPRESSIONS_OLD = 'daily_impressions_old';
  const DCO_MODE_NEW = 'dco_mode_new';
  const DCO_MODE_OLD = 'dco_mode_old';
  const DELIVERY_BEHAVIOR_NEW = 'delivery_behavior_new';
  const DELIVERY_BEHAVIOR_OLD = 'delivery_behavior_old';
  const DESTINATION_TYPE_NEW = 'destination_type_new';
  const DESTINATION_TYPE_OLD = 'destination_type_old';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const ID = 'id';
  const INVOICING_LIMIT_NEW = 'invoicing_limit_new';
  const INVOICING_LIMIT_OLD = 'invoicing_limit_old';
  const MIN_SPEND_TARGET_NEW = 'min_spend_target_new';
  const MIN_SPEND_TARGET_OLD = 'min_spend_target_old';
  const NAME_NEW = 'name_new';
  const NAME_OLD = 'name_old';
  const OPTIMIZATION_GOAL_NEW = 'optimization_goal_new';
  const OPTIMIZATION_GOAL_OLD = 'optimization_goal_old';
  const PACING_TYPE_NEW = 'pacing_type_new';
  const PACING_TYPE_OLD = 'pacing_type_old';
  const PROMOTED_OBJECT_ID_NEW = 'promoted_object_id_new';
  const PROMOTED_OBJECT_ID_OLD = 'promoted_object_id_old';
  const RUN_STATUS_NEW = 'run_status_new';
  const RUN_STATUS_OLD = 'run_status_old';
  const SCHEDULE_NEW = 'schedule_new';
  const SCHEDULE_OLD = 'schedule_old';
  const SPEND_CAP_NEW = 'spend_cap_new';
  const SPEND_CAP_OLD = 'spend_cap_old';
  const START_TIME_NEW = 'start_time_new';
  const START_TIME_OLD = 'start_time_old';
  const STOP_TIME_NEW = 'stop_time_new';
  const STOP_TIME_OLD = 'stop_time_old';
  const TARGETING_EXPANSION_NEW = 'targeting_expansion_new';
  const TARGETING_EXPANSION_OLD = 'targeting_expansion_old';
  const TARGETING_NEW = 'targeting_new';
  const TARGETING_OLD = 'targeting_old';
  const UPDATED_TIME_NEW = 'updated_time_new';
  const UPDATED_TIME_OLD = 'updated_time_old';

  public function getFieldTypes() {
    return array(
      'auto_create_lookalike_new' => 'bool',
      'auto_create_lookalike_old' => 'bool',
      'bid_adjustments_spec_new' => 'string',
      'bid_adjustments_spec_old' => 'string',
      'bid_amount_new' => 'int',
      'bid_amount_old' => 'int',
      'bid_constraints_new' => 'Object',
      'bid_constraints_old' => 'Object',
      'bid_info_new' => 'map<string, int>',
      'bid_info_old' => 'map<string, int>',
      'bid_strategy_new' => 'BidStrategyNew',
      'bid_strategy_old' => 'BidStrategyOld',
      'bid_type_new' => 'string',
      'bid_type_old' => 'string',
      'billing_event_new' => 'BillingEventNew',
      'billing_event_old' => 'BillingEventOld',
      'budget_limit_new' => 'Object',
      'budget_limit_old' => 'Object',
      'created_time' => 'datetime',
      'daily_impressions_new' => 'int',
      'daily_impressions_old' => 'int',
      'dco_mode_new' => 'string',
      'dco_mode_old' => 'string',
      'delivery_behavior_new' => 'string',
      'delivery_behavior_old' => 'string',
      'destination_type_new' => 'string',
      'destination_type_old' => 'string',
      'event_time' => 'datetime',
      'event_type' => 'string',
      'id' => 'string',
      'invoicing_limit_new' => 'int',
      'invoicing_limit_old' => 'int',
      'min_spend_target_new' => 'Object',
      'min_spend_target_old' => 'Object',
      'name_new' => 'string',
      'name_old' => 'string',
      'optimization_goal_new' => 'OptimizationGoalNew',
      'optimization_goal_old' => 'OptimizationGoalOld',
      'pacing_type_new' => 'int',
      'pacing_type_old' => 'int',
      'promoted_object_id_new' => 'string',
      'promoted_object_id_old' => 'string',
      'run_status_new' => 'string',
      'run_status_old' => 'string',
      'schedule_new' => 'list<Object>',
      'schedule_old' => 'list<Object>',
      'spend_cap_new' => 'Object',
      'spend_cap_old' => 'Object',
      'start_time_new' => 'datetime',
      'start_time_old' => 'datetime',
      'stop_time_new' => 'datetime',
      'stop_time_old' => 'datetime',
      'targeting_expansion_new' => 'Object',
      'targeting_expansion_old' => 'Object',
      'targeting_new' => 'Object',
      'targeting_old' => 'Object',
      'updated_time_new' => 'datetime',
      'updated_time_old' => 'datetime',
    );
  }
}
