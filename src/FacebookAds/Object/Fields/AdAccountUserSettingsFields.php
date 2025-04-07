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

class AdAccountUserSettingsFields extends AbstractEnum {

  const ACF_SHOULD_OPT_OUT_VIDEO_ADJUSTMENTS = 'acf_should_opt_out_video_adjustments';
  const ACO_STICKY_SETTINGS = 'aco_sticky_settings';
  const ACTIONS_QUICK_VIEW_CREATED = 'actions_quick_view_created';
  const ACTIVE_ADS_QUICK_VIEW_CREATED = 'active_ads_quick_view_created';
  const AD_ACCOUNT = 'ad_account';
  const AD_OBJECT_EXPORT_FORMAT = 'ad_object_export_format';
  const AUTO_REVIEW_VIDEO_CAPTION = 'auto_review_video_caption';
  const CAMPAIGN_OVERVIEW_COLUMNS = 'campaign_overview_columns';
  const COLUMN_SUGGESTION_STATUS = 'column_suggestion_status';
  const CONDITIONAL_FORMATTING_RULES = 'conditional_formatting_rules';
  const DEFAULT_ACCOUNT_OVERVIEW_AGEGENDER_METRICS = 'default_account_overview_agegender_metrics';
  const DEFAULT_ACCOUNT_OVERVIEW_LOCATION_METRICS = 'default_account_overview_location_metrics';
  const DEFAULT_ACCOUNT_OVERVIEW_METRICS = 'default_account_overview_metrics';
  const DEFAULT_ACCOUNT_OVERVIEW_TIME_METRICS = 'default_account_overview_time_metrics';
  const DEFAULT_BUILTIN_COLUMN_PRESET = 'default_builtin_column_preset';
  const DEFAULT_NAM_TIME_RANGE = 'default_nam_time_range';
  const DRAFT_MODE_ENABLED = 'draft_mode_enabled';
  const EXPORT_DELETED_ITEMS_WITH_DELIVERY = 'export_deleted_items_with_delivery';
  const EXPORT_SUMMARY_ROW = 'export_summary_row';
  const HAD_DELIVERY_QUICK_VIEW_CREATED = 'had_delivery_quick_view_created';
  const HAS_SEEN_GROUPS_COLUMN_FLEXING_EXPERIENCE = 'has_seen_groups_column_flexing_experience';
  const HAS_SEEN_INSTAGRAM_COLUMN_FLEXING_EXPERIENCE = 'has_seen_instagram_column_flexing_experience';
  const HAS_SEEN_LEADS_COLUMN_FLEXING_EXPERIENCE = 'has_seen_leads_column_flexing_experience';
  const HAS_SEEN_SHOPS_ADS_METRICS_ONBOARDING_TOUR = 'has_seen_shops_ads_metrics_onboarding_tour';
  const HAS_SEEN_SHOPS_COLUMN_FLEXING_EXPERIENCE = 'has_seen_shops_column_flexing_experience';
  const HIDDEN_OPTIMIZATION_TIPS = 'hidden_optimization_tips';
  const ID = 'id';
  const IS_3P_AUTH_SETTING_SET = 'is_3p_auth_setting_set';
  const IS_ADS_MANAGER_FOOTER_ROW_PREFERENCE_SET = 'is_ads_manager_footer_row_preference_set';
  const IS_ADS_MANAGER_FOOTER_ROW_SHOWN = 'is_ads_manager_footer_row_shown';
  const IS_TEXT_VARIATION_NUX_CLOSE = 'is_text_variation_nux_close';
  const LAST_USED_COLUMNS = 'last_used_columns';
  const LAST_USED_PE_FILTERS = 'last_used_pe_filters';
  const LAST_USED_WEBSITE_URLS = 'last_used_website_urls';
  const OUTLIER_PREFERENCES = 'outlier_preferences';
  const PINNED_AD_OBJECT_IDS = 'pinned_ad_object_ids';
  const RB_EXPORT_FORMAT = 'rb_export_format';
  const RB_EXPORT_RAW_DATA = 'rb_export_raw_data';
  const RB_EXPORT_SUMMARY_ROW = 'rb_export_summary_row';
  const SAIP_ADVERTISER_SETUP_OPTIMISATION_GUIDANCE_OVERALL_STATE = 'saip_advertiser_setup_optimisation_guidance_overall_state';
  const SAIP_ADVERTISER_SETUP_OPTIMISATION_GUIDANCE_STATE = 'saip_advertiser_setup_optimisation_guidance_state';
  const SHOPS_ADS_METRICS_ONBOARDING_TOUR_CLOSE_COUNT = 'shops_ads_metrics_onboarding_tour_close_count';
  const SHOPS_ADS_METRICS_ONBOARDING_TOUR_LAST_ACTION_TIME = 'shops_ads_metrics_onboarding_tour_last_action_time';
  const SHOULD_DEFAULT_IMAGE_AUTO_CROP = 'should_default_image_auto_crop';
  const SHOULD_DEFAULT_IMAGE_AUTO_CROP_FOR_TAIL = 'should_default_image_auto_crop_for_tail';
  const SHOULD_DEFAULT_IMAGE_AUTO_CROP_OPTIMIZATION = 'should_default_image_auto_crop_optimization';
  const SHOULD_DEFAULT_IMAGE_DOF_TOGGLE = 'should_default_image_dof_toggle';
  const SHOULD_DEFAULT_IMAGE_LPP_ADS_TO_SQUARE = 'should_default_image_lpp_ads_to_square';
  const SHOULD_DEFAULT_INSTAGRAM_PROFILE_CARD_OPTIMIZATION = 'should_default_instagram_profile_card_optimization';
  const SHOULD_DEFAULT_TEXT_SWAPPING_OPTIMIZATION = 'should_default_text_swapping_optimization';
  const SHOULD_LOGOUT_OF_3P_SOURCING = 'should_logout_of_3p_sourcing';
  const SHOULD_SHOW_SHOPS_ADS_METRICS_ONBOARDING_TOUR = 'should_show_shops_ads_metrics_onboarding_tour';
  const SHOW_ARCHIVED_DATA = 'show_archived_data';
  const SHOW_TEXT_VARIATION_NUX_TOOLTIP = 'show_text_variation_nux_tooltip';
  const SYD_CAMPAIGN_TRENDS_ACTIVEMETRIC = 'syd_campaign_trends_activemetric';
  const SYD_CAMPAIGN_TRENDS_ATTRIBUTION = 'syd_campaign_trends_attribution';
  const SYD_CAMPAIGN_TRENDS_METRICS = 'syd_campaign_trends_metrics';
  const SYD_CAMPAIGN_TRENDS_OBJECTIVE = 'syd_campaign_trends_objective';
  const SYD_CAMPAIGN_TRENDS_TIME_RANGE = 'syd_campaign_trends_time_range';
  const SYD_LANDING_PAGE_OPT_IN_STATUS = 'syd_landing_page_opt_in_status';
  const TEXT_VARIATIONS_OPT_IN_TYPE = 'text_variations_opt_in_type';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'acf_should_opt_out_video_adjustments' => 'bool',
      'aco_sticky_settings' => 'list<map<string, string>>',
      'actions_quick_view_created' => 'bool',
      'active_ads_quick_view_created' => 'bool',
      'ad_account' => 'AdAccount',
      'ad_object_export_format' => 'string',
      'auto_review_video_caption' => 'bool',
      'campaign_overview_columns' => 'list<string>',
      'column_suggestion_status' => 'string',
      'conditional_formatting_rules' => 'list<string>',
      'default_account_overview_agegender_metrics' => 'list<string>',
      'default_account_overview_location_metrics' => 'list<string>',
      'default_account_overview_metrics' => 'list<string>',
      'default_account_overview_time_metrics' => 'list<string>',
      'default_builtin_column_preset' => 'string',
      'default_nam_time_range' => 'string',
      'draft_mode_enabled' => 'bool',
      'export_deleted_items_with_delivery' => 'bool',
      'export_summary_row' => 'bool',
      'had_delivery_quick_view_created' => 'bool',
      'has_seen_groups_column_flexing_experience' => 'bool',
      'has_seen_instagram_column_flexing_experience' => 'bool',
      'has_seen_leads_column_flexing_experience' => 'bool',
      'has_seen_shops_ads_metrics_onboarding_tour' => 'bool',
      'has_seen_shops_column_flexing_experience' => 'bool',
      'hidden_optimization_tips' => 'list<map<string, bool>>',
      'id' => 'string',
      'is_3p_auth_setting_set' => 'bool',
      'is_ads_manager_footer_row_preference_set' => 'bool',
      'is_ads_manager_footer_row_shown' => 'bool',
      'is_text_variation_nux_close' => 'bool',
      'last_used_columns' => 'Object',
      'last_used_pe_filters' => 'list<Object>',
      'last_used_website_urls' => 'list<string>',
      'outlier_preferences' => 'Object',
      'pinned_ad_object_ids' => 'list<string>',
      'rb_export_format' => 'string',
      'rb_export_raw_data' => 'bool',
      'rb_export_summary_row' => 'bool',
      'saip_advertiser_setup_optimisation_guidance_overall_state' => 'string',
      'saip_advertiser_setup_optimisation_guidance_state' => 'list<map<string, string>>',
      'shops_ads_metrics_onboarding_tour_close_count' => 'int',
      'shops_ads_metrics_onboarding_tour_last_action_time' => 'datetime',
      'should_default_image_auto_crop' => 'bool',
      'should_default_image_auto_crop_for_tail' => 'bool',
      'should_default_image_auto_crop_optimization' => 'bool',
      'should_default_image_dof_toggle' => 'bool',
      'should_default_image_lpp_ads_to_square' => 'bool',
      'should_default_instagram_profile_card_optimization' => 'bool',
      'should_default_text_swapping_optimization' => 'bool',
      'should_logout_of_3p_sourcing' => 'bool',
      'should_show_shops_ads_metrics_onboarding_tour' => 'bool',
      'show_archived_data' => 'bool',
      'show_text_variation_nux_tooltip' => 'bool',
      'syd_campaign_trends_activemetric' => 'string',
      'syd_campaign_trends_attribution' => 'string',
      'syd_campaign_trends_metrics' => 'list<string>',
      'syd_campaign_trends_objective' => 'SydCampaignTrendsObjective',
      'syd_campaign_trends_time_range' => 'string',
      'syd_landing_page_opt_in_status' => 'string',
      'text_variations_opt_in_type' => 'string',
      'user' => 'User',
    );
  }
}
