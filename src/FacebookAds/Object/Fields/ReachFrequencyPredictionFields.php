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

class ReachFrequencyPredictionFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACTIVITY_STATUS = 'activity_status';
  const AD_FORMATS = 'ad_formats';
  const AUCTION_ENTRY_OPTION_INDEX = 'auction_entry_option_index';
  const AUDIENCE_SIZE_LOWER_BOUND = 'audience_size_lower_bound';
  const AUDIENCE_SIZE_UPPER_BOUND = 'audience_size_upper_bound';
  const BUSINESS_ID = 'business_id';
  const BUYING_TYPE = 'buying_type';
  const CAMPAIGN_GROUP_ID = 'campaign_group_id';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_TIME_START = 'campaign_time_start';
  const CAMPAIGN_TIME_STOP = 'campaign_time_stop';
  const CURRENCY = 'currency';
  const CURVE_BUDGET_REACH = 'curve_budget_reach';
  const CURVE_REACH = 'curve_reach';
  const DAILY_GRP_CURVE = 'daily_grp_curve';
  const DAILY_IMPRESSION_CURVE = 'daily_impression_curve';
  const DAILY_IMPRESSION_CURVE_MAP = 'daily_impression_curve_map';
  const DAY_PARTING_SCHEDULE = 'day_parting_schedule';
  const DESTINATION_ID = 'destination_id';
  const END_TIME = 'end_time';
  const EXPIRATION_TIME = 'expiration_time';
  const EXTERNAL_BUDGET = 'external_budget';
  const EXTERNAL_IMPRESSION = 'external_impression';
  const EXTERNAL_MAXIMUM_BUDGET = 'external_maximum_budget';
  const EXTERNAL_MAXIMUM_IMPRESSION = 'external_maximum_impression';
  const EXTERNAL_MAXIMUM_REACH = 'external_maximum_reach';
  const EXTERNAL_MINIMUM_BUDGET = 'external_minimum_budget';
  const EXTERNAL_MINIMUM_IMPRESSION = 'external_minimum_impression';
  const EXTERNAL_MINIMUM_REACH = 'external_minimum_reach';
  const EXTERNAL_REACH = 'external_reach';
  const FEED_RATIO_0000 = 'feed_ratio_0000';
  const FREQUENCY_CAP = 'frequency_cap';
  const FREQUENCY_DISTRIBUTION_MAP = 'frequency_distribution_map';
  const FREQUENCY_DISTRIBUTION_MAP_AGG = 'frequency_distribution_map_agg';
  const GRP_AUDIENCE_SIZE = 'grp_audience_size';
  const GRP_AVG_PROBABILITY_MAP = 'grp_avg_probability_map';
  const GRP_COUNTRY_AUDIENCE_SIZE = 'grp_country_audience_size';
  const GRP_CURVE = 'grp_curve';
  const GRP_DMAS_AUDIENCE_SIZE = 'grp_dmas_audience_size';
  const GRP_FILTERING_THRESHOLD_00 = 'grp_filtering_threshold_00';
  const GRP_POINTS = 'grp_points';
  const GRP_RATIO = 'grp_ratio';
  const GRP_REACH_RATIO = 'grp_reach_ratio';
  const GRP_STATUS = 'grp_status';
  const HOLDOUT_PERCENTAGE = 'holdout_percentage';
  const ID = 'id';
  const IMPRESSION_CURVE = 'impression_curve';
  const INSTAGRAM_DESTINATION_ID = 'instagram_destination_id';
  const INSTREAM_PACKAGES = 'instream_packages';
  const INTERVAL_FREQUENCY_CAP = 'interval_frequency_cap';
  const INTERVAL_FREQUENCY_CAP_RESET_PERIOD = 'interval_frequency_cap_reset_period';
  const IS_BONUS_MEDIA = 'is_bonus_media';
  const IS_CONVERSION_GOAL = 'is_conversion_goal';
  const IS_HIGHER_AVERAGE_FREQUENCY = 'is_higher_average_frequency';
  const IS_IO = 'is_io';
  const IS_RESERVED_BUYING = 'is_reserved_buying';
  const IS_TRP = 'is_trp';
  const NAME = 'name';
  const OBJECTIVE = 'objective';
  const OBJECTIVE_NAME = 'objective_name';
  const ODAX_OBJECTIVE = 'odax_objective';
  const ODAX_OBJECTIVE_NAME = 'odax_objective_name';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const OPTIMIZATION_GOAL_NAME = 'optimization_goal_name';
  const PAUSE_PERIODS = 'pause_periods';
  const PLACEMENT_BREAKDOWN = 'placement_breakdown';
  const PLACEMENT_BREAKDOWN_MAP = 'placement_breakdown_map';
  const PLAN_NAME = 'plan_name';
  const PLAN_TYPE = 'plan_type';
  const PREDICTION_MODE = 'prediction_mode';
  const PREDICTION_PROGRESS = 'prediction_progress';
  const REFERENCE_ID = 'reference_id';
  const RESERVATION_STATUS = 'reservation_status';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const STORY_EVENT_TYPE = 'story_event_type';
  const TARGET_CPM = 'target_cpm';
  const TARGET_SPEC = 'target_spec';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';
  const TIMEZONE_ID = 'timezone_id';
  const TIMEZONE_NAME = 'timezone_name';
  const TOPLINE_ID = 'topline_id';
  const VIDEO_VIEW_LENGTH_CONSTRAINT = 'video_view_length_constraint';
  const VIEWTAG = 'viewtag';
  const ACTION = 'action';
  const BUDGET = 'budget';
  const DEAL_ID = 'deal_id';
  const DESTINATION_IDS = 'destination_ids';
  const EXCEPTIONS = 'exceptions';
  const EXISTING_CAMPAIGN_ID = 'existing_campaign_id';
  const GRP_BUYING = 'grp_buying';
  const IMPRESSION = 'impression';
  const IS_FULL_VIEW = 'is_full_view';
  const IS_REACH_AND_FREQUENCY_IO_BUYING = 'is_reach_and_frequency_io_buying';
  const NUM_CURVE_POINTS = 'num_curve_points';
  const REACH = 'reach';
  const RF_PREDICTION_ID = 'rf_prediction_id';
  const RF_PREDICTION_ID_TO_RELEASE = 'rf_prediction_id_to_release';
  const RF_PREDICTION_ID_TO_SHARE = 'rf_prediction_id_to_share';
  const STOP_TIME = 'stop_time';

  public function getFieldTypes() {
    return array(
      'account_id' => 'int',
      'activity_status' => 'ReachFrequencyActivity',
      'ad_formats' => 'list<ReachFrequencyAdFormat>',
      'auction_entry_option_index' => 'int',
      'audience_size_lower_bound' => 'unsigned int',
      'audience_size_upper_bound' => 'unsigned int',
      'business_id' => 'int',
      'buying_type' => 'string',
      'campaign_group_id' => 'int',
      'campaign_id' => 'string',
      'campaign_time_start' => 'datetime',
      'campaign_time_stop' => 'datetime',
      'currency' => 'string',
      'curve_budget_reach' => 'ReachFrequencyEstimatesCurve',
      'curve_reach' => 'list<unsigned int>',
      'daily_grp_curve' => 'list<float>',
      'daily_impression_curve' => 'list<float>',
      'daily_impression_curve_map' => 'list<map<unsigned int, list<float>>>',
      'day_parting_schedule' => 'list<ReachFrequencyDayPart>',
      'destination_id' => 'string',
      'end_time' => 'datetime',
      'expiration_time' => 'datetime',
      'external_budget' => 'int',
      'external_impression' => 'unsigned int',
      'external_maximum_budget' => 'int',
      'external_maximum_impression' => 'string',
      'external_maximum_reach' => 'unsigned int',
      'external_minimum_budget' => 'int',
      'external_minimum_impression' => 'unsigned int',
      'external_minimum_reach' => 'unsigned int',
      'external_reach' => 'unsigned int',
      'feed_ratio_0000' => 'unsigned int',
      'frequency_cap' => 'unsigned int',
      'frequency_distribution_map' => 'list<map<unsigned int, list<float>>>',
      'frequency_distribution_map_agg' => 'list<map<unsigned int, list<unsigned int>>>',
      'grp_audience_size' => 'float',
      'grp_avg_probability_map' => 'string',
      'grp_country_audience_size' => 'float',
      'grp_curve' => 'list<float>',
      'grp_dmas_audience_size' => 'float',
      'grp_filtering_threshold_00' => 'unsigned int',
      'grp_points' => 'float',
      'grp_ratio' => 'float',
      'grp_reach_ratio' => 'float',
      'grp_status' => 'string',
      'holdout_percentage' => 'unsigned int',
      'id' => 'string',
      'impression_curve' => 'list<unsigned int>',
      'instagram_destination_id' => 'string',
      'instream_packages' => 'list<string>',
      'interval_frequency_cap' => 'unsigned int',
      'interval_frequency_cap_reset_period' => 'unsigned int',
      'is_bonus_media' => 'unsigned int',
      'is_conversion_goal' => 'unsigned int',
      'is_higher_average_frequency' => 'bool',
      'is_io' => 'bool',
      'is_reserved_buying' => 'unsigned int',
      'is_trp' => 'bool',
      'name' => 'string',
      'objective' => 'unsigned int',
      'objective_name' => 'string',
      'odax_objective' => 'unsigned int',
      'odax_objective_name' => 'string',
      'optimization_goal' => 'unsigned int',
      'optimization_goal_name' => 'string',
      'pause_periods' => 'list<Object>',
      'placement_breakdown' => 'ReachFrequencyEstimatesPlacementBreakdown',
      'placement_breakdown_map' => 'list<map<unsigned int, ReachFrequencyEstimatesPlacementBreakdown>>',
      'plan_name' => 'string',
      'plan_type' => 'string',
      'prediction_mode' => 'unsigned int',
      'prediction_progress' => 'unsigned int',
      'reference_id' => 'string',
      'reservation_status' => 'unsigned int',
      'start_time' => 'datetime',
      'status' => 'unsigned int',
      'story_event_type' => 'unsigned int',
      'target_cpm' => 'unsigned int',
      'target_spec' => 'Targeting',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
      'timezone_id' => 'unsigned int',
      'timezone_name' => 'string',
      'topline_id' => 'unsigned int',
      'video_view_length_constraint' => 'unsigned int',
      'viewtag' => 'string',
      'action' => 'Action',
      'budget' => 'unsigned int',
      'deal_id' => 'string',
      'destination_ids' => 'list<string>',
      'exceptions' => 'bool',
      'existing_campaign_id' => 'string',
      'grp_buying' => 'bool',
      'impression' => 'unsigned int',
      'is_full_view' => 'bool',
      'is_reach_and_frequency_io_buying' => 'bool',
      'num_curve_points' => 'unsigned int',
      'reach' => 'unsigned int',
      'rf_prediction_id' => 'string',
      'rf_prediction_id_to_release' => 'string',
      'rf_prediction_id_to_share' => 'string',
      'stop_time' => 'unsigned int',
    );
  }
}
