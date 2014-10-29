<?php
/**
 * Copyright 2014 Facebook, Inc.
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

abstract class ReachFrequencyPredictionFields {

  const ID = 'id';
  const ACCOUNT_ID = 'account_id';
  const ACTION = 'action';
  const BUDGET = 'budget';
  const BUYING_TYPE = 'buying_type';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_TIME_START= 'campaign_time_start';
  const CAMPAIGN_TIME_STOP = 'campaign_time_stop';
  const CURVE_BUDGET_REACH = 'curve_budget_reach';
  const DESTINATION_ID = 'destination_id';
  const EXTERNAL_REACH = 'external_reach';
  const EXTERNAL_BUDGET = 'external_budget';
  const EXTERNAL_IMPRESSION = 'external_impression';
  const EXTERNAL_MAXIMUM_REACH = 'external_maximum_reach';
  const EXTERNAL_MAXIMUM_IMPRESSION = 'external_maximum_impression';
  const EXTERNAL_MAXIMUM_BUDGET = 'external_maximum_budget';
  const EXTERNAL_MINIMUM_REACH = 'external_maximum_reach';
  const EXTERNAL_MINIMUM_IMPRESSION = 'external_maximum_impression';
  const EXTERNAL_MINIMUM_BUDGET = 'external_maximum_budget';
  const END_TIME = 'end_time';
  const FREQUENCY_CAP = 'frequency_cap';
  const IMPRESSION = 'impression';
  const PREDICTION_ID = 'rf_prediction_id';
  const PREDICTION_ID_TO_RELEASE = 'rf_prediction_id_to_release';
  const PREDICTION_ID_TO_SHARE = 'prediction_id_to_share';
  const PREDICTION_MODE = 'prediction_mode';
  const PREDICTION_PROGRESS = 'prediction_progress';
  const TARGET_AUDIENCE_SIZE = 'target_audience_size';
  const TARGET_SPEC = 'target_spec';
  const TIME_CREATED = 'time_created';
  const OBJECTIVE = 'objective';
  const REACH = 'reach';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const STORY_EVENT_TYPE = 'story_event_type';
}
