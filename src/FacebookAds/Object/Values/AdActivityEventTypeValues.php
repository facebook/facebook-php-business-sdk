<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static AdActivityEventTypeValues getInstance()
 */
class AdActivityEventTypeValues extends AbstractEnum {

  const ACCOUNT_SPENDING_LIMIT_REACHED = 'account_spending_limit_reached';
  const AD_ACCOUNT_ADD_USER_TO_ROLE = 'ad_account_add_user_to_role';
  const AD_ACCOUNT_BILLING_CHARGE = 'ad_account_billing_charge';
  const AD_ACCOUNT_BILLING_CHARGE_FAILED = 'ad_account_billing_charge_failed';
  const AD_ACCOUNT_BILLING_CHARGEBACK = 'ad_account_billing_chargeback';
  const AD_ACCOUNT_BILLING_CHARGEBACK_REVERSAL = 'ad_account_billing_chargeback_reversal';
  const AD_ACCOUNT_BILLING_DECLINE = 'ad_account_billing_decline';
  const AD_ACCOUNT_BILLING_REFUND = 'ad_account_billing_refund';
  const AD_ACCOUNT_REMOVE_SPEND_LIMIT = 'ad_account_remove_spend_limit';
  const AD_ACCOUNT_REMOVE_USER_FROM_ROLE = 'ad_account_remove_user_from_role';
  const AD_ACCOUNT_RESET_SPEND_LIMIT = 'ad_account_reset_spend_limit';
  const AD_ACCOUNT_SET_BUSINESS_INFORMATION = 'ad_account_set_business_information';
  const AD_ACCOUNT_UPDATE_SPEND_LIMIT = 'ad_account_update_spend_limit';
  const AD_ACCOUNT_UPDATE_STATUS = 'ad_account_update_status';
  const AD_REVIEW_APPROVED = 'ad_review_approved';
  const AD_REVIEW_DECLINED = 'ad_review_declined';
  const ADD_FUNDING_SOURCE = 'add_funding_source';
  const ADD_IMAGES = 'add_images';
  const BILLING_EVENT = 'billing_event';
  const CAMPAIGN_ENDED = 'campaign_ended';
  const CAMPAIGN_SPENDING_LIMIT_REACHED = 'campaign_spending_limit_reached';
  const CONVERSION_EVENT_UPDATED = 'conversion_event_updated';
  const CREATE_AD = 'create_ad';
  const CREATE_AD_SET = 'create_ad_set';
  const CREATE_AUDIENCE = 'create_audience';
  const CREATE_CAMPAIGN_GROUP = 'create_campaign_group';
  const CREATE_CAMPAIGN_LEGACY = 'create_campaign_legacy';
  const DELETE_AUDIENCE = 'delete_audience';
  const DELETE_IMAGES = 'delete_images';
  const DI_AD_SET_LEARNING_STAGE_EXIT = 'di_ad_set_learning_stage_exit';
  const EDIT_AND_UPDATE_AD_CREATIVE = 'edit_and_update_ad_creative';
  const EDIT_IMAGES = 'edit_images';
  const FIRST_DELIVERY_EVENT = 'first_delivery_event';
  const FUNDING_EVENT_INITIATED = 'funding_event_initiated';
  const FUNDING_EVENT_SUCCESSFUL = 'funding_event_successful';
  const LIFETIME_BUDGET_SPENT = 'lifetime_budget_spent';
  const MERGE_CAMPAIGNS = 'merge_campaigns';
  const RECEIVE_AUDIENCE = 'receive_audience';
  const REMOVE_FUNDING_SOURCE = 'remove_funding_source';
  const REMOVE_SHARED_AUDIENCE = 'remove_shared_audience';
  const SHARE_AUDIENCE = 'share_audience';
  const UNKNOWN = 'unknown';
  const UNSHARE_AUDIENCE = 'unshare_audience';
  const UPDATE_AD_BID_INFO = 'update_ad_bid_info';
  const UPDATE_AD_BID_TYPE = 'update_ad_bid_type';
  const UPDATE_AD_CREATIVE = 'update_ad_creative';
  const UPDATE_AD_FRIENDLY_NAME = 'update_ad_friendly_name';
  const UPDATE_AD_LABELS = 'update_ad_labels';
  const UPDATE_AD_RUN_STATUS = 'update_ad_run_status';
  const UPDATE_AD_RUN_STATUS_TO_BE_SET_AFTER_REVIEW = 'update_ad_run_status_to_be_set_after_review';
  const UPDATE_AD_SET_AD_KEYWORDS = 'update_ad_set_ad_keywords';
  const UPDATE_AD_SET_BID_ADJUSTMENTS = 'update_ad_set_bid_adjustments';
  const UPDATE_AD_SET_BID_STRATEGY = 'update_ad_set_bid_strategy';
  const UPDATE_AD_SET_BIDDING = 'update_ad_set_bidding';
  const UPDATE_AD_SET_BUDGET = 'update_ad_set_budget';
  const UPDATE_AD_SET_DURATION = 'update_ad_set_duration';
  const UPDATE_AD_SET_LEARNING_STAGE_STATUS = 'update_ad_set_learning_stage_status';
  const UPDATE_AD_SET_MIN_SPEND_TARGET = 'update_ad_set_min_spend_target';
  const UPDATE_AD_SET_NAME = 'update_ad_set_name';
  const UPDATE_AD_SET_OPTIMIZATION_GOAL = 'update_ad_set_optimization_goal';
  const UPDATE_AD_SET_RUN_STATUS = 'update_ad_set_run_status';
  const UPDATE_AD_SET_SPEND_CAP = 'update_ad_set_spend_cap';
  const UPDATE_AD_SET_TARGET_SPEC = 'update_ad_set_target_spec';
  const UPDATE_AD_TARGETS_SPEC = 'update_ad_targets_spec';
  const UPDATE_ADGROUP_STOP_DELIVERY = 'update_adgroup_stop_delivery';
  const UPDATE_AUDIENCE = 'update_audience';
  const UPDATE_CAMPAIGN_AD_SCHEDULING = 'update_campaign_ad_scheduling';
  const UPDATE_CAMPAIGN_BUDGET = 'update_campaign_budget';
  const UPDATE_CAMPAIGN_BUDGET_OPTIMIZATION_TOGGLING_STATUS = 'update_campaign_budget_optimization_toggling_status';
  const UPDATE_CAMPAIGN_BUDGET_SCHEDULING_STATE = 'update_campaign_budget_scheduling_state';
  const UPDATE_CAMPAIGN_CONVERSION_GOAL = 'update_campaign_conversion_goal';
  const UPDATE_CAMPAIGN_DELIVERY_TYPE = 'update_campaign_delivery_type';
  const UPDATE_CAMPAIGN_GROUP_AD_SCHEDULING = 'update_campaign_group_ad_scheduling';
  const UPDATE_CAMPAIGN_GROUP_BUDGET_SCHEDULING_STATE = 'update_campaign_group_budget_scheduling_state';
  const UPDATE_CAMPAIGN_GROUP_DELIVERY_TYPE = 'update_campaign_group_delivery_type';
  const UPDATE_CAMPAIGN_GROUP_HIGH_DEMAND_PERIODS = 'update_campaign_group_high_demand_periods';
  const UPDATE_CAMPAIGN_GROUP_SPEND_CAP = 'update_campaign_group_spend_cap';
  const UPDATE_CAMPAIGN_HIGH_DEMAND_PERIODS = 'update_campaign_high_demand_periods';
  const UPDATE_CAMPAIGN_NAME = 'update_campaign_name';
  const UPDATE_CAMPAIGN_RUN_STATUS = 'update_campaign_run_status';
  const UPDATE_CAMPAIGN_SCHEDULE = 'update_campaign_schedule';
  const UPDATE_DELIVERY_TYPE_CROSS_LEVEL_SHIFT = 'update_delivery_type_cross_level_shift';
}
