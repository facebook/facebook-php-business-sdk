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

namespace FacebookAds\Object;

use FacebookAds\Object\Fields\InsightsFields;

class Insights extends AbstractObject {

  /**
   * @var string[]
   */
  protected static $fields = array(
    InsightsFields::ACCOUNT_ID,
    InsightsFields::ACCOUNT_NAME,
    InsightsFields::ACTION_VALUES,
    InsightsFields::ACTIONS,
    InsightsFields::ACTIONS_PER_IMPRESSION,
    InsightsFields::ADGROUP_ID,
    InsightsFields::ADGROUP_NAME,
    InsightsFields::ASYNC_PERCENT_COMPLETION,
    InsightsFields::ASYNC_STATUS,
    InsightsFields::CALL_TO_ACTION_CLICKS,
    InsightsFields::CAMPAIGN_END,
    InsightsFields::CAMPAIGN_GROUP_END,
    InsightsFields::CAMPAIGN_GROUP_ID,
    InsightsFields::CAMPAIGN_GROUP_NAME,
    InsightsFields::CAMPAIGN_ID,
    InsightsFields::CAMPAIGN_NAME,
    InsightsFields::CAMPAIGN_START,
    InsightsFields::CLICKS,
    InsightsFields::COST_PER_ACTION_TYPE,
    InsightsFields::COST_PER_RESULT,
    InsightsFields::COST_PER_TOTAL_ACTION,
    InsightsFields::COST_PER_UNIQUE_CLICK,
    InsightsFields::CPC,
    InsightsFields::CPM,
    InsightsFields::CPP,
    InsightsFields::CTR,
    InsightsFields::DATE_START,
    InsightsFields::DATE_STOP,
    InsightsFields::FREQUENCY,
    InsightsFields::ID,
    InsightsFields::IMPRESSIONS,
    InsightsFields::OBJECTIVE,
    InsightsFields::REACH,
    InsightsFields::RELEVANCE_SCORE,
    InsightsFields::REPORT_RUN_ID,
    InsightsFields::RESULT_RATE,
    InsightsFields::RESULTS,
    InsightsFields::ROAS,
    InsightsFields::SOCIAL_CLICKS,
    InsightsFields::SOCIAL_IMPRESSIONS,
    InsightsFields::SOCIAL_REACH,
    InsightsFields::SPEND,
    InsightsFields::TODAY_SPEND,
    InsightsFields::TOTAL_ACTION_VALUE,
    InsightsFields::TOTAL_ACTIONS,
    InsightsFields::TOTAL_UNIQUE_ACTIONS,
    InsightsFields::UNIQUE_CLICKS,
    InsightsFields::UNIQUE_CTR,
    InsightsFields::UNIQUE_SOCIAL_CLICKS,
    InsightsFields::VIDEO_AVG_PCT_WATCHED_ACTIONS,
    InsightsFields::VIDEO_AVG_SEC_WATCHED_ACTIONS,
    InsightsFields::VIDEO_COMPLETE_WATCHED_ACTIONS,
    InsightsFields::VIDEO_P100_WATCHED_ACTIONS,
    InsightsFields::VIDEO_P25_WATCHED_ACTIONS,
    InsightsFields::VIDEO_P50_WATCHED_ACTIONS,
    InsightsFields::VIDEO_P75_WATCHED_ACTIONS,
    InsightsFields::VIDEO_P95_WATCHED_ACTIONS,
    InsightsFields::VIDEO_START_ACTIONS,
  );
}
