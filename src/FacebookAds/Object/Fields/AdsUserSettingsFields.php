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

class AdsUserSettingsFields extends AbstractEnum {

  const A_PLUS_C_SURVEY_SEEN = 'a_plus_c_survey_seen';
  const ADD_OVERLAYS_OPT_IN_STATUS = 'add_overlays_opt_in_status';
  const ADGROUP_NAME_TEMPLATE = 'adgroup_name_template';
  const ADS_CS_CATALOG_OPT_OUT_TIMESTAMP = 'ads_cs_catalog_opt_out_timestamp';
  const ADS_TOOL_VISITS = 'ads_tool_visits';
  const APLUSC_CAROUSEL_CDA_OPT_IN_STATUS = 'aplusc_carousel_cda_opt_in_status';
  const APLUSC_CAROUSEL_INLINE_COMMENT_OPT_IN_STATUS = 'aplusc_carousel_inline_comment_opt_in_status';
  const APLUSC_EPA_OPT_IN_STATUS = 'aplusc_epa_opt_in_status';
  const APLUSC_OPT_OUT_FRICTION = 'aplusc_opt_out_friction';
  const AUTOFLOW_LITE_OPT_IN_STATUS = 'autoflow_lite_opt_in_status';
  const AUTOFLOW_LITE_SHOULD_OPT_IN = 'autoflow_lite_should_opt_in';
  const BLENDED_ADS_CREATION_DEFAULTING_OPT_IN_STATUS = 'blended_ads_creation_defaulting_opt_in_status';
  const BLENDED_ADS_CREATION_DEFAULTING_OPT_OUT_CAMPAIGN_GROUP_IDS = 'blended_ads_creation_defaulting_opt_out_campaign_group_ids';
  const BOOKMARKED_PAGES = 'bookmarked_pages';
  const CAMPAIGN_GROUP_NAME_TEMPLATE = 'campaign_group_name_template';
  const CAMPAIGN_NAME_TEMPLATE = 'campaign_name_template';
  const CAROUSEL_TO_VIDEO_OPT_IN_STATUS = 'carousel_to_video_opt_in_status';
  const CONNECTED_SOURCES_CATALOG_OPT_IN_STATUS = 'connected_sources_catalog_opt_in_status';
  const DEFAULT_CREATION_MODE = 'default_creation_mode';
  const ENHANCE_CTA_TEXT_EXTRACTION_OPT_IN_STATUS = 'enhance_cta_text_extraction_opt_in_status';
  const EXPORT_FORMAT_DEFAULT = 'export_format_default';
  const FOCUS_MODE_DEFAULT = 'focus_mode_default';
  const GEN_AI_ALPHA_TEST_STATUS = 'gen_ai_alpha_test_status';
  const ID = 'id';
  const IMAGE_BACKGROUND_GENERATION_OPT_IN_STATUS = 'image_background_generation_opt_in_status';
  const IMAGE_EXPANSION_OPT_IN_STATUS = 'image_expansion_opt_in_status';
  const IS_ADS_AI_CONSENTED = 'is_ads_ai_consented';
  const IS_CBO_DEFAULT_ON = 'is_cbo_default_on';
  const IS_SE_REMOVAL_GUIDANCE_DISMISSED = 'is_se_removal_guidance_dismissed';
  const LAST_USED_POST_FORMAT = 'last_used_post_format';
  const LAST_VISITED_TIME = 'last_visited_time';
  const MUSIC_ON_REELS_OPT_IN = 'music_on_reels_opt_in';
  const MUTED_CBO_MIDFLIGHT_EDUCATION_MESSAGES = 'muted_cbo_midflight_education_messages';
  const ONSITE_DESTINATION_OPTIMIZATION_OPT_IN = 'onsite_destination_optimization_opt_in';
  const OPEN_TABS = 'open_tabs';
  const PREVIOUSLY_SEEN_RECOMMENDATIONS = 'previously_seen_recommendations';
  const PRODUCT_EXTENSIONS_OPT_IN = 'product_extensions_opt_in';
  const SELECTED_AD_ACCOUNT = 'selected_ad_account';
  const SELECTED_COMPARISON_TIMERANGE = 'selected_comparison_timerange';
  const SELECTED_METRIC_CIC = 'selected_metric_cic';
  const SELECTED_METRICS_CIC = 'selected_metrics_cic';
  const SELECTED_PAGE = 'selected_page';
  const SELECTED_PAGE_SECTION = 'selected_page_section';
  const SELECTED_POWER_EDITOR_PANE = 'selected_power_editor_pane';
  const SELECTED_STAT_RANGE = 'selected_stat_range';
  const SHOULD_EXPORT_FILTER_EMPTY_COLS = 'should_export_filter_empty_cols';
  const SHOULD_EXPORT_ROWS_WITHOUT_UNSUPPORTED_FEATURE = 'should_export_rows_without_unsupported_feature';
  const SHOULD_NOT_AUTO_EXPAND_TREE_TABLE = 'should_not_auto_expand_tree_table';
  const SHOULD_NOT_SHOW_CBO_CAMPAIGN_TOGGLE_OFF_CONFIRMATION_MESSAGE = 'should_not_show_cbo_campaign_toggle_off_confirmation_message';
  const SHOULD_NOT_SHOW_PUBLISH_MESSAGE_ON_EDITOR_CLOSE = 'should_not_show_publish_message_on_editor_close';
  const SHOW_ORIGINAL_VIDEOS_OPT_IN = 'show_original_videos_opt_in';
  const STATIC_AD_PRODUCT_EXTENSIONS_OPT_IN = 'static_ad_product_extensions_opt_in';
  const STICKY_SETTING_AFTER_DEFAULT_ON = 'sticky_setting_after_default_on';
  const SYD_CAMPAIGN_TRENDS_METRIC = 'syd_campaign_trends_metric';
  const TEXT_OPTIMIZATIONS_TEXT_EXTRACTION_OPT_IN_STATUS = 'text_optimizations_text_extraction_opt_in_status';
  const TEXT_VARIATIONS_STICKY_OPT_IN_STATUS = 'text_variations_sticky_opt_in_status';
  const TOTAL_COUPON_SYD_DISMISSALS = 'total_coupon_syd_dismissals';
  const TOTAL_COUPON_UPSELL_DISMISSALS = 'total_coupon_upsell_dismissals';
  const URL_PREFILL_REMOVAL_TIMESTAMP = 'url_prefill_removal_timestamp';
  const USE_PE_CREATE_FLOW = 'use_pe_create_flow';
  const USE_STEPPER_PRIMARY_ENTRY = 'use_stepper_primary_entry';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'a_plus_c_survey_seen' => 'bool',
      'add_overlays_opt_in_status' => 'string',
      'adgroup_name_template' => 'Object',
      'ads_cs_catalog_opt_out_timestamp' => 'list<map<string, int>>',
      'ads_tool_visits' => 'list<Object>',
      'aplusc_carousel_cda_opt_in_status' => 'string',
      'aplusc_carousel_inline_comment_opt_in_status' => 'string',
      'aplusc_epa_opt_in_status' => 'string',
      'aplusc_opt_out_friction' => 'list<string>',
      'autoflow_lite_opt_in_status' => 'string',
      'autoflow_lite_should_opt_in' => 'bool',
      'blended_ads_creation_defaulting_opt_in_status' => 'string',
      'blended_ads_creation_defaulting_opt_out_campaign_group_ids' => 'list<int>',
      'bookmarked_pages' => 'list<Page>',
      'campaign_group_name_template' => 'Object',
      'campaign_name_template' => 'Object',
      'carousel_to_video_opt_in_status' => 'string',
      'connected_sources_catalog_opt_in_status' => 'string',
      'default_creation_mode' => 'string',
      'enhance_cta_text_extraction_opt_in_status' => 'string',
      'export_format_default' => 'string',
      'focus_mode_default' => 'string',
      'gen_ai_alpha_test_status' => 'int',
      'id' => 'string',
      'image_background_generation_opt_in_status' => 'string',
      'image_expansion_opt_in_status' => 'string',
      'is_ads_ai_consented' => 'bool',
      'is_cbo_default_on' => 'bool',
      'is_se_removal_guidance_dismissed' => 'bool',
      'last_used_post_format' => 'string',
      'last_visited_time' => 'datetime',
      'music_on_reels_opt_in' => 'list<map<string, string>>',
      'muted_cbo_midflight_education_messages' => 'list<string>',
      'onsite_destination_optimization_opt_in' => 'string',
      'open_tabs' => 'list<string>',
      'previously_seen_recommendations' => 'list<string>',
      'product_extensions_opt_in' => 'string',
      'selected_ad_account' => 'AdAccount',
      'selected_comparison_timerange' => 'Object',
      'selected_metric_cic' => 'string',
      'selected_metrics_cic' => 'list<string>',
      'selected_page' => 'Page',
      'selected_page_section' => 'string',
      'selected_power_editor_pane' => 'string',
      'selected_stat_range' => 'Object',
      'should_export_filter_empty_cols' => 'string',
      'should_export_rows_without_unsupported_feature' => 'string',
      'should_not_auto_expand_tree_table' => 'bool',
      'should_not_show_cbo_campaign_toggle_off_confirmation_message' => 'bool',
      'should_not_show_publish_message_on_editor_close' => 'bool',
      'show_original_videos_opt_in' => 'string',
      'static_ad_product_extensions_opt_in' => 'string',
      'sticky_setting_after_default_on' => 'string',
      'syd_campaign_trends_metric' => 'string',
      'text_optimizations_text_extraction_opt_in_status' => 'string',
      'text_variations_sticky_opt_in_status' => 'string',
      'total_coupon_syd_dismissals' => 'int',
      'total_coupon_upsell_dismissals' => 'int',
      'url_prefill_removal_timestamp' => 'int',
      'use_pe_create_flow' => 'bool',
      'use_stepper_primary_entry' => 'bool',
      'user' => 'User',
    );
  }
}
