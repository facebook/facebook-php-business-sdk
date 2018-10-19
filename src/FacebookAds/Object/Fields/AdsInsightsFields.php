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

class AdsInsightsFields extends AbstractEnum {

  const ACCOUNT_CURRENCY = 'account_currency';
  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_NAME = 'account_name';
  const ACTION_VALUES = 'action_values';
  const ACTIONS = 'actions';
  const ACTIVITY_RECENCY = 'activity_recency';
  const AD_CLICK_ACTIONS = 'ad_click_actions';
  const AD_FORMAT_ASSET = 'ad_format_asset';
  const AD_ID = 'ad_id';
  const AD_IMPRESSION_ACTIONS = 'ad_impression_actions';
  const AD_NAME = 'ad_name';
  const ADSET_ID = 'adset_id';
  const ADSET_NAME = 'adset_name';
  const AGE = 'age';
  const AGE_TARGETING = 'age_targeting';
  const BID_TYPE = 'bid_type';
  const BODY_ASSET = 'body_asset';
  const BUYING_TYPE = 'buying_type';
  const CALL_TO_ACTION_ASSET = 'call_to_action_asset';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_NAME = 'campaign_name';
  const CANVAS_AVG_VIEW_PERCENT = 'canvas_avg_view_percent';
  const CANVAS_AVG_VIEW_TIME = 'canvas_avg_view_time';
  const CANVAS_COMPONENT_AVG_PCT_VIEW = 'canvas_component_avg_pct_view';
  const CLICKS = 'clicks';
  const COST_PER_10_SEC_VIDEO_VIEW = 'cost_per_10_sec_video_view';
  const COST_PER_15_SEC_VIDEO_VIEW = 'cost_per_15_sec_video_view';
  const COST_PER_2_SEC_CONTINUOUS_VIDEO_VIEW = 'cost_per_2_sec_continuous_video_view';
  const COST_PER_ACTION_TYPE = 'cost_per_action_type';
  const COST_PER_AD_CLICK = 'cost_per_ad_click';
  const COST_PER_DDA_COUNTBY_CONVS = 'cost_per_dda_countby_convs';
  const COST_PER_ESTIMATED_AD_RECALLERS = 'cost_per_estimated_ad_recallers';
  const COST_PER_INLINE_LINK_CLICK = 'cost_per_inline_link_click';
  const COST_PER_INLINE_POST_ENGAGEMENT = 'cost_per_inline_post_engagement';
  const COST_PER_ONE_THOUSAND_AD_IMPRESSION = 'cost_per_one_thousand_ad_impression';
  const COST_PER_OUTBOUND_CLICK = 'cost_per_outbound_click';
  const COST_PER_THRUPLAY = 'cost_per_thruplay';
  const COST_PER_UNIQUE_ACTION_TYPE = 'cost_per_unique_action_type';
  const COST_PER_UNIQUE_CLICK = 'cost_per_unique_click';
  const COST_PER_UNIQUE_INLINE_LINK_CLICK = 'cost_per_unique_inline_link_click';
  const COST_PER_UNIQUE_OUTBOUND_CLICK = 'cost_per_unique_outbound_click';
  const COUNTRY = 'country';
  const CPC = 'cpc';
  const CPM = 'cpm';
  const CPP = 'cpp';
  const CREATED_TIME = 'created_time';
  const CREATIVE_FINGERPRINT = 'creative_fingerprint';
  const CTR = 'ctr';
  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const DDA_COUNTBY_CONVS = 'dda_countby_convs';
  const DESCRIPTION_ASSET = 'description_asset';
  const DEVICE_PLATFORM = 'device_platform';
  const DMA = 'dma';
  const ESTIMATED_AD_RECALL_RATE = 'estimated_ad_recall_rate';
  const ESTIMATED_AD_RECALL_RATE_LOWER_BOUND = 'estimated_ad_recall_rate_lower_bound';
  const ESTIMATED_AD_RECALL_RATE_UPPER_BOUND = 'estimated_ad_recall_rate_upper_bound';
  const ESTIMATED_AD_RECALLERS = 'estimated_ad_recallers';
  const ESTIMATED_AD_RECALLERS_LOWER_BOUND = 'estimated_ad_recallers_lower_bound';
  const ESTIMATED_AD_RECALLERS_UPPER_BOUND = 'estimated_ad_recallers_upper_bound';
  const FREQUENCY = 'frequency';
  const FREQUENCY_VALUE = 'frequency_value';
  const GENDER = 'gender';
  const GENDER_TARGETING = 'gender_targeting';
  const HOURLY_STATS_AGGREGATED_BY_ADVERTISER_TIME_ZONE = 'hourly_stats_aggregated_by_advertiser_time_zone';
  const HOURLY_STATS_AGGREGATED_BY_AUDIENCE_TIME_ZONE = 'hourly_stats_aggregated_by_audience_time_zone';
  const IMAGE_ASSET = 'image_asset';
  const IMPRESSION_DEVICE = 'impression_device';
  const IMPRESSIONS = 'impressions';
  const IMPRESSIONS_DUMMY = 'impressions_dummy';
  const INLINE_LINK_CLICK_CTR = 'inline_link_click_ctr';
  const INLINE_LINK_CLICKS = 'inline_link_clicks';
  const INLINE_POST_ENGAGEMENT = 'inline_post_engagement';
  const LABELS = 'labels';
  const LINK_URL_ASSET = 'link_url_asset';
  const LOCATION = 'location';
  const MEDIA_ASSET = 'media_asset';
  const MOBILE_APP_PURCHASE_ROAS = 'mobile_app_purchase_roas';
  const OBJECTIVE = 'objective';
  const OUTBOUND_CLICKS = 'outbound_clicks';
  const OUTBOUND_CLICKS_CTR = 'outbound_clicks_ctr';
  const PLACE_PAGE_ID = 'place_page_id';
  const PLACE_PAGE_NAME = 'place_page_name';
  const PLACEMENT = 'placement';
  const PLATFORM_POSITION = 'platform_position';
  const PRODUCT_FORMAT = 'product_format';
  const PRODUCT_ID = 'product_id';
  const PUBLISHER_PLATFORM = 'publisher_platform';
  const PURCHASING_INTERFACE = 'purchasing_interface';
  const REACH = 'reach';
  const REGION = 'region';
  const RELEVANCE_SCORE = 'relevance_score';
  const SOCIAL_SPEND = 'social_spend';
  const SPEND = 'spend';
  const TITLE_ASSET = 'title_asset';
  const TOTAL_ACTION_VALUE = 'total_action_value';
  const UNIQUE_ACTIONS = 'unique_actions';
  const UNIQUE_CLICKS = 'unique_clicks';
  const UNIQUE_CTR = 'unique_ctr';
  const UNIQUE_INLINE_LINK_CLICK_CTR = 'unique_inline_link_click_ctr';
  const UNIQUE_INLINE_LINK_CLICKS = 'unique_inline_link_clicks';
  const UNIQUE_LINK_CLICKS_CTR = 'unique_link_clicks_ctr';
  const UNIQUE_OUTBOUND_CLICKS = 'unique_outbound_clicks';
  const UNIQUE_OUTBOUND_CLICKS_CTR = 'unique_outbound_clicks_ctr';
  const UNIQUE_VIDEO_CONTINUOUS_2_SEC_WATCHED_ACTIONS = 'unique_video_continuous_2_sec_watched_actions';
  const UNIQUE_VIDEO_VIEW_10_SEC = 'unique_video_view_10_sec';
  const UNIQUE_VIDEO_VIEW_15_SEC = 'unique_video_view_15_sec';
  const UPDATED_TIME = 'updated_time';
  const VIDEO_10_SEC_WATCHED_ACTIONS = 'video_10_sec_watched_actions';
  const VIDEO_15_SEC_WATCHED_ACTIONS = 'video_15_sec_watched_actions';
  const VIDEO_30_SEC_WATCHED_ACTIONS = 'video_30_sec_watched_actions';
  const VIDEO_ASSET = 'video_asset';
  const VIDEO_AVG_PERCENT_WATCHED_ACTIONS = 'video_avg_percent_watched_actions';
  const VIDEO_AVG_TIME_WATCHED_ACTIONS = 'video_avg_time_watched_actions';
  const VIDEO_CONTINUOUS_2_SEC_WATCHED_ACTIONS = 'video_continuous_2_sec_watched_actions';
  const VIDEO_P100_WATCHED_ACTIONS = 'video_p100_watched_actions';
  const VIDEO_P25_WATCHED_ACTIONS = 'video_p25_watched_actions';
  const VIDEO_P50_WATCHED_ACTIONS = 'video_p50_watched_actions';
  const VIDEO_P75_WATCHED_ACTIONS = 'video_p75_watched_actions';
  const VIDEO_P95_WATCHED_ACTIONS = 'video_p95_watched_actions';
  const VIDEO_PLAY_ACTIONS = 'video_play_actions';
  const VIDEO_PLAY_RETENTION_0_TO_15S_ACTIONS = 'video_play_retention_0_to_15s_actions';
  const VIDEO_PLAY_RETENTION_20_TO_60S_ACTIONS = 'video_play_retention_20_to_60s_actions';
  const VIDEO_PLAY_RETENTION_GRAPH_ACTIONS = 'video_play_retention_graph_actions';
  const VIDEO_THRUPLAY_WATCHED_ACTIONS = 'video_thruplay_watched_actions';
  const VIDEO_TIME_WATCHED_ACTIONS = 'video_time_watched_actions';
  const WEBSITE_CTR = 'website_ctr';
  const WEBSITE_PURCHASE_ROAS = 'website_purchase_roas';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'account_currency' => 'string',
      'account_id' => 'string',
      'account_name' => 'string',
      'action_values' => 'list<AdsActionStats>',
      'actions' => 'list<AdsActionStats>',
      'activity_recency' => 'string',
      'ad_click_actions' => 'list<AdsActionStats>',
      'ad_format_asset' => 'string',
      'ad_id' => 'string',
      'ad_impression_actions' => 'list<AdsActionStats>',
      'ad_name' => 'string',
      'adset_id' => 'string',
      'adset_name' => 'string',
      'age' => 'string',
      'age_targeting' => 'string',
      'bid_type' => 'string',
      'body_asset' => 'Object',
      'buying_type' => 'string',
      'call_to_action_asset' => 'Object',
      'campaign_id' => 'string',
      'campaign_name' => 'string',
      'canvas_avg_view_percent' => 'string',
      'canvas_avg_view_time' => 'string',
      'canvas_component_avg_pct_view' => 'list<AdsActionStats>',
      'clicks' => 'string',
      'cost_per_10_sec_video_view' => 'list<AdsActionStats>',
      'cost_per_15_sec_video_view' => 'list<AdsActionStats>',
      'cost_per_2_sec_continuous_video_view' => 'list<AdsActionStats>',
      'cost_per_action_type' => 'list<AdsActionStats>',
      'cost_per_ad_click' => 'list<AdsActionStats>',
      'cost_per_dda_countby_convs' => 'string',
      'cost_per_estimated_ad_recallers' => 'string',
      'cost_per_inline_link_click' => 'string',
      'cost_per_inline_post_engagement' => 'string',
      'cost_per_one_thousand_ad_impression' => 'list<AdsActionStats>',
      'cost_per_outbound_click' => 'list<AdsActionStats>',
      'cost_per_thruplay' => 'list<AdsActionStats>',
      'cost_per_unique_action_type' => 'list<AdsActionStats>',
      'cost_per_unique_click' => 'string',
      'cost_per_unique_inline_link_click' => 'string',
      'cost_per_unique_outbound_click' => 'list<AdsActionStats>',
      'country' => 'string',
      'cpc' => 'string',
      'cpm' => 'string',
      'cpp' => 'string',
      'created_time' => 'string',
      'creative_fingerprint' => 'string',
      'ctr' => 'string',
      'date_start' => 'string',
      'date_stop' => 'string',
      'dda_countby_convs' => 'string',
      'description_asset' => 'Object',
      'device_platform' => 'string',
      'dma' => 'string',
      'estimated_ad_recall_rate' => 'string',
      'estimated_ad_recall_rate_lower_bound' => 'string',
      'estimated_ad_recall_rate_upper_bound' => 'string',
      'estimated_ad_recallers' => 'string',
      'estimated_ad_recallers_lower_bound' => 'string',
      'estimated_ad_recallers_upper_bound' => 'string',
      'frequency' => 'string',
      'frequency_value' => 'string',
      'gender' => 'string',
      'gender_targeting' => 'string',
      'hourly_stats_aggregated_by_advertiser_time_zone' => 'string',
      'hourly_stats_aggregated_by_audience_time_zone' => 'string',
      'image_asset' => 'Object',
      'impression_device' => 'string',
      'impressions' => 'string',
      'impressions_dummy' => 'string',
      'inline_link_click_ctr' => 'string',
      'inline_link_clicks' => 'string',
      'inline_post_engagement' => 'string',
      'labels' => 'string',
      'link_url_asset' => 'Object',
      'location' => 'string',
      'media_asset' => 'Object',
      'mobile_app_purchase_roas' => 'list<AdsActionStats>',
      'objective' => 'string',
      'outbound_clicks' => 'list<AdsActionStats>',
      'outbound_clicks_ctr' => 'list<AdsActionStats>',
      'place_page_id' => 'string',
      'place_page_name' => 'string',
      'placement' => 'string',
      'platform_position' => 'string',
      'product_format' => 'string',
      'product_id' => 'string',
      'publisher_platform' => 'string',
      'purchasing_interface' => 'string',
      'reach' => 'string',
      'region' => 'string',
      'relevance_score' => 'AdgroupRelevanceScore',
      'social_spend' => 'string',
      'spend' => 'string',
      'title_asset' => 'Object',
      'total_action_value' => 'string',
      'unique_actions' => 'list<AdsActionStats>',
      'unique_clicks' => 'string',
      'unique_ctr' => 'string',
      'unique_inline_link_click_ctr' => 'string',
      'unique_inline_link_clicks' => 'string',
      'unique_link_clicks_ctr' => 'string',
      'unique_outbound_clicks' => 'list<AdsActionStats>',
      'unique_outbound_clicks_ctr' => 'list<AdsActionStats>',
      'unique_video_continuous_2_sec_watched_actions' => 'list<AdsActionStats>',
      'unique_video_view_10_sec' => 'list<AdsActionStats>',
      'unique_video_view_15_sec' => 'list<AdsActionStats>',
      'updated_time' => 'string',
      'video_10_sec_watched_actions' => 'list<AdsActionStats>',
      'video_15_sec_watched_actions' => 'list<AdsActionStats>',
      'video_30_sec_watched_actions' => 'list<AdsActionStats>',
      'video_asset' => 'Object',
      'video_avg_percent_watched_actions' => 'list<AdsActionStats>',
      'video_avg_time_watched_actions' => 'list<AdsActionStats>',
      'video_continuous_2_sec_watched_actions' => 'list<AdsActionStats>',
      'video_p100_watched_actions' => 'list<AdsActionStats>',
      'video_p25_watched_actions' => 'list<AdsActionStats>',
      'video_p50_watched_actions' => 'list<AdsActionStats>',
      'video_p75_watched_actions' => 'list<AdsActionStats>',
      'video_p95_watched_actions' => 'list<AdsActionStats>',
      'video_play_actions' => 'list<AdsActionStats>',
      'video_play_retention_0_to_15s_actions' => 'list<Object>',
      'video_play_retention_20_to_60s_actions' => 'list<Object>',
      'video_play_retention_graph_actions' => 'list<Object>',
      'video_thruplay_watched_actions' => 'list<AdsActionStats>',
      'video_time_watched_actions' => 'list<AdsActionStats>',
      'website_ctr' => 'list<AdsActionStats>',
      'website_purchase_roas' => 'list<AdsActionStats>',
      'id' => 'string',
    );
  }
}
