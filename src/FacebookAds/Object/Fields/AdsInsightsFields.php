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
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsInsightsFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_NAME = 'account_name';
  const ACTION_VALUES = 'action_values';
  const ACTIONS = 'actions';
  const AD_ID = 'ad_id';
  const AD_NAME = 'ad_name';
  const ADSET_ID = 'adset_id';
  const ADSET_NAME = 'adset_name';
  const APP_STORE_CLICKS = 'app_store_clicks';
  const BUYING_TYPE = 'buying_type';
  const CALL_TO_ACTION_CLICKS = 'call_to_action_clicks';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_NAME = 'campaign_name';
  const CANVAS_AVG_VIEW_PERCENT = 'canvas_avg_view_percent';
  const CANVAS_AVG_VIEW_TIME = 'canvas_avg_view_time';
  const CLICKS = 'clicks';
  const COST_PER_10_SEC_VIDEO_VIEW = 'cost_per_10_sec_video_view';
  const COST_PER_ACTION_TYPE = 'cost_per_action_type';
  const COST_PER_ESTIMATED_AD_RECALLERS = 'cost_per_estimated_ad_recallers';
  const COST_PER_INLINE_LINK_CLICK = 'cost_per_inline_link_click';
  const COST_PER_INLINE_POST_ENGAGEMENT = 'cost_per_inline_post_engagement';
  const COST_PER_TOTAL_ACTION = 'cost_per_total_action';
  const COST_PER_UNIQUE_ACTION_TYPE = 'cost_per_unique_action_type';
  const COST_PER_UNIQUE_CLICK = 'cost_per_unique_click';
  const COST_PER_UNIQUE_INLINE_LINK_CLICK = 'cost_per_unique_inline_link_click';
  const CPC = 'cpc';
  const CPM = 'cpm';
  const CPP = 'cpp';
  const CTR = 'ctr';
  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const DEEPLINK_CLICKS = 'deeplink_clicks';
  const ESTIMATED_AD_RECALL_RATE = 'estimated_ad_recall_rate';
  const ESTIMATED_AD_RECALLERS = 'estimated_ad_recallers';
  const FREQUENCY = 'frequency';
  const IMPRESSIONS = 'impressions';
  const INLINE_LINK_CLICK_CTR = 'inline_link_click_ctr';
  const INLINE_LINK_CLICKS = 'inline_link_clicks';
  const INLINE_POST_ENGAGEMENT = 'inline_post_engagement';
  const NEWSFEED_AVG_POSITION = 'newsfeed_avg_position';
  const NEWSFEED_CLICKS = 'newsfeed_clicks';
  const NEWSFEED_IMPRESSIONS = 'newsfeed_impressions';
  const OBJECTIVE = 'objective';
  const PLACE_PAGE_NAME = 'place_page_name';
  const REACH = 'reach';
  const RELEVANCE_SCORE = 'relevance_score';
  const SOCIAL_CLICKS = 'social_clicks';
  const SOCIAL_IMPRESSIONS = 'social_impressions';
  const SOCIAL_REACH = 'social_reach';
  const SOCIAL_SPEND = 'social_spend';
  const SPEND = 'spend';
  const TOTAL_ACTION_VALUE = 'total_action_value';
  const TOTAL_ACTIONS = 'total_actions';
  const TOTAL_UNIQUE_ACTIONS = 'total_unique_actions';
  const UNIQUE_ACTIONS = 'unique_actions';
  const UNIQUE_CLICKS = 'unique_clicks';
  const UNIQUE_CTR = 'unique_ctr';
  const UNIQUE_IMPRESSIONS = 'unique_impressions';
  const UNIQUE_INLINE_LINK_CLICK_CTR = 'unique_inline_link_click_ctr';
  const UNIQUE_INLINE_LINK_CLICKS = 'unique_inline_link_clicks';
  const UNIQUE_LINK_CLICKS_CTR = 'unique_link_clicks_ctr';
  const UNIQUE_SOCIAL_CLICKS = 'unique_social_clicks';
  const UNIQUE_SOCIAL_IMPRESSIONS = 'unique_social_impressions';
  const VIDEO_10_SEC_WATCHED_ACTIONS = 'video_10_sec_watched_actions';
  const VIDEO_15_SEC_WATCHED_ACTIONS = 'video_15_sec_watched_actions';
  const VIDEO_30_SEC_WATCHED_ACTIONS = 'video_30_sec_watched_actions';
  const VIDEO_AVG_PCT_WATCHED_ACTIONS = 'video_avg_pct_watched_actions';
  const VIDEO_AVG_PERCENT_WATCHED_ACTIONS = 'video_avg_percent_watched_actions';
  const VIDEO_AVG_SEC_WATCHED_ACTIONS = 'video_avg_sec_watched_actions';
  const VIDEO_AVG_TIME_WATCHED_ACTIONS = 'video_avg_time_watched_actions';
  const VIDEO_COMPLETE_WATCHED_ACTIONS = 'video_complete_watched_actions';
  const VIDEO_P100_WATCHED_ACTIONS = 'video_p100_watched_actions';
  const VIDEO_P25_WATCHED_ACTIONS = 'video_p25_watched_actions';
  const VIDEO_P50_WATCHED_ACTIONS = 'video_p50_watched_actions';
  const VIDEO_P75_WATCHED_ACTIONS = 'video_p75_watched_actions';
  const VIDEO_P95_WATCHED_ACTIONS = 'video_p95_watched_actions';
  const WEBSITE_CLICKS = 'website_clicks';
  const WEBSITE_CTR = 'website_ctr';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'account_name' => 'string',
      'action_values' => 'list<AdsActionStats>',
      'actions' => 'list<AdsActionStats>',
      'ad_id' => 'string',
      'ad_name' => 'string',
      'adset_id' => 'string',
      'adset_name' => 'string',
      'app_store_clicks' => 'string',
      'buying_type' => 'string',
      'call_to_action_clicks' => 'string',
      'campaign_id' => 'string',
      'campaign_name' => 'string',
      'canvas_avg_view_percent' => 'string',
      'canvas_avg_view_time' => 'string',
      'clicks' => 'string',
      'cost_per_10_sec_video_view' => 'list<AdsActionStats>',
      'cost_per_action_type' => 'list<AdsActionStats>',
      'cost_per_estimated_ad_recallers' => 'string',
      'cost_per_inline_link_click' => 'string',
      'cost_per_inline_post_engagement' => 'string',
      'cost_per_total_action' => 'string',
      'cost_per_unique_action_type' => 'list<AdsActionStats>',
      'cost_per_unique_click' => 'string',
      'cost_per_unique_inline_link_click' => 'string',
      'cpc' => 'string',
      'cpm' => 'string',
      'cpp' => 'string',
      'ctr' => 'string',
      'date_start' => 'string',
      'date_stop' => 'string',
      'deeplink_clicks' => 'string',
      'estimated_ad_recall_rate' => 'string',
      'estimated_ad_recallers' => 'string',
      'frequency' => 'string',
      'impressions' => 'string',
      'inline_link_click_ctr' => 'string',
      'inline_link_clicks' => 'string',
      'inline_post_engagement' => 'string',
      'newsfeed_avg_position' => 'string',
      'newsfeed_clicks' => 'string',
      'newsfeed_impressions' => 'string',
      'objective' => 'string',
      'place_page_name' => 'string',
      'reach' => 'string',
      'relevance_score' => 'AdgroupRelevanceScore',
      'social_clicks' => 'string',
      'social_impressions' => 'string',
      'social_reach' => 'string',
      'social_spend' => 'string',
      'spend' => 'string',
      'total_action_value' => 'string',
      'total_actions' => 'string',
      'total_unique_actions' => 'string',
      'unique_actions' => 'list<AdsActionStats>',
      'unique_clicks' => 'string',
      'unique_ctr' => 'string',
      'unique_impressions' => 'string',
      'unique_inline_link_click_ctr' => 'string',
      'unique_inline_link_clicks' => 'string',
      'unique_link_clicks_ctr' => 'string',
      'unique_social_clicks' => 'string',
      'unique_social_impressions' => 'string',
      'video_10_sec_watched_actions' => 'list<AdsActionStats>',
      'video_15_sec_watched_actions' => 'list<AdsActionStats>',
      'video_30_sec_watched_actions' => 'list<AdsActionStats>',
      'video_avg_pct_watched_actions' => 'list<AdsActionStats>',
      'video_avg_percent_watched_actions' => 'list<AdsActionStats>',
      'video_avg_sec_watched_actions' => 'list<AdsActionStats>',
      'video_avg_time_watched_actions' => 'list<AdsActionStats>',
      'video_complete_watched_actions' => 'list<AdsActionStats>',
      'video_p100_watched_actions' => 'list<AdsActionStats>',
      'video_p25_watched_actions' => 'list<AdsActionStats>',
      'video_p50_watched_actions' => 'list<AdsActionStats>',
      'video_p75_watched_actions' => 'list<AdsActionStats>',
      'video_p95_watched_actions' => 'list<AdsActionStats>',
      'website_clicks' => 'string',
      'website_ctr' => 'list<AdsActionStats>',
    );
  }
}
