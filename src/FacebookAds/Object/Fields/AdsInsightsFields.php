<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
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
  const AD_CLICK_ACTIONS = 'ad_click_actions';
  const AD_ID = 'ad_id';
  const AD_IMPRESSION_ACTIONS = 'ad_impression_actions';
  const AD_NAME = 'ad_name';
  const ADSET_END = 'adset_end';
  const ADSET_ID = 'adset_id';
  const ADSET_NAME = 'adset_name';
  const ADSET_START = 'adset_start';
  const AGE_TARGETING = 'age_targeting';
  const ATTRIBUTION_SETTING = 'attribution_setting';
  const AUCTION_BID = 'auction_bid';
  const AUCTION_COMPETITIVENESS = 'auction_competitiveness';
  const AUCTION_MAX_COMPETITOR_BID = 'auction_max_competitor_bid';
  const BUYING_TYPE = 'buying_type';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_NAME = 'campaign_name';
  const CANVAS_AVG_VIEW_PERCENT = 'canvas_avg_view_percent';
  const CANVAS_AVG_VIEW_TIME = 'canvas_avg_view_time';
  const CATALOG_SEGMENT_ACTIONS = 'catalog_segment_actions';
  const CATALOG_SEGMENT_VALUE = 'catalog_segment_value';
  const CATALOG_SEGMENT_VALUE_MOBILE_PURCHASE_ROAS = 'catalog_segment_value_mobile_purchase_roas';
  const CATALOG_SEGMENT_VALUE_OMNI_PURCHASE_ROAS = 'catalog_segment_value_omni_purchase_roas';
  const CATALOG_SEGMENT_VALUE_WEBSITE_PURCHASE_ROAS = 'catalog_segment_value_website_purchase_roas';
  const CLICKS = 'clicks';
  const CONVERSION_LEAD_RATE = 'conversion_lead_rate';
  const CONVERSION_RATE_RANKING = 'conversion_rate_ranking';
  const CONVERSION_VALUES = 'conversion_values';
  const CONVERSIONS = 'conversions';
  const CONVERTED_PRODUCT_QUANTITY = 'converted_product_quantity';
  const CONVERTED_PRODUCT_VALUE = 'converted_product_value';
  const COST_PER_15_SEC_VIDEO_VIEW = 'cost_per_15_sec_video_view';
  const COST_PER_2_SEC_CONTINUOUS_VIDEO_VIEW = 'cost_per_2_sec_continuous_video_view';
  const COST_PER_ACTION_TYPE = 'cost_per_action_type';
  const COST_PER_AD_CLICK = 'cost_per_ad_click';
  const COST_PER_CONVERSION = 'cost_per_conversion';
  const COST_PER_CONVERSION_LEAD = 'cost_per_conversion_lead';
  const COST_PER_DDA_COUNTBY_CONVS = 'cost_per_dda_countby_convs';
  const COST_PER_ESTIMATED_AD_RECALLERS = 'cost_per_estimated_ad_recallers';
  const COST_PER_INLINE_LINK_CLICK = 'cost_per_inline_link_click';
  const COST_PER_INLINE_POST_ENGAGEMENT = 'cost_per_inline_post_engagement';
  const COST_PER_ONE_THOUSAND_AD_IMPRESSION = 'cost_per_one_thousand_ad_impression';
  const COST_PER_OUTBOUND_CLICK = 'cost_per_outbound_click';
  const COST_PER_THRUPLAY = 'cost_per_thruplay';
  const COST_PER_UNIQUE_ACTION_TYPE = 'cost_per_unique_action_type';
  const COST_PER_UNIQUE_CLICK = 'cost_per_unique_click';
  const COST_PER_UNIQUE_CONVERSION = 'cost_per_unique_conversion';
  const COST_PER_UNIQUE_INLINE_LINK_CLICK = 'cost_per_unique_inline_link_click';
  const COST_PER_UNIQUE_OUTBOUND_CLICK = 'cost_per_unique_outbound_click';
  const CPC = 'cpc';
  const CPM = 'cpm';
  const CPP = 'cpp';
  const CREATED_TIME = 'created_time';
  const CREATIVE_MEDIA_TYPE = 'creative_media_type';
  const CTR = 'ctr';
  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const DDA_COUNTBY_CONVS = 'dda_countby_convs';
  const DDA_RESULTS = 'dda_results';
  const ENGAGEMENT_RATE_RANKING = 'engagement_rate_ranking';
  const ESTIMATED_AD_RECALL_RATE = 'estimated_ad_recall_rate';
  const ESTIMATED_AD_RECALL_RATE_LOWER_BOUND = 'estimated_ad_recall_rate_lower_bound';
  const ESTIMATED_AD_RECALL_RATE_UPPER_BOUND = 'estimated_ad_recall_rate_upper_bound';
  const ESTIMATED_AD_RECALLERS = 'estimated_ad_recallers';
  const ESTIMATED_AD_RECALLERS_LOWER_BOUND = 'estimated_ad_recallers_lower_bound';
  const ESTIMATED_AD_RECALLERS_UPPER_BOUND = 'estimated_ad_recallers_upper_bound';
  const FREQUENCY = 'frequency';
  const FULL_VIEW_IMPRESSIONS = 'full_view_impressions';
  const FULL_VIEW_REACH = 'full_view_reach';
  const GENDER_TARGETING = 'gender_targeting';
  const IMPRESSIONS = 'impressions';
  const INLINE_LINK_CLICK_CTR = 'inline_link_click_ctr';
  const INLINE_LINK_CLICKS = 'inline_link_clicks';
  const INLINE_POST_ENGAGEMENT = 'inline_post_engagement';
  const INSTAGRAM_UPCOMING_EVENT_REMINDERS_SET = 'instagram_upcoming_event_reminders_set';
  const INSTANT_EXPERIENCE_CLICKS_TO_OPEN = 'instant_experience_clicks_to_open';
  const INSTANT_EXPERIENCE_CLICKS_TO_START = 'instant_experience_clicks_to_start';
  const INSTANT_EXPERIENCE_OUTBOUND_CLICKS = 'instant_experience_outbound_clicks';
  const INTERACTIVE_COMPONENT_TAP = 'interactive_component_tap';
  const LABELS = 'labels';
  const LOCATION = 'location';
  const MARKETING_MESSAGES_COST_PER_DELIVERED = 'marketing_messages_cost_per_delivered';
  const MARKETING_MESSAGES_COST_PER_LINK_BTN_CLICK = 'marketing_messages_cost_per_link_btn_click';
  const MARKETING_MESSAGES_SPEND = 'marketing_messages_spend';
  const MOBILE_APP_PURCHASE_ROAS = 'mobile_app_purchase_roas';
  const OBJECTIVE = 'objective';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const OUTBOUND_CLICKS = 'outbound_clicks';
  const OUTBOUND_CLICKS_CTR = 'outbound_clicks_ctr';
  const PLACE_PAGE_NAME = 'place_page_name';
  const PURCHASE_ROAS = 'purchase_roas';
  const QUALIFYING_QUESTION_QUALIFY_ANSWER_RATE = 'qualifying_question_qualify_answer_rate';
  const QUALITY_RANKING = 'quality_ranking';
  const REACH = 'reach';
  const SOCIAL_SPEND = 'social_spend';
  const SPEND = 'spend';
  const TOTAL_POSTBACKS = 'total_postbacks';
  const TOTAL_POSTBACKS_DETAILED = 'total_postbacks_detailed';
  const TOTAL_POSTBACKS_DETAILED_V4 = 'total_postbacks_detailed_v4';
  const UNIQUE_ACTIONS = 'unique_actions';
  const UNIQUE_CLICKS = 'unique_clicks';
  const UNIQUE_CONVERSIONS = 'unique_conversions';
  const UNIQUE_CTR = 'unique_ctr';
  const UNIQUE_INLINE_LINK_CLICK_CTR = 'unique_inline_link_click_ctr';
  const UNIQUE_INLINE_LINK_CLICKS = 'unique_inline_link_clicks';
  const UNIQUE_LINK_CLICKS_CTR = 'unique_link_clicks_ctr';
  const UNIQUE_OUTBOUND_CLICKS = 'unique_outbound_clicks';
  const UNIQUE_OUTBOUND_CLICKS_CTR = 'unique_outbound_clicks_ctr';
  const UNIQUE_VIDEO_CONTINUOUS_2_SEC_WATCHED_ACTIONS = 'unique_video_continuous_2_sec_watched_actions';
  const UNIQUE_VIDEO_VIEW_15_SEC = 'unique_video_view_15_sec';
  const UPDATED_TIME = 'updated_time';
  const VIDEO_15_SEC_WATCHED_ACTIONS = 'video_15_sec_watched_actions';
  const VIDEO_30_SEC_WATCHED_ACTIONS = 'video_30_sec_watched_actions';
  const VIDEO_AVG_TIME_WATCHED_ACTIONS = 'video_avg_time_watched_actions';
  const VIDEO_CONTINUOUS_2_SEC_WATCHED_ACTIONS = 'video_continuous_2_sec_watched_actions';
  const VIDEO_P100_WATCHED_ACTIONS = 'video_p100_watched_actions';
  const VIDEO_P25_WATCHED_ACTIONS = 'video_p25_watched_actions';
  const VIDEO_P50_WATCHED_ACTIONS = 'video_p50_watched_actions';
  const VIDEO_P75_WATCHED_ACTIONS = 'video_p75_watched_actions';
  const VIDEO_P95_WATCHED_ACTIONS = 'video_p95_watched_actions';
  const VIDEO_PLAY_ACTIONS = 'video_play_actions';
  const VIDEO_PLAY_CURVE_ACTIONS = 'video_play_curve_actions';
  const VIDEO_PLAY_RETENTION_0_TO_15S_ACTIONS = 'video_play_retention_0_to_15s_actions';
  const VIDEO_PLAY_RETENTION_20_TO_60S_ACTIONS = 'video_play_retention_20_to_60s_actions';
  const VIDEO_PLAY_RETENTION_GRAPH_ACTIONS = 'video_play_retention_graph_actions';
  const VIDEO_THRUPLAY_WATCHED_ACTIONS = 'video_thruplay_watched_actions';
  const VIDEO_TIME_WATCHED_ACTIONS = 'video_time_watched_actions';
  const WEBSITE_CTR = 'website_ctr';
  const WEBSITE_PURCHASE_ROAS = 'website_purchase_roas';
  const WISH_BID = 'wish_bid';

  public function getFieldTypes() {
    return array(
      'account_currency' => 'string',
      'account_id' => 'string',
      'account_name' => 'string',
      'action_values' => 'list<AdsActionStats>',
      'actions' => 'list<AdsActionStats>',
      'ad_click_actions' => 'list<AdsActionStats>',
      'ad_id' => 'string',
      'ad_impression_actions' => 'list<AdsActionStats>',
      'ad_name' => 'string',
      'adset_end' => 'string',
      'adset_id' => 'string',
      'adset_name' => 'string',
      'adset_start' => 'string',
      'age_targeting' => 'string',
      'attribution_setting' => 'string',
      'auction_bid' => 'string',
      'auction_competitiveness' => 'string',
      'auction_max_competitor_bid' => 'string',
      'buying_type' => 'string',
      'campaign_id' => 'string',
      'campaign_name' => 'string',
      'canvas_avg_view_percent' => 'string',
      'canvas_avg_view_time' => 'string',
      'catalog_segment_actions' => 'list<AdsActionStats>',
      'catalog_segment_value' => 'list<AdsActionStats>',
      'catalog_segment_value_mobile_purchase_roas' => 'list<AdsActionStats>',
      'catalog_segment_value_omni_purchase_roas' => 'list<AdsActionStats>',
      'catalog_segment_value_website_purchase_roas' => 'list<AdsActionStats>',
      'clicks' => 'string',
      'conversion_lead_rate' => 'string',
      'conversion_rate_ranking' => 'string',
      'conversion_values' => 'list<AdsActionStats>',
      'conversions' => 'list<AdsActionStats>',
      'converted_product_quantity' => 'list<AdsActionStats>',
      'converted_product_value' => 'list<AdsActionStats>',
      'cost_per_15_sec_video_view' => 'list<AdsActionStats>',
      'cost_per_2_sec_continuous_video_view' => 'list<AdsActionStats>',
      'cost_per_action_type' => 'list<AdsActionStats>',
      'cost_per_ad_click' => 'list<AdsActionStats>',
      'cost_per_conversion' => 'list<AdsActionStats>',
      'cost_per_conversion_lead' => 'string',
      'cost_per_dda_countby_convs' => 'string',
      'cost_per_estimated_ad_recallers' => 'string',
      'cost_per_inline_link_click' => 'string',
      'cost_per_inline_post_engagement' => 'string',
      'cost_per_one_thousand_ad_impression' => 'list<AdsActionStats>',
      'cost_per_outbound_click' => 'list<AdsActionStats>',
      'cost_per_thruplay' => 'list<AdsActionStats>',
      'cost_per_unique_action_type' => 'list<AdsActionStats>',
      'cost_per_unique_click' => 'string',
      'cost_per_unique_conversion' => 'list<AdsActionStats>',
      'cost_per_unique_inline_link_click' => 'string',
      'cost_per_unique_outbound_click' => 'list<AdsActionStats>',
      'cpc' => 'string',
      'cpm' => 'string',
      'cpp' => 'string',
      'created_time' => 'string',
      'creative_media_type' => 'string',
      'ctr' => 'string',
      'date_start' => 'string',
      'date_stop' => 'string',
      'dda_countby_convs' => 'string',
      'dda_results' => 'list<Object>',
      'engagement_rate_ranking' => 'string',
      'estimated_ad_recall_rate' => 'string',
      'estimated_ad_recall_rate_lower_bound' => 'string',
      'estimated_ad_recall_rate_upper_bound' => 'string',
      'estimated_ad_recallers' => 'string',
      'estimated_ad_recallers_lower_bound' => 'string',
      'estimated_ad_recallers_upper_bound' => 'string',
      'frequency' => 'string',
      'full_view_impressions' => 'string',
      'full_view_reach' => 'string',
      'gender_targeting' => 'string',
      'impressions' => 'string',
      'inline_link_click_ctr' => 'string',
      'inline_link_clicks' => 'string',
      'inline_post_engagement' => 'string',
      'instagram_upcoming_event_reminders_set' => 'string',
      'instant_experience_clicks_to_open' => 'string',
      'instant_experience_clicks_to_start' => 'string',
      'instant_experience_outbound_clicks' => 'list<AdsActionStats>',
      'interactive_component_tap' => 'list<AdsActionStats>',
      'labels' => 'string',
      'location' => 'string',
      'marketing_messages_cost_per_delivered' => 'string',
      'marketing_messages_cost_per_link_btn_click' => 'string',
      'marketing_messages_spend' => 'string',
      'mobile_app_purchase_roas' => 'list<AdsActionStats>',
      'objective' => 'string',
      'optimization_goal' => 'string',
      'outbound_clicks' => 'list<AdsActionStats>',
      'outbound_clicks_ctr' => 'list<AdsActionStats>',
      'place_page_name' => 'string',
      'purchase_roas' => 'list<AdsActionStats>',
      'qualifying_question_qualify_answer_rate' => 'string',
      'quality_ranking' => 'string',
      'reach' => 'string',
      'social_spend' => 'string',
      'spend' => 'string',
      'total_postbacks' => 'string',
      'total_postbacks_detailed' => 'list<AdsActionStats>',
      'total_postbacks_detailed_v4' => 'list<AdsActionStats>',
      'unique_actions' => 'list<AdsActionStats>',
      'unique_clicks' => 'string',
      'unique_conversions' => 'list<AdsActionStats>',
      'unique_ctr' => 'string',
      'unique_inline_link_click_ctr' => 'string',
      'unique_inline_link_clicks' => 'string',
      'unique_link_clicks_ctr' => 'string',
      'unique_outbound_clicks' => 'list<AdsActionStats>',
      'unique_outbound_clicks_ctr' => 'list<AdsActionStats>',
      'unique_video_continuous_2_sec_watched_actions' => 'list<AdsActionStats>',
      'unique_video_view_15_sec' => 'list<AdsActionStats>',
      'updated_time' => 'string',
      'video_15_sec_watched_actions' => 'list<AdsActionStats>',
      'video_30_sec_watched_actions' => 'list<AdsActionStats>',
      'video_avg_time_watched_actions' => 'list<AdsActionStats>',
      'video_continuous_2_sec_watched_actions' => 'list<AdsActionStats>',
      'video_p100_watched_actions' => 'list<AdsActionStats>',
      'video_p25_watched_actions' => 'list<AdsActionStats>',
      'video_p50_watched_actions' => 'list<AdsActionStats>',
      'video_p75_watched_actions' => 'list<AdsActionStats>',
      'video_p95_watched_actions' => 'list<AdsActionStats>',
      'video_play_actions' => 'list<AdsActionStats>',
      'video_play_curve_actions' => 'list<AdsHistogramStats>',
      'video_play_retention_0_to_15s_actions' => 'list<AdsHistogramStats>',
      'video_play_retention_20_to_60s_actions' => 'list<AdsHistogramStats>',
      'video_play_retention_graph_actions' => 'list<AdsHistogramStats>',
      'video_thruplay_watched_actions' => 'list<AdsActionStats>',
      'video_time_watched_actions' => 'list<AdsActionStats>',
      'website_ctr' => 'list<AdsActionStats>',
      'website_purchase_roas' => 'list<AdsActionStats>',
      'wish_bid' => 'string',
    );
  }
}
