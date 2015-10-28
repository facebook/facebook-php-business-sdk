<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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
 * @method static InsightsFields getInstance()
 */
class InsightsFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_NAME = 'account_name';
  const ACTION_VALUES = 'action_values';
  const ACTIONS = 'actions';
  const ACTIONS_PER_IMPRESSION = 'actions_per_impression';
  const AD_ID = 'ad_id';
  const AD_NAME = 'ad_name';
  const ADSET_ID = 'adset_id';
  const ADSET_NAME = 'adset_name';
  const CALL_TO_ACTION_CLICKS = 'call_to_action_clicks';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_NAME = 'campaign_name';
  const COST_PER_ACTION_TYPE = 'cost_per_action_type';
  const COST_PER_TOTAL_ACTION = 'cost_per_total_action';
  const COST_PER_UNIQUE_CLICK = 'cost_per_unique_click';
  const COST_PER_INLINE_LINK_CLICK = 'cost_per_inline_link_click';
  const COST_PER_INLINE_POST_ENGAGEMENT = 'cost_per_inline_post_engagement';
  const CPM = 'cpm';
  const CPP = 'cpp';
  const CTR = 'ctr';
  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const FREQUENCY = 'frequency';
  const IMPRESSIONS = 'impressions';
  const INLINE_LINK_CLICKS = 'inline_link_clicks';
  const INLINE_POST_ENGAGEMENT = 'inline_post_engagement';
  const PRODUCT_ID = 'product_id';
  const REACH = 'reach';
  const RELEVANCE_SCORE = 'relevance_score';
  const SOCIAL_CLICKS = 'social_clicks';
  const SOCIAL_IMPRESSIONS = 'social_impressions';
  const SOCIAL_REACH = 'social_reach';
  const SPEND = 'spend';
  const TOTAL_ACTION_VALUE = 'total_action_value';
  const TOTAL_ACTIONS = 'total_actions';
  const TOTAL_UNIQUE_ACTIONS = 'total_unique_actions';
  const UNIQUE_CLICKS = 'unique_clicks';
  const UNIQUE_CTR = 'unique_ctr';
  const UNIQUE_SOCIAL_CLICKS = 'unique_social_clicks';
  const VIDEO_AVG_PCT_WATCHED_ACTIONS = 'video_avg_pct_watched_actions';
  const VIDEO_AVG_SEC_WATCHED_ACTIONS = 'video_avg_sec_watched_actions';
  const VIDEO_COMPLETE_WATCHED_ACTIONS = 'video_complete_watched_actions';
  const VIDEO_P100_WATCHED_ACTIONS = 'video_p100_watched_actions';
  const VIDEO_P25_WATCHED_ACTIONS = 'video_p25_watched_actions';
  const VIDEO_P50_WATCHED_ACTIONS = 'video_p50_watched_actions';
  const VIDEO_P75_WATCHED_ACTIONS = 'video_p75_watched_actions';
  const VIDEO_P95_WATCHED_ACTIONS = 'video_p95_watched_actions';
  const WEBSITE_CTR = 'website_ctr';
}
