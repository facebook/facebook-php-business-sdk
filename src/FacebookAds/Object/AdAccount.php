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

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Values\AdAccountAdRulesHistoryActionValues;
use FacebookAds\Object\Values\AdAccountAdRulesHistoryEvaluationTypeValues;
use FacebookAds\Object\Values\AdAccountAdVolumeRecommendationTypeValues;
use FacebookAds\Object\Values\AdAccountClaimObjectiveValues;
use FacebookAds\Object\Values\AdAccountContentTypeValues;
use FacebookAds\Object\Values\AdAccountCurrencyValues;
use FacebookAds\Object\Values\AdAccountDeliveryEstimateOptimizationGoalValues;
use FacebookAds\Object\Values\AdAccountMatchedSearchApplicationsEdgeDataAppStoreValues;
use FacebookAds\Object\Values\AdAccountSubtypeValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedAppStoreValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedLimitTypeValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedModeValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedObjectiveValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedRegulatedCategoriesValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedWhitelistedTypesValues;
use FacebookAds\Object\Values\AdAccountTasksValues;
use FacebookAds\Object\Values\AdActivityCategoryValues;
use FacebookAds\Object\Values\AdActivityDataSourceValues;
use FacebookAds\Object\Values\AdAsyncRequestSetNotificationModeValues;
use FacebookAds\Object\Values\AdCreativeApplinkTreatmentValues;
use FacebookAds\Object\Values\AdCreativeAuthorizationCategoryValues;
use FacebookAds\Object\Values\AdCreativeCategorizationCriteriaValues;
use FacebookAds\Object\Values\AdCreativeCategoryMediaSourceValues;
use FacebookAds\Object\Values\AdCreativeDynamicAdVoiceValues;
use FacebookAds\Object\Values\AdCreativeInstantCheckoutSettingValues;
use FacebookAds\Object\Values\AdCreativeOperatorValues;
use FacebookAds\Object\Values\AdDatePresetValues;
use FacebookAds\Object\Values\AdExecutionOptionsValues;
use FacebookAds\Object\Values\AdOperatorValues;
use FacebookAds\Object\Values\AdPlacePageSetLocationTypesValues;
use FacebookAds\Object\Values\AdPlacePageSetTargetedAreaTypeValues;
use FacebookAds\Object\Values\AdPreviewAdFormatValues;
use FacebookAds\Object\Values\AdPreviewRenderTypeValues;
use FacebookAds\Object\Values\AdRuleStatusValues;
use FacebookAds\Object\Values\AdSetBidStrategyValues;
use FacebookAds\Object\Values\AdSetBillingEventValues;
use FacebookAds\Object\Values\AdSetDatePresetValues;
use FacebookAds\Object\Values\AdSetDestinationTypeValues;
use FacebookAds\Object\Values\AdSetEffectiveStatusValues;
use FacebookAds\Object\Values\AdSetExecutionOptionsValues;
use FacebookAds\Object\Values\AdSetFullFunnelExplorationModeValues;
use FacebookAds\Object\Values\AdSetMultiOptimizationGoalWeightValues;
use FacebookAds\Object\Values\AdSetOperatorValues;
use FacebookAds\Object\Values\AdSetOptimizationGoalValues;
use FacebookAds\Object\Values\AdSetOptimizationSubEventValues;
use FacebookAds\Object\Values\AdSetStatusValues;
use FacebookAds\Object\Values\AdSetTuneForCategoryValues;
use FacebookAds\Object\Values\AdStatusValues;
use FacebookAds\Object\Values\AdVideoContainerTypeValues;
use FacebookAds\Object\Values\AdVideoContentCategoryValues;
use FacebookAds\Object\Values\AdVideoFormattingValues;
use FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use FacebookAds\Object\Values\AdVideoSwapModeValues;
use FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use FacebookAds\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAds\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAds\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsDatePresetValues;
use FacebookAds\Object\Values\AdsInsightsLevelValues;
use FacebookAds\Object\Values\AdsInsightsSummaryActionBreakdownsValues;
use FacebookAds\Object\Values\AdsPixelSortByValues;
use FacebookAds\Object\Values\AsyncRequestStatusValues;
use FacebookAds\Object\Values\AsyncRequestTypeValues;
use FacebookAds\Object\Values\BusinessOwnedObjectOnBehalfOfRequestStatusValues;
use FacebookAds\Object\Values\CampaignBidStrategyValues;
use FacebookAds\Object\Values\CampaignDatePresetValues;
use FacebookAds\Object\Values\CampaignEffectiveStatusValues;
use FacebookAds\Object\Values\CampaignExecutionOptionsValues;
use FacebookAds\Object\Values\CampaignObjectiveValues;
use FacebookAds\Object\Values\CampaignOperatorValues;
use FacebookAds\Object\Values\CampaignSmartPromotionTypeValues;
use FacebookAds\Object\Values\CampaignSpecialAdCategoriesValues;
use FacebookAds\Object\Values\CampaignSpecialAdCategoryCountryValues;
use FacebookAds\Object\Values\CampaignStatusValues;
use FacebookAds\Object\Values\ContentDeliveryReportPlatformValues;
use FacebookAds\Object\Values\ContentDeliveryReportPositionValues;
use FacebookAds\Object\Values\CustomAudienceClaimObjectiveValues;
use FacebookAds\Object\Values\CustomAudienceContentTypeValues;
use FacebookAds\Object\Values\CustomAudienceCustomerFileSourceValues;
use FacebookAds\Object\Values\CustomAudienceSubtypeValues;
use FacebookAds\Object\Values\CustomConversionCustomEventTypeValues;
use FacebookAds\Object\Values\ReachFrequencyPredictionActionValues;
use FacebookAds\Object\Values\ReachFrequencyPredictionBuyingTypeValues;
use FacebookAds\Object\Values\ReachFrequencyPredictionInstreamPackagesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAccount extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'adaccounts';
  }

  /**
   * @return AdAccountFields
   */
  public static function getFieldsEnum() {
    return AdAccountFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Currency'] = AdAccountCurrencyValues::getInstance()->getValues();
    $ref_enums['Tasks'] = AdAccountTasksValues::getInstance()->getValues();
    $ref_enums['ClaimObjective'] = AdAccountClaimObjectiveValues::getInstance()->getValues();
    $ref_enums['ContentType'] = AdAccountContentTypeValues::getInstance()->getValues();
    $ref_enums['Subtype'] = AdAccountSubtypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getActivities(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'add_children' => 'bool',
      'after' => 'string',
      'business_id' => 'string',
      'category' => 'category_enum',
      'data_source' => 'data_source_enum',
      'extra_oids' => 'list<string>',
      'limit' => 'int',
      'oid' => 'string',
      'since' => 'datetime',
      'uid' => 'int',
      'until' => 'datetime',
    );
    $enums = array(
      'category_enum' => AdActivityCategoryValues::getInstance()->getValues(),
      'data_source_enum' => AdActivityDataSourceValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/activities',
      new AdActivity(),
      'EDGE',
      AdActivity::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdPlacePageSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_place_page_sets',
      new AdPlacePageSet(),
      'EDGE',
      AdPlacePageSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdPlacePageSet(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'location_types' => 'list<location_types_enum>',
      'name' => 'string',
      'parent_page' => 'string',
      'targeted_area_type' => 'targeted_area_type_enum',
    );
    $enums = array(
      'location_types_enum' => AdPlacePageSetLocationTypesValues::getInstance()->getValues(),
      'targeted_area_type_enum' => AdPlacePageSetTargetedAreaTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/ad_place_page_sets',
      new AdPlacePageSet(),
      'EDGE',
      AdPlacePageSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdPlacePageSetsAsync(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'location_types' => 'list<location_types_enum>',
      'name' => 'string',
      'parent_page' => 'string',
      'targeted_area_type' => 'targeted_area_type_enum',
    );
    $enums = array(
      'location_types_enum' => AdPlacePageSetLocationTypesValues::getInstance()->getValues(),
      'targeted_area_type_enum' => AdPlacePageSetTargetedAreaTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/ad_place_page_sets_async',
      new AdPlacePageSet(),
      'EDGE',
      AdPlacePageSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdSavedKeywords(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fields' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_saved_keywords',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdStudies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_studies',
      new AdStudy(),
      'EDGE',
      AdStudy::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdCloudPlayables(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adcloudplayables',
      new CloudGame(),
      'EDGE',
      CloudGame::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdCreatives(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adcreatives',
      new AdCreative(),
      'EDGE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdCreative(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'actor_id' => 'unsigned int',
      'adlabels' => 'list<Object>',
      'applink_treatment' => 'applink_treatment_enum',
      'asset_feed_spec' => 'Object',
      'authorization_category' => 'authorization_category_enum',
      'body' => 'string',
      'branded_content_sponsor_page_id' => 'string',
      'bundle_folder_id' => 'string',
      'call_to_action' => 'Object',
      'categorization_criteria' => 'categorization_criteria_enum',
      'category_media_source' => 'category_media_source_enum',
      'destination_set_id' => 'string',
      'dynamic_ad_voice' => 'dynamic_ad_voice_enum',
      'enable_launch_instant_app' => 'bool',
      'image_crops' => 'map',
      'image_file' => 'string',
      'image_hash' => 'string',
      'image_url' => 'string',
      'instagram_actor_id' => 'string',
      'instagram_permalink_url' => 'string',
      'instagram_user_id' => 'string',
      'instant_checkout_setting' => 'instant_checkout_setting_enum',
      'interactive_components_spec' => 'map',
      'is_dco_internal' => 'bool',
      'link_og_id' => 'string',
      'link_url' => 'string',
      'messenger_sponsored_message' => 'string',
      'name' => 'string',
      'object_id' => 'unsigned int',
      'object_story_id' => 'string',
      'object_story_spec' => 'AdCreativeObjectStorySpec',
      'object_type' => 'string',
      'object_url' => 'string',
      'place_page_set_id' => 'string',
      'platform_customizations' => 'Object',
      'playable_asset_id' => 'string',
      'portrait_customizations' => 'map',
      'product_set_id' => 'string',
      'recommender_settings' => 'map',
      'source_instagram_media_id' => 'string',
      'template_url' => 'string',
      'template_url_spec' => 'Object',
      'thumbnail_url' => 'string',
      'title' => 'string',
      'url_tags' => 'string',
      'use_page_actor_override' => 'bool',
    );
    $enums = array(
      'applink_treatment_enum' => AdCreativeApplinkTreatmentValues::getInstance()->getValues(),
      'authorization_category_enum' => AdCreativeAuthorizationCategoryValues::getInstance()->getValues(),
      'categorization_criteria_enum' => AdCreativeCategorizationCriteriaValues::getInstance()->getValues(),
      'category_media_source_enum' => AdCreativeCategoryMediaSourceValues::getInstance()->getValues(),
      'dynamic_ad_voice_enum' => AdCreativeDynamicAdVoiceValues::getInstance()->getValues(),
      'instant_checkout_setting_enum' => AdCreativeInstantCheckoutSettingValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adcreatives',
      new AdCreative(),
      'EDGE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdCreativesByLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_label_ids' => 'list<string>',
      'operator' => 'operator_enum',
    );
    $enums = array(
      'operator_enum' => AdCreativeOperatorValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adcreativesbylabels',
      new AdCreative(),
      'EDGE',
      AdCreative::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAdImages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'hash' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/adimages',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdImages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'biz_tag_id' => 'unsigned int',
      'business_id' => 'string',
      'hashes' => 'list<string>',
      'minheight' => 'unsigned int',
      'minwidth' => 'unsigned int',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adimages',
      new AdImage(),
      'EDGE',
      AdImage::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdImage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bytes' => 'Object',
      'copy_from' => 'Object',
      'filename' => 'file'
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adimages',
      new AdImage(),
      'EDGE',
      AdImage::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums),
      true
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adlabels',
      new AdLabel(),
      'EDGE',
      AdLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlabels',
      new AdLabel(),
      'EDGE',
      AdLabel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdPlayables(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adplayables',
      new PlayableContent(),
      'EDGE',
      PlayableContent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdPlayable(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'string',
      'name' => 'string',
      'session_id' => 'string',
      'source' => 'file',
      'source_url' => 'string',
      'source_zip' => 'file',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adplayables',
      new PlayableContent(),
      'EDGE',
      PlayableContent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdRulesHistory(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action' => 'action_enum',
      'evaluation_type' => 'evaluation_type_enum',
      'hide_no_changes' => 'bool',
      'object_id' => 'string',
    );
    $enums = array(
      'action_enum' => AdAccountAdRulesHistoryActionValues::getInstance()->getValues(),
      'evaluation_type_enum' => AdAccountAdRulesHistoryEvaluationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adrules_history',
      new AdAccountAdRulesHistory(),
      'EDGE',
      AdAccountAdRulesHistory::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdRulesLibrary(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adrules_library',
      new AdRule(),
      'EDGE',
      AdRule::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdRulesLibrary(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'evaluation_spec' => 'Object',
      'execution_spec' => 'Object',
      'name' => 'string',
      'schedule_spec' => 'Object',
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => AdRuleStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adrules_library',
      new AdRule(),
      'EDGE',
      AdRule::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<string>',
      'time_range' => 'Object',
      'updated_since' => 'int',
    );
    $enums = array(
      'date_preset_enum' => AdDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAd(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'adset_id' => 'unsigned int',
      'adset_spec' => 'AdSet',
      'audience_id' => 'string',
      'bid_amount' => 'int',
      'conversion_domain' => 'string',
      'creative' => 'AdCreative',
      'date_format' => 'string',
      'display_sequence' => 'unsigned int',
      'draft_adgroup_id' => 'string',
      'engagement_audience' => 'bool',
      'execution_options' => 'list<execution_options_enum>',
      'include_demolink_hashes' => 'bool',
      'name' => 'string',
      'priority' => 'unsigned int',
      'source_ad_id' => 'string',
      'status' => 'status_enum',
      'tracking_specs' => 'Object',
    );
    $enums = array(
      'execution_options_enum' => AdExecutionOptionsValues::getInstance()->getValues(),
      'status_enum' => AdStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/ads',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums),
      true
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsVolume(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'page_id' => 'int',
      'recommendation_type' => 'recommendation_type_enum',
      'show_breakdown_by_actor' => 'bool',
    );
    $enums = array(
      'recommendation_type_enum' => AdAccountAdVolumeRecommendationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads_volume',
      new AdAccountAdVolume(),
      'EDGE',
      AdAccountAdVolume::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsByLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_label_ids' => 'list<string>',
      'operator' => 'operator_enum',
    );
    $enums = array(
      'operator_enum' => AdOperatorValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adsbylabels',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<effective_status_enum>',
      'is_completed' => 'bool',
      'time_range' => 'Object',
    );
    $enums = array(
      'date_preset_enum' => AdSetDatePresetValues::getInstance()->getValues(),
      'effective_status_enum' => AdSetEffectiveStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adsets',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdSet(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'adset_schedule' => 'list<Object>',
      'attribution_spec' => 'list<map>',
      'bid_adjustments' => 'Object',
      'bid_amount' => 'int',
      'bid_constraints' => 'map<string, Object>',
      'bid_strategy' => 'bid_strategy_enum',
      'billing_event' => 'billing_event_enum',
      'campaign_id' => 'string',
      'campaign_spec' => 'Object',
      'creative_sequence' => 'list<string>',
      'daily_budget' => 'unsigned int',
      'daily_imps' => 'unsigned int',
      'daily_min_spend_target' => 'unsigned int',
      'daily_spend_cap' => 'unsigned int',
      'date_format' => 'string',
      'destination_type' => 'destination_type_enum',
      'end_time' => 'datetime',
      'execution_options' => 'list<execution_options_enum>',
      'existing_customer_budget_percentage' => 'unsigned int',
      'frequency_control_specs' => 'list<Object>',
      'full_funnel_exploration_mode' => 'full_funnel_exploration_mode_enum',
      'is_dynamic_creative' => 'bool',
      'lifetime_budget' => 'unsigned int',
      'lifetime_imps' => 'unsigned int',
      'lifetime_min_spend_target' => 'unsigned int',
      'lifetime_spend_cap' => 'unsigned int',
      'line_number' => 'unsigned int',
      'multi_optimization_goal_weight' => 'multi_optimization_goal_weight_enum',
      'name' => 'string',
      'optimization_goal' => 'optimization_goal_enum',
      'optimization_sub_event' => 'optimization_sub_event_enum',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'Object',
      'rb_prediction_id' => 'string',
      'rf_prediction_id' => 'string',
      'source_adset_id' => 'string',
      'start_time' => 'datetime',
      'status' => 'status_enum',
      'targeting' => 'Targeting',
      'time_based_ad_rotation_id_blocks' => 'list<list<unsigned int>>',
      'time_based_ad_rotation_intervals' => 'list<unsigned int>',
      'time_start' => 'datetime',
      'time_stop' => 'datetime',
      'topline_id' => 'string',
      'tune_for_category' => 'tune_for_category_enum',
      'upstream_events' => 'map',
    );
    $enums = array(
      'bid_strategy_enum' => AdSetBidStrategyValues::getInstance()->getValues(),
      'billing_event_enum' => AdSetBillingEventValues::getInstance()->getValues(),
      'destination_type_enum' => AdSetDestinationTypeValues::getInstance()->getValues(),
      'execution_options_enum' => AdSetExecutionOptionsValues::getInstance()->getValues(),
      'full_funnel_exploration_mode_enum' => AdSetFullFunnelExplorationModeValues::getInstance()->getValues(),
      'multi_optimization_goal_weight_enum' => AdSetMultiOptimizationGoalWeightValues::getInstance()->getValues(),
      'optimization_goal_enum' => AdSetOptimizationGoalValues::getInstance()->getValues(),
      'optimization_sub_event_enum' => AdSetOptimizationSubEventValues::getInstance()->getValues(),
      'status_enum' => AdSetStatusValues::getInstance()->getValues(),
      'tune_for_category_enum' => AdSetTuneForCategoryValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adsets',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdSetsByLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_label_ids' => 'list<string>',
      'operator' => 'operator_enum',
    );
    $enums = array(
      'operator_enum' => AdSetOperatorValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adsetsbylabels',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsPixels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'sort_by' => 'sort_by_enum',
    );
    $enums = array(
      'sort_by_enum' => AdsPixelSortByValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adspixels',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdsPixel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adspixels',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdvertisableApplications(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'string',
      'business_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/advertisable_applications',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAdVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'video_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/advideos',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'max_aspect_ratio' => 'float',
      'maxheight' => 'unsigned int',
      'maxlength' => 'unsigned int',
      'maxwidth' => 'unsigned int',
      'min_aspect_ratio' => 'float',
      'minheight' => 'unsigned int',
      'minlength' => 'unsigned int',
      'minwidth' => 'unsigned int',
      'title' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/advideos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adaptive_type' => 'string',
      'animated_effect_id' => 'unsigned int',
      'application_id' => 'string',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'audio_story_wave_animation_handle' => 'string',
      'chunk_session_id' => 'string',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_session_id' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'container_type' => 'container_type_enum',
      'content_category' => 'content_category_enum',
      'creative_tools' => 'string',
      'description' => 'string',
      'embeddable' => 'bool',
      'end_offset' => 'unsigned int',
      'fbuploader_video_file_chunk' => 'string',
      'file_size' => 'unsigned int',
      'file_url' => 'string',
      'fisheye_video_cropped' => 'bool',
      'formatting' => 'formatting_enum',
      'fov' => 'unsigned int',
      'front_z_rotation' => 'float',
      'fun_fact_prompt_id' => 'unsigned int',
      'fun_fact_toastee_id' => 'unsigned int',
      'guide' => 'list<list<unsigned int>>',
      'guide_enabled' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'initial_heading' => 'unsigned int',
      'initial_pitch' => 'unsigned int',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'is_group_linking_post' => 'bool',
      'is_voice_clip' => 'bool',
      'location_source_id' => 'string',
      'name' => 'string',
      'offer_like_post_id' => 'unsigned int',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_suggestion_mechanism' => 'string',
      'original_fov' => 'unsigned int',
      'original_projection_type' => 'original_projection_type_enum',
      'publish_event_id' => 'unsigned int',
      'react_mode_metadata' => 'string',
      'referenced_sticker_id' => 'string',
      'replace_video_id' => 'string',
      'sales_promo_id' => 'unsigned int',
      'slideshow_spec' => 'map',
      'source' => 'file',
      'source_instagram_media_id' => 'string',
      'spherical' => 'bool',
      'start_offset' => 'unsigned int',
      'swap_mode' => 'swap_mode_enum',
      'text_format_metadata' => 'string',
      'throwback_camera_roll_media' => 'string',
      'thumb' => 'file',
      'time_since_original_post' => 'unsigned int',
      'title' => 'string',
      'transcode_setting_properties' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'upload_phase' => 'upload_phase_enum',
      'upload_session_id' => 'string',
      'upload_setting_properties' => 'string',
      'video_file_chunk' => 'file',
      'video_id_original' => 'string',
      'video_start_time_ms' => 'unsigned int',
      'waterfall_id' => 'string',
    );
    $enums = array(
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/advideos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums),
      true,
      true
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAffectedAdSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/affectedadsets',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/agencies',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/agencies',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getApplications(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/applications',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/assigned_users',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/assigned_users',
      new AssignedUser(),
      'EDGE',
      AssignedUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAssignedUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tasks' => 'list<tasks_enum>',
      'user' => 'int',
    );
    $enums = array(
      'tasks_enum' => AdAccountTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/assigned_users',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAsyncBatchRequest(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adbatch' => 'list<Object>',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/async_batch_requests',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAsyncRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'status' => 'status_enum',
      'type' => 'type_enum',
    );
    $enums = array(
      'status_enum' => AsyncRequestStatusValues::getInstance()->getValues(),
      'type_enum' => AsyncRequestTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/async_requests',
      new AsyncRequest(),
      'EDGE',
      AsyncRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAsyncAdRequestSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_completed' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/asyncadrequestsets',
      new AdAsyncRequestSet(),
      'EDGE',
      AdAsyncRequestSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAsyncAdRequestSet(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_specs' => 'list<map>',
      'name' => 'string',
      'notification_mode' => 'notification_mode_enum',
      'notification_uri' => 'string',
    );
    $enums = array(
      'notification_mode_enum' => AdAsyncRequestSetNotificationModeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/asyncadrequestsets',
      new AdAsyncRequestSet(),
      'EDGE',
      AdAsyncRequestSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBlockListDraft(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'publisher_urls_file' => 'file',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/block_list_drafts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBroadTargetingCategories(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'custom_categories_only' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/broadtargetingcategories',
      new BroadTargetingCategories(),
      'EDGE',
      BroadTargetingCategories::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessProjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/businessprojects',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteCampaigns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'before_date' => 'datetime',
      'delete_offset' => 'unsigned int',
      'delete_strategy' => 'delete_strategy_enum',
      'object_count' => 'int',
    );
    $enums = array(
      'delete_strategy_enum' => array(
        'DELETE_ANY',
        'DELETE_ARCHIVED_BEFORE',
        'DELETE_OLDEST',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/campaigns',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCampaigns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<effective_status_enum>',
      'is_completed' => 'bool',
      'time_range' => 'Object',
    );
    $enums = array(
      'date_preset_enum' => CampaignDatePresetValues::getInstance()->getValues(),
      'effective_status_enum' => CampaignEffectiveStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/campaigns',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCampaign(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'bid_strategy' => 'bid_strategy_enum',
      'buying_type' => 'string',
      'daily_budget' => 'unsigned int',
      'execution_options' => 'list<execution_options_enum>',
      'is_skadnetwork_attribution' => 'bool',
      'iterative_split_test_configs' => 'list<Object>',
      'lifetime_budget' => 'unsigned int',
      'name' => 'string',
      'objective' => 'objective_enum',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'Object',
      'smart_promotion_type' => 'smart_promotion_type_enum',
      'source_campaign_id' => 'string',
      'special_ad_categories' => 'list<special_ad_categories_enum>',
      'special_ad_category_country' => 'list<special_ad_category_country_enum>',
      'spend_cap' => 'unsigned int',
      'start_time' => 'datetime',
      'status' => 'status_enum',
      'stop_time' => 'datetime',
      'topline_id' => 'string',
      'upstream_events' => 'map',
    );
    $enums = array(
      'bid_strategy_enum' => CampaignBidStrategyValues::getInstance()->getValues(),
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
      'objective_enum' => CampaignObjectiveValues::getInstance()->getValues(),
      'smart_promotion_type_enum' => CampaignSmartPromotionTypeValues::getInstance()->getValues(),
      'special_ad_categories_enum' => CampaignSpecialAdCategoriesValues::getInstance()->getValues(),
      'special_ad_category_country_enum' => CampaignSpecialAdCategoryCountryValues::getInstance()->getValues(),
      'status_enum' => CampaignStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/campaigns',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCampaignsByLabels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_label_ids' => 'list<string>',
      'operator' => 'operator_enum',
    );
    $enums = array(
      'operator_enum' => CampaignOperatorValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/campaignsbylabels',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getConnectedInstagramAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/connected_instagram_accounts',
      new IGUser(),
      'EDGE',
      IGUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getContentDeliveryReport(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'end_date' => 'datetime',
      'page_id' => 'unsigned int',
      'platform' => 'platform_enum',
      'position' => 'position_enum',
      'start_date' => 'datetime',
      'summary' => 'bool',
    );
    $enums = array(
      'platform_enum' => ContentDeliveryReportPlatformValues::getInstance()->getValues(),
      'position_enum' => ContentDeliveryReportPositionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/content_delivery_report',
      new ContentDeliveryReport(),
      'EDGE',
      ContentDeliveryReport::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCreateAndApplyPublisherBlockList(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_auto_blocking_on' => 'bool',
      'name' => 'string',
      'publisher_urls' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/create_and_apply_publisher_block_list',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_id' => 'string',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'pixel_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/customaudiences',
      new CustomAudience(),
      'EDGE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCustomAudience(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allowed_domains' => 'list<string>',
      'associated_audience_id' => 'unsigned int',
      'claim_objective' => 'claim_objective_enum',
      'content_type' => 'content_type_enum',
      'countries' => 'string',
      'creation_params' => 'map',
      'customer_file_source' => 'customer_file_source_enum',
      'dataset_id' => 'string',
      'description' => 'string',
      'enable_fetch_or_create' => 'bool',
      'event_source_group' => 'string',
      'event_sources' => 'list<map>',
      'exclusions' => 'list<Object>',
      'inclusions' => 'list<Object>',
      'is_snapshot' => 'bool',
      'is_value_based' => 'bool',
      'list_of_accounts' => 'list<unsigned int>',
      'lookalike_spec' => 'string',
      'name' => 'string',
      'opt_out_link' => 'string',
      'origin_audience_id' => 'string',
      'parent_audience_id' => 'unsigned int',
      'partner_reference_key' => 'string',
      'pixel_id' => 'string',
      'prefill' => 'bool',
      'product_set_id' => 'string',
      'regulated_audience_spec' => 'string',
      'retention_days' => 'unsigned int',
      'rev_share_policy_id' => 'unsigned int',
      'rule' => 'string',
      'rule_aggregation' => 'string',
      'subtype' => 'subtype_enum',
      'video_group_ids' => 'list<string>',
    );
    $enums = array(
      'claim_objective_enum' => CustomAudienceClaimObjectiveValues::getInstance()->getValues(),
      'content_type_enum' => CustomAudienceContentTypeValues::getInstance()->getValues(),
      'customer_file_source_enum' => CustomAudienceCustomerFileSourceValues::getInstance()->getValues(),
      'subtype_enum' => CustomAudienceSubtypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/customaudiences',
      new CustomAudience(),
      'EDGE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomAudiencesTos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/customaudiencestos',
      new CustomAudiencesTOS(),
      'EDGE',
      CustomAudiencesTOS::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCustomAudiencesTo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_id' => 'string',
      'tos_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/customaudiencestos',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomConversions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/customconversions',
      new CustomConversion(),
      'EDGE',
      CustomConversion::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCustomConversion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'advanced_rule' => 'string',
      'custom_event_type' => 'custom_event_type_enum',
      'default_conversion_value' => 'float',
      'description' => 'string',
      'event_source_id' => 'string',
      'name' => 'string',
      'rule' => 'string',
    );
    $enums = array(
      'custom_event_type_enum' => CustomConversionCustomEventTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/customconversions',
      new CustomConversion(),
      'EDGE',
      CustomConversion::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDeliveryEstimate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'optimization_goal' => 'optimization_goal_enum',
      'promoted_object' => 'Object',
      'targeting_spec' => 'Targeting',
    );
    $enums = array(
      'optimization_goal_enum' => AdAccountDeliveryEstimateOptimizationGoalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/delivery_estimate',
      new AdAccountDeliveryEstimate(),
      'EDGE',
      AdAccountDeliveryEstimate::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDeprecatedTargetingAdSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/deprecatedtargetingadsets',
      new AdSet(),
      'EDGE',
      AdSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getGeneratePreviews(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_format' => 'ad_format_enum',
      'creative' => 'AdCreative',
      'dynamic_asset_label' => 'string',
      'dynamic_creative_spec' => 'Object',
      'dynamic_customization' => 'Object',
      'end_date' => 'datetime',
      'height' => 'unsigned int',
      'locale' => 'string',
      'place_page_id' => 'int',
      'post' => 'Object',
      'product_item_ids' => 'list<string>',
      'render_type' => 'render_type_enum',
      'start_date' => 'datetime',
      'width' => 'unsigned int',
    );
    $enums = array(
      'ad_format_enum' => AdPreviewAdFormatValues::getInstance()->getValues(),
      'render_type_enum' => AdPreviewRenderTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/generatepreviews',
      new AdPreview(),
      'EDGE',
      AdPreview::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getImpactingAdStudies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/impacting_ad_studies',
      new AdStudy(),
      'EDGE',
      AdStudy::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'default_summary' => 'bool',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'sort' => 'list<string>',
      'summary' => 'list<string>',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
      'use_unified_attribution_setting' => 'bool',
    );
    $enums = array(
      'action_attribution_windows_enum' => AdsInsightsActionAttributionWindowsValues::getInstance()->getValues(),
      'action_breakdowns_enum' => AdsInsightsActionBreakdownsValues::getInstance()->getValues(),
      'action_report_time_enum' => AdsInsightsActionReportTimeValues::getInstance()->getValues(),
      'breakdowns_enum' => AdsInsightsBreakdownsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsInsightsDatePresetValues::getInstance()->getValues(),
      'level_enum' => AdsInsightsLevelValues::getInstance()->getValues(),
      'summary_action_breakdowns_enum' => AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/insights',
      new AdsInsights(),
      'EDGE',
      AdsInsights::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInsightsAsync(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'default_summary' => 'bool',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'sort' => 'list<string>',
      'summary' => 'list<string>',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
      'use_unified_attribution_setting' => 'bool',
    );
    $enums = array(
      'action_attribution_windows_enum' => AdsInsightsActionAttributionWindowsValues::getInstance()->getValues(),
      'action_breakdowns_enum' => AdsInsightsActionBreakdownsValues::getInstance()->getValues(),
      'action_report_time_enum' => AdsInsightsActionReportTimeValues::getInstance()->getValues(),
      'breakdowns_enum' => AdsInsightsBreakdownsValues::getInstance()->getValues(),
      'date_preset_enum' => AdsInsightsDatePresetValues::getInstance()->getValues(),
      'level_enum' => AdsInsightsLevelValues::getInstance()->getValues(),
      'summary_action_breakdowns_enum' => AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/insights',
      new AdReportRun(),
      'EDGE',
      AdReportRun::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstagramAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instagram_accounts',
      new InstagramUser(),
      'EDGE',
      InstagramUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getIosFourteenCampaignLimits(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ios_fourteen_campaign_limits',
      new AdAccountIosFourteenCampaignLimits(),
      'EDGE',
      AdAccountIosFourteenCampaignLimits::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createManagedPartnerAd(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'campaign_group_id' => 'unsigned int',
      'campaign_group_status' => 'campaign_group_status_enum',
      'conversion_domain' => 'string',
      'end_time' => 'unsigned int',
      'lifetime_budget' => 'unsigned int',
      'override_creative_text' => 'string',
      'override_targeting_countries' => 'list<string>',
      'product_set_id' => 'string',
      'start_time' => 'unsigned int',
      'use_marketplace_template' => 'bool',
      'use_seller_template' => 'bool',
    );
    $enums = array(
      'campaign_group_status_enum' => array(
        'ACTIVE',
        'ADSET_PAUSED',
        'ARCHIVED',
        'CAMPAIGN_PAUSED',
        'DELETED',
        'DISAPPROVED',
        'IN_PROCESS',
        'PAUSED',
        'PENDING_BILLING_INFO',
        'PENDING_REVIEW',
        'PREAPPROVED',
        'WITH_ISSUES',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/managed_partner_ads',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMatchedSearchApplications(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_incomplete_app' => 'bool',
      'app_store' => 'app_store_enum',
      'app_store_country' => 'string',
      'business_id' => 'string',
      'is_skadnetwork_search' => 'bool',
      'only_apps_with_permission' => 'bool',
      'query_term' => 'string',
    );
    $enums = array(
      'app_store_enum' => AdAccountMatchedSearchApplicationsEdgeDataAppStoreValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/matched_search_applications',
      new AdAccountMatchedSearchApplicationsEdgeData(),
      'EDGE',
      AdAccountMatchedSearchApplicationsEdgeData::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMaxBid(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/max_bid',
      new AdAccountMaxBid(),
      'EDGE',
      AdAccountMaxBid::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMinimumBudgets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'bid_amount' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/minimum_budgets',
      new MinimumBudget(),
      'EDGE',
      MinimumBudget::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOfflineConversionDataSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/offline_conversion_data_sets',
      new OfflineConversionDataSet(),
      'EDGE',
      OfflineConversionDataSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOnBehalfRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => BusinessOwnedObjectOnBehalfOfRequestStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/onbehalf_requests',
      new BusinessOwnedObjectOnBehalfOfRequest(),
      'EDGE',
      BusinessOwnedObjectOnBehalfOfRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProductAudience(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allowed_domains' => 'list<string>',
      'associated_audience_id' => 'unsigned int',
      'claim_objective' => 'claim_objective_enum',
      'content_type' => 'content_type_enum',
      'creation_params' => 'map',
      'description' => 'string',
      'enable_fetch_or_create' => 'bool',
      'event_source_group' => 'string',
      'event_sources' => 'list<map>',
      'exclusions' => 'list<Object>',
      'inclusions' => 'list<Object>',
      'is_snapshot' => 'bool',
      'is_value_based' => 'bool',
      'name' => 'string',
      'opt_out_link' => 'string',
      'parent_audience_id' => 'unsigned int',
      'product_set_id' => 'string',
      'rev_share_policy_id' => 'unsigned int',
      'subtype' => 'subtype_enum',
    );
    $enums = array(
      'claim_objective_enum' => AdAccountClaimObjectiveValues::getInstance()->getValues(),
      'content_type_enum' => AdAccountContentTypeValues::getInstance()->getValues(),
      'subtype_enum' => AdAccountSubtypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/product_audiences',
      new CustomAudience(),
      'EDGE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPromotePages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/promote_pages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPublisherBlockLists(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/publisher_block_lists',
      new PublisherBlockList(),
      'EDGE',
      PublisherBlockList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPublisherBlockList(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/publisher_block_lists',
      new PublisherBlockList(),
      'EDGE',
      PublisherBlockList::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReachEstimate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adgroup_ids' => 'list<string>',
      'caller_id' => 'string',
      'concepts' => 'string',
      'creative_action_spec' => 'string',
      'is_debug' => 'bool',
      'object_store_url' => 'string',
      'targeting_spec' => 'Targeting',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reachestimate',
      new AdAccountReachEstimate(),
      'EDGE',
      AdAccountReachEstimate::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReachFrequencyPredictions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reachfrequencypredictions',
      new ReachFrequencyPrediction(),
      'EDGE',
      ReachFrequencyPrediction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createReachFrequencyPrediction(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action' => 'action_enum',
      'ad_formats' => 'list<map>',
      'auction_entry_option_index' => 'unsigned int',
      'budget' => 'unsigned int',
      'buying_type' => 'buying_type_enum',
      'campaign_group_id' => 'string',
      'day_parting_schedule' => 'list<Object>',
      'deal_id' => 'string',
      'destination_id' => 'unsigned int',
      'destination_ids' => 'list<string>',
      'end_time' => 'unsigned int',
      'exceptions' => 'bool',
      'existing_campaign_id' => 'string',
      'expiration_time' => 'unsigned int',
      'frequency_cap' => 'unsigned int',
      'grp_buying' => 'bool',
      'impression' => 'unsigned int',
      'instream_packages' => 'list<instream_packages_enum>',
      'interval_frequency_cap_reset_period' => 'unsigned int',
      'is_bonus_media' => 'bool',
      'is_conversion_goal' => 'bool',
      'is_full_view' => 'bool',
      'is_higher_average_frequency' => 'bool',
      'is_reach_and_frequency_io_buying' => 'bool',
      'is_reserved_buying' => 'bool',
      'num_curve_points' => 'unsigned int',
      'objective' => 'string',
      'prediction_mode' => 'unsigned int',
      'reach' => 'unsigned int',
      'rf_prediction_id' => 'string',
      'rf_prediction_id_to_release' => 'string',
      'rf_prediction_id_to_share' => 'string',
      'start_time' => 'unsigned int',
      'stop_time' => 'unsigned int',
      'story_event_type' => 'unsigned int',
      'target_cpm' => 'unsigned int',
      'target_spec' => 'Targeting',
      'video_view_length_constraint' => 'unsigned int',
    );
    $enums = array(
      'action_enum' => ReachFrequencyPredictionActionValues::getInstance()->getValues(),
      'buying_type_enum' => ReachFrequencyPredictionBuyingTypeValues::getInstance()->getValues(),
      'instream_packages_enum' => ReachFrequencyPredictionInstreamPackagesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/reachfrequencypredictions',
      new ReachFrequencyPrediction(),
      'EDGE',
      ReachFrequencyPrediction::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSavedAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_id' => 'string',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/saved_audiences',
      new SavedAudience(),
      'EDGE',
      SavedAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSubscribedApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/subscribed_apps',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSubscribedApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/subscribed_apps',
      new AdAccountSubscribedApps(),
      'EDGE',
      AdAccountSubscribedApps::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSubscribedApp(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/subscribed_apps',
      new AdAccountSubscribedApps(),
      'EDGE',
      AdAccountSubscribedApps::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingBrowse(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'excluded_category' => 'string',
      'include_nodes' => 'bool',
      'is_exclusion' => 'bool',
      'limit_type' => 'limit_type_enum',
      'regulated_categories' => 'list<regulated_categories_enum>',
      'whitelisted_types' => 'list<whitelisted_types_enum>',
    );
    $enums = array(
      'limit_type_enum' => AdAccountTargetingUnifiedLimitTypeValues::getInstance()->getValues(),
      'regulated_categories_enum' => AdAccountTargetingUnifiedRegulatedCategoriesValues::getInstance()->getValues(),
      'whitelisted_types_enum' => AdAccountTargetingUnifiedWhitelistedTypesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/targetingbrowse',
      new AdAccountTargetingUnified(),
      'EDGE',
      AdAccountTargetingUnified::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingSearch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_only_fat_head_interests' => 'bool',
      'app_store' => 'app_store_enum',
      'countries' => 'list<string>',
      'is_exclusion' => 'bool',
      'limit_type' => 'limit_type_enum',
      'objective' => 'objective_enum',
      'promoted_object' => 'Object',
      'q' => 'string',
      'regulated_categories' => 'list<regulated_categories_enum>',
      'session_id' => 'unsigned int',
      'targeting_list' => 'list<Object>',
      'whitelisted_types' => 'list<whitelisted_types_enum>',
    );
    $enums = array(
      'app_store_enum' => AdAccountTargetingUnifiedAppStoreValues::getInstance()->getValues(),
      'limit_type_enum' => AdAccountTargetingUnifiedLimitTypeValues::getInstance()->getValues(),
      'objective_enum' => AdAccountTargetingUnifiedObjectiveValues::getInstance()->getValues(),
      'regulated_categories_enum' => AdAccountTargetingUnifiedRegulatedCategoriesValues::getInstance()->getValues(),
      'whitelisted_types_enum' => AdAccountTargetingUnifiedWhitelistedTypesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/targetingsearch',
      new AdAccountTargetingUnified(),
      'EDGE',
      AdAccountTargetingUnified::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingSentenceLines(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'discard_ages' => 'bool',
      'discard_placements' => 'bool',
      'hide_targeting_spec_from_return' => 'bool',
      'targeting_spec' => 'Targeting',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/targetingsentencelines',
      new TargetingSentenceLine(),
      'EDGE',
      TargetingSentenceLine::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingSuggestions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_store' => 'app_store_enum',
      'countries' => 'list<string>',
      'limit_type' => 'limit_type_enum',
      'mode' => 'mode_enum',
      'objective' => 'objective_enum',
      'objects' => 'Object',
      'regulated_categories' => 'list<regulated_categories_enum>',
      'session_id' => 'unsigned int',
      'targeting_list' => 'list<Object>',
      'whitelisted_types' => 'list<whitelisted_types_enum>',
    );
    $enums = array(
      'app_store_enum' => AdAccountTargetingUnifiedAppStoreValues::getInstance()->getValues(),
      'limit_type_enum' => AdAccountTargetingUnifiedLimitTypeValues::getInstance()->getValues(),
      'mode_enum' => AdAccountTargetingUnifiedModeValues::getInstance()->getValues(),
      'objective_enum' => AdAccountTargetingUnifiedObjectiveValues::getInstance()->getValues(),
      'regulated_categories_enum' => AdAccountTargetingUnifiedRegulatedCategoriesValues::getInstance()->getValues(),
      'whitelisted_types_enum' => AdAccountTargetingUnifiedWhitelistedTypesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/targetingsuggestions',
      new AdAccountTargetingUnified(),
      'EDGE',
      AdAccountTargetingUnified::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingValidation(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'id_list' => 'list<unsigned int>',
      'is_exclusion' => 'bool',
      'name_list' => 'list<string>',
      'targeting_list' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/targetingvalidation',
      new AdAccountTargetingUnified(),
      'EDGE',
      AdAccountTargetingUnified::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTracking(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tracking',
      new AdAccountTrackingData(),
      'EDGE',
      AdAccountTrackingData::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createTracking(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tracking_specs' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/tracking',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/users',
      new AdAccountUser(),
      'EDGE',
      AdAccountUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUsersOfAnyAudience(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'namespace' => 'string',
      'payload' => 'Object',
      'session' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/usersofanyaudience',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new AdAccount(),
      'NODE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'agency_client_declaration' => 'map',
      'attribution_spec' => 'list<Object>',
      'business_info' => 'map',
      'currency' => 'currency_enum',
      'end_advertiser' => 'string',
      'existing_customers' => 'list<string>',
      'is_notifications_enabled' => 'bool',
      'media_agency' => 'string',
      'name' => 'string',
      'partner' => 'string',
      'spend_cap' => 'float',
      'spend_cap_action' => 'string',
      'timezone_id' => 'unsigned int',
      'tos_accepted' => 'map',
    );
    $enums = array(
      'currency_enum' => AdAccountCurrencyValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AdAccount(),
      'NODE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
