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
  const CAMPAIGN_GROUP_ID = 'campaign_group_id';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_TIME_START = 'campaign_time_start';
  const CAMPAIGN_TIME_STOP = 'campaign_time_stop';
  const CURVE_BUDGET_REACH = 'curve_budget_reach';
  const DAILY_IMPRESSION_CURVE = 'daily_impression_curve';
  const DESTINATION_ID = 'destination_id';
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
  const FREQUENCY_CAP = 'frequency_cap';
  const GRP_DMAS_AUDIENCE_SIZE = 'grp_dmas_audience_size';
  const HOLDOUT_PERCENTAGE = 'holdout_percentage';
  const ID = 'id';
  const INSTAGRAM_DESTINATION_ID = 'instagram_destination_id';
  const INTERVAL_FREQUENCY_CAP = 'interval_frequency_cap';
  const INTERVAL_FREQUENCY_CAP_RESET_PERIOD = 'interval_frequency_cap_reset_period';
  const NAME = 'name';
  const PAUSE_PERIODS = 'pause_periods';
  const PLACEMENT_BREAKDOWN = 'placement_breakdown';
  const PREDICTION_MODE = 'prediction_mode';
  const PREDICTION_PROGRESS = 'prediction_progress';
  const RESERVATION_STATUS = 'reservation_status';
  const STATUS = 'status';
  const STORY_EVENT_TYPE = 'story_event_type';
  const TARGET_AUDIENCE_SIZE = 'target_audience_size';
  const TARGET_SPEC = 'target_spec';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';
  const BUDGET = 'budget';
  const DAY_PARTING_SCHEDULE = 'day_parting_schedule';
  const DESTINATION_IDS = 'destination_ids';
  const END_TIME = 'end_time';
  const NUM_CURVE_POINTS = 'num_curve_points';
  const OBJECTIVE = 'objective';
  const REACH = 'reach';
  const RF_PREDICTION_ID_TO_SHARE = 'rf_prediction_id_to_share';
  const START_TIME = 'start_time';
  const STOP_TIME = 'stop_time';

  public function getFieldTypes() {
    return array(
      'account_id' => 'int',
      'campaign_group_id' => 'int',
      'campaign_id' => 'string',
      'campaign_time_start' => 'datetime',
      'campaign_time_stop' => 'datetime',
      'curve_budget_reach' => 'string',
      'daily_impression_curve' => 'list<float>',
      'destination_id' => 'string',
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
      'frequency_cap' => 'unsigned int',
      'grp_dmas_audience_size' => 'float',
      'holdout_percentage' => 'unsigned int',
      'id' => 'string',
      'instagram_destination_id' => 'string',
      'interval_frequency_cap' => 'unsigned int',
      'interval_frequency_cap_reset_period' => 'unsigned int',
      'name' => 'string',
      'pause_periods' => 'list<Object>',
      'placement_breakdown' => 'Object',
      'prediction_mode' => 'unsigned int',
      'prediction_progress' => 'unsigned int',
      'reservation_status' => 'unsigned int',
      'status' => 'unsigned int',
      'story_event_type' => 'unsigned int',
      'target_audience_size' => 'unsigned int',
      'target_spec' => 'Targeting',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
      'budget' => 'unsigned int',
      'day_parting_schedule' => 'list<Object>',
      'destination_ids' => 'list<string>',
      'end_time' => 'unsigned int',
      'num_curve_points' => 'unsigned int',
      'objective' => 'string',
      'reach' => 'unsigned int',
      'rf_prediction_id_to_share' => 'string',
      'start_time' => 'unsigned int',
      'stop_time' => 'unsigned int',
    );
  }
}
