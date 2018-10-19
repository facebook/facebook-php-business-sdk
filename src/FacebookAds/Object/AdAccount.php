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
use FacebookAds\Object\Values\AdAccountClaimObjectiveValues;
use FacebookAds\Object\Values\AdAccountContentTypeValues;
use FacebookAds\Object\Values\AdAccountCurrencyValues;
use FacebookAds\Object\Values\AdAccountDeliveryEstimateOptimizationGoalValues;
use FacebookAds\Object\Values\AdAccountMatchedSearchApplicationsEdgeDataAppStoreValues;
use FacebookAds\Object\Values\AdAccountPermittedTasksValues;
use FacebookAds\Object\Values\AdAccountSubtypeValues;
use FacebookAds\Object\Values\AdAccountTasksValues;
use FacebookAds\Object\Values\AdActivityCategoryValues;
use FacebookAds\Object\Values\AdAssetFeedAdFormatsValues;
use FacebookAds\Object\Values\AdAssetFeedCallToActionTypeValues;
use FacebookAds\Object\Values\AdAssetFeedCallToActionTypesValues;
use FacebookAds\Object\Values\AdAssetFeedOptimizationTypeValues;
use FacebookAds\Object\Values\AdAsyncRequestSetNotificationModeValues;
use FacebookAds\Object\Values\AdCreativeApplinkTreatmentValues;
use FacebookAds\Object\Values\AdCreativeAuthorizationCategoryValues;
use FacebookAds\Object\Values\AdCreativeCategorizationCriteriaValues;
use FacebookAds\Object\Values\AdCreativeCategoryMediaSourceValues;
use FacebookAds\Object\Values\AdCreativeDynamicAdVoiceValues;
use FacebookAds\Object\Values\AdCreativeOperatorValues;
use FacebookAds\Object\Values\AdDatePresetValues;
use FacebookAds\Object\Values\AdExecutionOptionsValues;
use FacebookAds\Object\Values\AdOperatorValues;
use FacebookAds\Object\Values\AdPlacePageSetLocationTypesValues;
use FacebookAds\Object\Values\AdPreviewAdFormatValues;
use FacebookAds\Object\Values\AdPreviewRenderTypeValues;
use FacebookAds\Object\Values\AdReportSpecActionsGroupByValues;
use FacebookAds\Object\Values\AdReportSpecCreationSourceValues;
use FacebookAds\Object\Values\AdReportSpecDatePresetValues;
use FacebookAds\Object\Values\AdReportSpecFormatValues;
use FacebookAds\Object\Values\AdRuleStatusValues;
use FacebookAds\Object\Values\AdSetBidStrategyValues;
use FacebookAds\Object\Values\AdSetBillingEventValues;
use FacebookAds\Object\Values\AdSetDatePresetValues;
use FacebookAds\Object\Values\AdSetDestinationTypeValues;
use FacebookAds\Object\Values\AdSetEffectiveStatusValues;
use FacebookAds\Object\Values\AdSetExecutionOptionsValues;
use FacebookAds\Object\Values\AdSetFullFunnelExplorationModeValues;
use FacebookAds\Object\Values\AdSetOperatorValues;
use FacebookAds\Object\Values\AdSetOptimizationGoalValues;
use FacebookAds\Object\Values\AdSetStatusValues;
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
use FacebookAds\Object\Values\CampaignBidStrategyValues;
use FacebookAds\Object\Values\CampaignDatePresetValues;
use FacebookAds\Object\Values\CampaignEffectiveStatusValues;
use FacebookAds\Object\Values\CampaignExecutionOptionsValues;
use FacebookAds\Object\Values\CampaignObjectiveValues;
use FacebookAds\Object\Values\CampaignOperatorValues;
use FacebookAds\Object\Values\CampaignStatusValues;
use FacebookAds\Object\Values\CustomAudienceClaimObjectiveValues;
use FacebookAds\Object\Values\CustomAudienceContentTypeValues;
use FacebookAds\Object\Values\CustomAudienceCustomerFileSourceValues;
use FacebookAds\Object\Values\CustomAudienceSubtypeValues;
use FacebookAds\Object\Values\CustomConversionCustomEventTypeValues;
use FacebookAds\Object\Values\DirectDealStatusValues;
use FacebookAds\Object\Values\PartnerCategoryPrivateOrPublicValues;
use FacebookAds\Object\Values\PartnerIntegrationLinkedPartnerValues;
use FacebookAds\Object\Values\ReachEstimateOptimizeForValues;
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
    $ref_enums['PermittedTasks'] = AdAccountPermittedTasksValues::getInstance()->getValues();
    $ref_enums['Tasks'] = AdAccountTasksValues::getInstance()->getValues();
    $ref_enums['ClaimObjective'] = AdAccountClaimObjectiveValues::getInstance()->getValues();
    $ref_enums['ContentType'] = AdAccountContentTypeValues::getInstance()->getValues();
    $ref_enums['Subtype'] = AdAccountSubtypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getActivities(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'after' => 'string',
      'limit' => 'int',
      'since' => 'datetime',
      'category' => 'category_enum',
      'until' => 'datetime',
      'uid' => 'int',
      'business_id' => 'string',
      'oid' => 'string',
      'extra_oids' => 'list<string>',
      'add_children' => 'bool',
    );
    $enums = array(
      'category_enum' => AdActivityCategoryValues::getInstance()->getValues(),
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
      'name' => 'string',
      'location_types' => 'list<location_types_enum>',
      'parent_page' => 'string',
    );
    $enums = array(
      'location_types_enum' => AdPlacePageSetLocationTypesValues::getInstance()->getValues(),
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

  public function getAdAssetFeeds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adasset_feeds',
      new AdAssetFeed(),
      'EDGE',
      AdAssetFeed::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdAssetFeed(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'images' => 'list<Object>',
      'videos' => 'list<Object>',
      'bodies' => 'list<Object>',
      'call_to_action_types' => 'list<call_to_action_types_enum>',
      'descriptions' => 'list<Object>',
      'link_urls' => 'list<Object>',
      'titles' => 'list<Object>',
      'captions' => 'list<Object>',
      'ad_formats' => 'list<ad_formats_enum>',
      'groups' => 'list<Object>',
      'target_rules' => 'list<Object>',
      'asset_customization_rules' => 'list<Object>',
      'optimization_type' => 'optimization_type_enum',
      'call_to_actions' => 'list<Object>',
      'autotranslate' => 'list<string>',
      'additional_data' => 'map',
    );
    $enums = array(
      'call_to_action_types_enum' => AdAssetFeedCallToActionTypesValues::getInstance()->getValues(),
      'ad_formats_enum' => AdAssetFeedAdFormatsValues::getInstance()->getValues(),
      'optimization_type_enum' => AdAssetFeedOptimizationTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adasset_feeds',
      new AdAssetFeed(),
      'EDGE',
      AdAssetFeed::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdContracts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adcontracts',
      new AdContract(),
      'EDGE',
      AdContract::getFieldsEnum()->getValues(),
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
      'asset_feed_id' => 'string',
      'asset_feed_spec' => 'Object',
      'authorization_category' => 'authorization_category_enum',
      'is_dco_internal' => 'bool',
      'body' => 'string',
      'branded_content_sponsor_page_id' => 'string',
      'bundle_folder_id' => 'string',
      'categorization_criteria' => 'categorization_criteria_enum',
      'category_media_source' => 'category_media_source_enum',
      'call_to_action' => 'Object',
      'dynamic_ad_voice' => 'dynamic_ad_voice_enum',
      'destination_set_id' => 'Object',
      'enable_direct_install' => 'bool',
      'enable_launch_instant_app' => 'bool',
      'image_crops' => 'map',
      'image_file' => 'string',
      'image_hash' => 'string',
      'image_url' => 'string',
      'instagram_actor_id' => 'string',
      'instagram_permalink_url' => 'string',
      'instagram_story_id' => 'unsigned int',
      'link_og_id' => 'string',
      'link_url' => 'string',
      'name' => 'string',
      'object_id' => 'unsigned int',
      'object_story_id' => 'string',
      'object_type' => 'string',
      'object_url' => 'string',
      'platform_customizations' => 'Object',
      'playable_asset_id' => 'string',
      'product_set_id' => 'string',
      'recommender_settings' => 'map',
      'messenger_sponsored_message' => 'string',
      'template_url' => 'string',
      'template_url_spec' => 'Object',
      'thumbnail_url' => 'string',
      'title' => 'string',
      'url_tags' => 'string',
      'use_page_actor_override' => 'bool',
      'object_story_spec' => 'AdCreativeObjectStorySpec',
    );
    $enums = array(
      'applink_treatment_enum' => AdCreativeApplinkTreatmentValues::getInstance()->getValues(),
      'authorization_category_enum' => AdCreativeAuthorizationCategoryValues::getInstance()->getValues(),
      'categorization_criteria_enum' => AdCreativeCategorizationCriteriaValues::getInstance()->getValues(),
      'category_media_source_enum' => AdCreativeCategoryMediaSourceValues::getInstance()->getValues(),
      'dynamic_ad_voice_enum' => AdCreativeDynamicAdVoiceValues::getInstance()->getValues(),
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

  public function createAdCreativesFromMockup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'mockup_id' => 'string',
      'page_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adcreatives_from_mockups',
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
      'hashes' => 'list<string>',
      'minwidth' => 'unsigned int',
      'minheight' => 'unsigned int',
      'name' => 'string',
      'biz_tag_id' => 'unsigned int',
      'business_id' => 'string',
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
      'zipbytes' => 'Object',
      'bytes' => 'Object',
      'copy_from' => 'Object',
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

  public function getAdLanguageAssets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adlanguage_assets',
      new AdAssetFeed(),
      'EDGE',
      AdAssetFeed::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdLanguageAsset(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'image' => 'Object',
      'video' => 'Object',
      'call_to_action_type' => 'call_to_action_type_enum',
      'bodies' => 'list<Object>',
      'descriptions' => 'list<Object>',
      'titles' => 'list<Object>',
      'link_urls' => 'list<Object>',
      'default_language' => 'string',
    );
    $enums = array(
      'call_to_action_type_enum' => AdAssetFeedCallToActionTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlanguage_assets',
      new AdAssetFeed(),
      'EDGE',
      AdAssetFeed::getFieldsEnum()->getValues(),
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
      'name' => 'string',
      'source' => 'file',
      'source_url' => 'string',
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

  public function deleteAdReportRuns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/adreportruns',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdReportRuns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adreportruns',
      new AdReportRun(),
      'EDGE',
      AdReportRun::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdReportSchedules(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adreportschedules',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdReportSchedule(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'user_columns' => 'list<string>',
      'user_attribution_windows' => 'list<string>',
      'builtin_column_set' => 'builtin_column_set_enum',
      'normalized_filter' => 'list<Object>',
      'user_filter' => 'list<Object>',
      'sort' => 'list<Object>',
      'breakdowns' => 'list<string>',
      'insights_section' => 'Object',
      'level' => 'level_enum',
      'date_preset' => 'date_preset_enum',
      'date_interval' => 'Object',
      'format_version' => 'unsigned int',
      'creation_source' => 'creation_source_enum',
      'actions_group_by' => 'list<actions_group_by_enum>',
      'custom_column_set_id' => 'string',
      'data_columns' => 'list<string>',
      'emails' => 'list<string>',
      'export_columns' => 'Object',
      'filters' => 'list<Object>',
      'schedule_frequency' => 'schedule_frequency_enum',
      'sort_by' => 'string',
      'sort_dir' => 'string',
      'start_date' => 'Object',
      'status' => 'status_enum',
      'subscribers' => 'list<int>',
      'time_increment' => 'string',
    );
    $enums = array(
      'builtin_column_set_enum' => array(
        '',
        'APP_ENGAGEMENT',
        'AUDIENCE_DIRECT',
        'BIDDING_AND_OPTIMIZATION',
        'CAROUSEL_ENGAGEMENT',
        'CROSS_DEVICE',
        'DELIVERY',
        'ENGAGEMENT',
        'HOUSEHOLD',
        'MESSAGING_ENGAGEMENT',
        'MESSENGER',
        'OFFLINE_CONVERSIONS',
        'PERFORMANCE',
        'PERFORMANCE_LEGACY',
        'TARGETING_AND_CREATIVE',
        'VIDEO_ENGAGEMENT',
        'VALIDATION_VIEW',
      ),
      'level_enum' => array(
        'politicalad',
        'ad',
        'adgroup',
        'campaign',
        'campaign_group',
        'account',
      ),
      'date_preset_enum' => array(
        'today',
        'yesterday',
        'this_month',
        'last_month',
        'this_quarter',
        'lifetime',
        'last_3d',
        'last_7d',
        'last_14d',
        'last_28d',
        'last_30d',
        'last_90d',
        'last_week_mon_sun',
        'last_week_sun_sat',
        'last_quarter',
        'last_year',
        'this_week_mon_today',
        'this_week_sun_today',
        'this_year',
      ),
      'creation_source_enum' => array(
        'adsManagerReporting',
        'newAdsManager',
        'adsExcelAddin',
      ),
      'actions_group_by_enum' => array(
        'action_canvas_component_id',
        'action_canvas_component_name',
        'action_carousel_card_id',
        'action_carousel_card_name',
        'action_destination',
        'action_device',
        'action_event_channel',
        'action_target_id',
        'action_type',
        'action_video_sound',
        'action_video_type',
      ),
      'schedule_frequency_enum' => array(
        'daily',
        'weekly',
        'monthly',
      ),
      'status_enum' => array(
        'Active',
        'Paused',
        'Deleted',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adreportschedules',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdReportSpec(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'time_ranges' => 'Object',
      'data_columns' => 'list<string>',
      'actions_group_by' => 'list<actions_group_by_enum>',
      'filters' => 'list<Object>',
      'sort_by' => 'string',
      'sort_dir' => 'string',
      'time_increment' => 'string',
      'time_interval' => 'Object',
      'date_preset' => 'date_preset_enum',
      'format' => 'format_enum',
      'export_columns' => 'Object',
      'report_run_id' => 'string',
      'name' => 'string',
      'user_report' => 'bool',
      'business_id' => 'string',
      'limit' => 'int',
      'bypass_async' => 'bool',
      'report_schedule_id' => 'string',
      'insights_section' => 'Object',
      'creation_source' => 'creation_source_enum',
      'format_version' => 'unsigned int',
    );
    $enums = array(
      'actions_group_by_enum' => AdReportSpecActionsGroupByValues::getInstance()->getValues(),
      'date_preset_enum' => AdReportSpecDatePresetValues::getInstance()->getValues(),
      'format_enum' => AdReportSpecFormatValues::getInstance()->getValues(),
      'creation_source_enum' => AdReportSpecCreationSourceValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adreportspecs',
      new AdReportSpec(),
      'EDGE',
      AdReportSpec::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdRulesHistory(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'object_id' => 'string',
      'action' => 'action_enum',
      'hide_no_changes' => 'bool',
    );
    $enums = array(
      'action_enum' => AdAccountAdRulesHistoryActionValues::getInstance()->getValues(),
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
      'schedule_spec' => 'Object',
      'name' => 'string',
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

  public function deleteAds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'delete_strategy' => 'delete_strategy_enum',
      'object_count' => 'int',
      'before_date' => 'datetime',
    );
    $enums = array(
      'delete_strategy_enum' => array(
        'DELETE_ANY',
        'DELETE_OLDEST',
        'DELETE_ARCHIVED_BEFORE',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/ads',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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
      'include_deleted' => 'bool',
      'time_range' => 'Object',
      'updated_since' => 'int',
      'ad_draft_id' => 'string',
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
      'audience_id' => 'string',
      'adset_id' => 'unsigned int',
      'date_format' => 'string',
      'include_demolink_hashes' => 'bool',
      'creative' => 'AdCreative',
      'name' => 'string',
      'status' => 'status_enum',
      'priority' => 'unsigned int',
      'tracking_specs' => 'Object',
      'social_prefs' => 'list<string>',
      'display_sequence' => 'unsigned int',
      'engagement_audience' => 'bool',
      'social_required' => 'bool',
      'adset_spec' => 'AdSet',
      'draft_adgroup_id' => 'string',
      'execution_options' => 'list<execution_options_enum>',
      'adlabels' => 'list<Object>',
      'bid_amount' => 'int',
      'source_ad_id' => 'string',
    );
    $enums = array(
      'status_enum' => AdStatusValues::getInstance()->getValues(),
      'execution_options_enum' => AdExecutionOptionsValues::getInstance()->getValues(),
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

  public function deleteAdSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'delete_strategy' => 'delete_strategy_enum',
      'object_count' => 'int',
      'before_date' => 'datetime',
    );
    $enums = array(
      'delete_strategy_enum' => array(
        'DELETE_ANY',
        'DELETE_OLDEST',
        'DELETE_ARCHIVED_BEFORE',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/adsets',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdSets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'effective_status' => 'list<effective_status_enum>',
      'date_preset' => 'date_preset_enum',
      'include_deleted' => 'bool',
      'is_completed' => 'bool',
      'time_range' => 'Object',
      'ad_draft_id' => 'string',
    );
    $enums = array(
      'effective_status_enum' => AdSetEffectiveStatusValues::getInstance()->getValues(),
      'date_preset_enum' => AdSetDatePresetValues::getInstance()->getValues(),
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
      'ad_keywords' => 'Object',
      'adlabels' => 'list<Object>',
      'bid_amount' => 'int',
      'bid_adjustments' => 'Object',
      'bid_strategy' => 'bid_strategy_enum',
      'billing_event' => 'billing_event_enum',
      'campaign_id' => 'string',
      'campaign_spec' => 'Object',
      'adset_schedule' => 'list<Object>',
      'status' => 'status_enum',
      'creative_sequence' => 'list<string>',
      'daily_budget' => 'unsigned int',
      'daily_imps' => 'unsigned int',
      'daily_min_spend_target' => 'unsigned int',
      'daily_spend_cap' => 'unsigned int',
      'date_format' => 'string',
      'destination_type' => 'destination_type_enum',
      'end_time' => 'datetime',
      'execution_options' => 'list<execution_options_enum>',
      'frequency_cap' => 'unsigned int',
      'frequency_cap_reset_period' => 'unsigned int',
      'frequency_control_specs' => 'list<Object>',
      'is_autobid' => 'bool',
      'is_average_price_pacing' => 'bool',
      'is_dynamic_creative' => 'bool',
      'is_dynamic_creative_optimization' => 'bool',
      'lifetime_budget' => 'unsigned int',
      'lifetime_frequency_cap' => 'unsigned int',
      'lifetime_imps' => 'unsigned int',
      'lifetime_min_spend_target' => 'unsigned int',
      'lifetime_spend_cap' => 'unsigned int',
      'line_number' => 'unsigned int',
      'name' => 'string',
      'optimization_goal' => 'optimization_goal_enum',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'Object',
      'rb_prediction_id' => 'string',
      'rf_prediction_id' => 'string',
      'source_adset_id' => 'string',
      'start_time' => 'datetime',
      'targeting' => 'Targeting',
      'time_based_ad_rotation_id_blocks' => 'list<list<unsigned int>>',
      'time_based_ad_rotation_intervals' => 'list<unsigned int>',
      'time_start' => 'datetime',
      'time_stop' => 'datetime',
      'topline_id' => 'string',
      'upstream_events' => 'map',
      'full_funnel_exploration_mode' => 'full_funnel_exploration_mode_enum',
      'attribution_spec' => 'list<map>',
    );
    $enums = array(
      'bid_strategy_enum' => AdSetBidStrategyValues::getInstance()->getValues(),
      'billing_event_enum' => AdSetBillingEventValues::getInstance()->getValues(),
      'status_enum' => AdSetStatusValues::getInstance()->getValues(),
      'destination_type_enum' => AdSetDestinationTypeValues::getInstance()->getValues(),
      'execution_options_enum' => AdSetExecutionOptionsValues::getInstance()->getValues(),
      'optimization_goal_enum' => AdSetOptimizationGoalValues::getInstance()->getValues(),
      'full_funnel_exploration_mode_enum' => AdSetFullFunnelExplorationModeValues::getInstance()->getValues(),
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

  public function getAdToplineDetails(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adtoplinedetails',
      new AdToplineDetail(),
      'EDGE',
      AdToplineDetail::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdTopLines(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adtoplines',
      new AdTopline(),
      'EDGE',
      AdTopline::getFieldsEnum()->getValues(),
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

  public function getAdVideos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'title' => 'string',
      'minlength' => 'unsigned int',
      'maxlength' => 'unsigned int',
      'minheight' => 'unsigned int',
      'maxheight' => 'unsigned int',
      'minwidth' => 'unsigned int',
      'maxwidth' => 'unsigned int',
      'min_aspect_ratio' => 'float',
      'max_aspect_ratio' => 'float',
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
      'title' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'time_since_original_post' => 'unsigned int',
      'file_url' => 'string',
      'composer_session_id' => 'string',
      'waterfall_id' => 'string',
      'og_action_type_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_icon_id' => 'string',
      'og_suggestion_mechanism' => 'string',
      'manual_privacy' => 'bool',
      'is_explicit_share' => 'bool',
      'thumb' => 'file',
      'spherical' => 'bool',
      'original_projection_type' => 'original_projection_type_enum',
      'initial_heading' => 'unsigned int',
      'initial_pitch' => 'unsigned int',
      'fov' => 'unsigned int',
      'original_fov' => 'unsigned int',
      'fisheye_video_cropped' => 'bool',
      'front_z_rotation' => 'float',
      'guide_enabled' => 'bool',
      'guide' => 'list<list<unsigned int>>',
      'audio_story_wave_animation_handle' => 'string',
      'adaptive_type' => 'string',
      'animated_effect_id' => 'unsigned int',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'formatting' => 'formatting_enum',
      'fun_fact_prompt_id' => 'string',
      'fun_fact_toastee_id' => 'unsigned int',
      'is_group_linking_post' => 'bool',
      'has_nickname' => 'bool',
      'holiday_card' => 'string',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'location_source_id' => 'string',
      'description' => 'string',
      'offer_like_post_id' => 'string',
      'publish_event_id' => 'unsigned int',
      'react_mode_metadata' => 'string',
      'sales_promo_id' => 'unsigned int',
      'text_format_metadata' => 'string',
      'throwback_camera_roll_media' => 'string',
      'video_start_time_ms' => 'unsigned int',
      'application_id' => 'string',
      'upload_phase' => 'upload_phase_enum',
      'file_size' => 'unsigned int',
      'start_offset' => 'unsigned int',
      'end_offset' => 'unsigned int',
      'video_file_chunk' => 'string',
      'fbuploader_video_file_chunk' => 'string',
      'upload_session_id' => 'string',
      'is_voice_clip' => 'bool',
      'attribution_app_id' => 'string',
      'content_category' => 'content_category_enum',
      'embeddable' => 'bool',
      'slideshow_spec' => 'map',
      'upload_setting_properties' => 'string',
      'transcode_setting_properties' => 'string',
      'container_type' => 'container_type_enum',
      'referenced_sticker_id' => 'string',
      'replace_video_id' => 'string',
      'swap_mode' => 'swap_mode_enum',
      'name' => 'string',
      'chunk_session_id' => 'string',
    );
    $enums = array(
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
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

  public function createAgency(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
      'permitted_tasks' => 'list<permitted_tasks_enum>',
    );
    $enums = array(
      'permitted_tasks_enum' => AdAccountPermittedTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/agencies',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
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
      'user' => 'int',
      'tasks' => 'list<tasks_enum>',
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
      'name' => 'string',
      'adbatch' => 'list<Object>',
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
      'notification_uri' => 'string',
      'notification_mode' => 'notification_mode_enum',
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

  public function createAudienceReplace(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'session' => 'Object',
      'payload' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/audiencereplace',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBatchReplace(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'payload' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/batchreplace',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBatchUpload(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'payload' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/batchupload',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function getBrandAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/brand_audiences',
      new BrandAudience(),
      'EDGE',
      BrandAudience::getFieldsEnum()->getValues(),
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

  public function getBusinessActivities(array $fields = array(), array $params = array(), $pending = false) {
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
      '/business_activities',
      new BusinessActivityLogEvent(),
      'EDGE',
      BusinessActivityLogEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessProjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/businessprojects',
      new BusinessProject(),
      'EDGE',
      BusinessProject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteCampaigns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'delete_strategy' => 'delete_strategy_enum',
      'object_count' => 'int',
      'before_date' => 'datetime',
    );
    $enums = array(
      'delete_strategy_enum' => array(
        'DELETE_ANY',
        'DELETE_OLDEST',
        'DELETE_ARCHIVED_BEFORE',
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
      'effective_status' => 'list<effective_status_enum>',
      'date_preset' => 'date_preset_enum',
      'is_completed' => 'bool',
    );
    $enums = array(
      'effective_status_enum' => CampaignEffectiveStatusValues::getInstance()->getValues(),
      'date_preset_enum' => CampaignDatePresetValues::getInstance()->getValues(),
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
      'name' => 'string',
      'objective' => 'objective_enum',
      'status' => 'status_enum',
      'bid_strategy' => 'bid_strategy_enum',
      'budget_rebalance_flag' => 'bool',
      'buying_type' => 'string',
      'daily_budget' => 'unsigned int',
      'lifetime_budget' => 'unsigned int',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'Object',
      'topline_id' => 'string',
      'spend_cap' => 'unsigned int',
      'execution_options' => 'list<execution_options_enum>',
      'upstream_events' => 'map',
      'adlabels' => 'list<Object>',
      'source_campaign_id' => 'string',
      'iterative_split_test_configs' => 'list<Object>',
      'kpi_custom_conversion_id' => 'string',
      'kpi_type' => 'Object',
      'is_autobid' => 'bool',
      'is_average_price_pacing' => 'bool',
    );
    $enums = array(
      'objective_enum' => CampaignObjectiveValues::getInstance()->getValues(),
      'status_enum' => CampaignStatusValues::getInstance()->getValues(),
      'bid_strategy_enum' => CampaignBidStrategyValues::getInstance()->getValues(),
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
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

  public function getContextualTargetingBrowse(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/contextual_targeting_browse',
      new AdAccountContextualTargeting(),
      'EDGE',
      AdAccountContextualTargeting::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCoupon(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'coupon_code' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/coupons',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomAudienceLimits(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/custom_audience_limits',
      new AdAccountCustomAudienceLimits(),
      'EDGE',
      AdAccountCustomAudienceLimits::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCustomAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'pixel_id' => 'string',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'business_id' => 'string',
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
      'creation_params' => 'map',
      'description' => 'string',
      'name' => 'string',
      'opt_out_link' => 'string',
      'parent_audience_id' => 'unsigned int',
      'subtype' => 'subtype_enum',
      'seed_audience' => 'unsigned int',
      'tags' => 'list<string>',
      'associated_audience_id' => 'unsigned int',
      'is_household' => 'bool',
      'is_household_exclusion' => 'bool',
      'is_value_based' => 'bool',
      'allowed_domains' => 'list<string>',
      'is_snapshot' => 'bool',
      'lookalike_spec' => 'string',
      'retention_days' => 'unsigned int',
      'customer_file_source' => 'customer_file_source_enum',
      'rev_share_policy_id' => 'unsigned int',
      'partner_reference_key' => 'string',
      'rule' => 'string',
      'prefill' => 'bool',
      'pixel_id' => 'string',
      'rule_aggregation' => 'string',
      'inclusions' => 'list<Object>',
      'exclusions' => 'list<Object>',
      'countries' => 'string',
      'origin_audience_id' => 'string',
      'details' => 'string',
      'source' => 'string',
      'isPrivate' => 'bool',
      'additionalMetadata' => 'string',
      'minAge' => 'unsigned int',
      'maxAge' => 'unsigned int',
      'expectedSize' => 'unsigned int',
      'gender' => 'string',
      'partnerID' => 'string',
      'accountID' => 'string',
      'claim_objective' => 'claim_objective_enum',
      'content_type' => 'content_type_enum',
      'event_source_group' => 'string',
      'product_set_id' => 'string',
      'event_sources' => 'list<map>',
      'video_group_ids' => 'list<string>',
      'study_spec' => 'Object',
      'list_of_accounts' => 'list<unsigned int>',
      'dataset_id' => 'string',
    );
    $enums = array(
      'subtype_enum' => CustomAudienceSubtypeValues::getInstance()->getValues(),
      'customer_file_source_enum' => CustomAudienceCustomerFileSourceValues::getInstance()->getValues(),
      'claim_objective_enum' => CustomAudienceClaimObjectiveValues::getInstance()->getValues(),
      'content_type_enum' => CustomAudienceContentTypeValues::getInstance()->getValues(),
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
      'name' => 'string',
      'description' => 'string',
      'event_source_id' => 'string',
      'rule' => 'string',
      'default_conversion_value' => 'float',
      'custom_event_type' => 'custom_event_type_enum',
      'advanced_rule' => 'string',
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

  public function createDeactivate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/deactivate',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDeliveryEstimate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'targeting_spec' => 'Targeting',
      'optimization_goal' => 'optimization_goal_enum',
      'promoted_object' => 'Object',
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

  public function getDirectDeals(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'status' => 'status_enum',
    );
    $enums = array(
      'status_enum' => DirectDealStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/direct_deals',
      new DirectDeal(),
      'EDGE',
      DirectDeal::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createDirectDealsTo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/direct_deals_tos',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createEmailImport(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'third_party_data' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/emailimport',
      new EmailImport(),
      'EDGE',
      EmailImport::getFieldsEnum()->getValues(),
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
      'dynamic_creative_spec' => 'Object',
      'interactive' => 'bool',
      'post' => 'Object',
      'height' => 'unsigned int',
      'width' => 'unsigned int',
      'place_page_id' => 'int',
      'product_item_ids' => 'list<string>',
      'start_date' => 'datetime',
      'end_date' => 'datetime',
      'locale' => 'string',
      'render_type' => 'render_type_enum',
      'creative' => 'AdCreative',
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

  public function getInsights(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'default_summary' => 'bool',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'summary' => 'list<string>',
      'sort' => 'list<string>',
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
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
      'default_summary' => 'bool',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'summary' => 'list<string>',
      'sort' => 'list<string>',
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'summary_action_breakdowns' => 'list<summary_action_breakdowns_enum>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
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

  public function getLeadGenForms(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'query' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leadgen_forms',
      new LeadgenForm(),
      'EDGE',
      LeadgenForm::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLocationCluster(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'locations' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/locationclusters',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getMatchedSearchApplications(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_store' => 'app_store_enum',
      'app_store_country' => 'string',
      'business_id' => 'Object',
      'query_term' => 'string',
      'allow_incomplete_app' => 'bool',
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

  public function createMockup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'mockup_access_token' => 'string',
      'source_mockup_id' => 'string',
      'page_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/mockups',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function getPartnerIntegrations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/partner_integrations',
      new PartnerIntegrationLinked(),
      'EDGE',
      PartnerIntegrationLinked::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPartnerIntegration(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'external_id' => 'string',
      'gtm_account_id' => 'string',
      'gtm_container_id' => 'string',
      'name' => 'string',
      'partner' => 'partner_enum',
    );
    $enums = array(
      'partner_enum' => PartnerIntegrationLinkedPartnerValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/partner_integrations',
      new PartnerIntegrationLinked(),
      'EDGE',
      PartnerIntegrationLinked::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPartnerCategories(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'targeting_type' => 'string',
      'private_or_public' => 'private_or_public_enum',
      'hide_pc' => 'bool',
      'limit' => 'unsigned int',
      'is_exclusion' => 'bool',
    );
    $enums = array(
      'private_or_public_enum' => PartnerCategoryPrivateOrPublicValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/partnercategories',
      new PartnerCategory(),
      'EDGE',
      PartnerCategory::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPartnerDatum(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'upload_id' => 'unsigned int',
      'type' => 'string',
      'start_new_upload' => 'bool',
      'total_expected' => 'unsigned int',
      'upload_metadata' => 'string',
      'upload_complete' => 'bool',
      'ignore_count_check' => 'bool',
      'abandon_upload' => 'bool',
      'payload' => 'list<string>',
      'payload_type' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/partnerdata',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPartnerRequest(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'category_ids' => 'list<string>',
      'account_ids' => 'list<int>',
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => array(
        'SHARE_PC',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/partnerrequests',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPartners(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/partners',
      new AdsDataPartner(),
      'EDGE',
      AdsDataPartner::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createProductAudience(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'creation_params' => 'map',
      'description' => 'string',
      'name' => 'string',
      'opt_out_link' => 'string',
      'parent_audience_id' => 'unsigned int',
      'subtype' => 'subtype_enum',
      'seed_audience' => 'unsigned int',
      'tags' => 'list<string>',
      'associated_audience_id' => 'unsigned int',
      'is_household' => 'bool',
      'is_household_exclusion' => 'bool',
      'is_value_based' => 'bool',
      'allowed_domains' => 'list<string>',
      'is_snapshot' => 'bool',
      'claim_objective' => 'claim_objective_enum',
      'content_type' => 'content_type_enum',
      'event_source_group' => 'string',
      'product_set_id' => 'string',
      'rev_share_policy_id' => 'unsigned int',
      'event_sources' => 'list<map>',
      'inclusions' => 'list<Object>',
      'exclusions' => 'list<Object>',
    );
    $enums = array(
      'subtype_enum' => AdAccountSubtypeValues::getInstance()->getValues(),
      'claim_objective_enum' => AdAccountClaimObjectiveValues::getInstance()->getValues(),
      'content_type_enum' => AdAccountContentTypeValues::getInstance()->getValues(),
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
      'targeting_spec' => 'Targeting',
      'currency' => 'string',
      'is_debug' => 'bool',
      'optimize_for' => 'optimize_for_enum',
      'daily_budget' => 'float',
      'creative_action_spec' => 'string',
      'adgroup_ids' => 'list<string>',
      'concepts' => 'string',
      'caller_id' => 'string',
      'object_store_url' => 'string',
    );
    $enums = array(
      'optimize_for_enum' => ReachEstimateOptimizeForValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reachestimate',
      new ReachEstimate(),
      'EDGE',
      ReachEstimate::getFieldsEnum()->getValues(),
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
      'target_spec' => 'Targeting',
      'start_time' => 'unsigned int',
      'stop_time' => 'unsigned int',
      'end_time' => 'unsigned int',
      'reach' => 'unsigned int',
      'impression' => 'unsigned int',
      'frequency_cap' => 'unsigned int',
      'budget' => 'unsigned int',
      'prediction_mode' => 'unsigned int',
      'destination_id' => 'unsigned int',
      'destination_ids' => 'list<string>',
      'story_event_type' => 'unsigned int',
      'day_parting_schedule' => 'list<Object>',
      'target_cpm' => 'unsigned int',
      'buying_type' => 'buying_type_enum',
      'objective' => 'string',
      'rf_prediction_id' => 'string',
      'rf_prediction_id_to_release' => 'string',
      'rf_prediction_id_to_share' => 'string',
      'num_curve_points' => 'unsigned int',
      'interval_frequency_cap_reset_period' => 'unsigned int',
      'campaign_group_id' => 'string',
      'grp_buying' => 'bool',
      'instream_packages' => 'list<instream_packages_enum>',
      'is_bonus_media' => 'bool',
      'is_conversion_goal' => 'bool',
      'is_full_view' => 'bool',
      'is_reach_and_frequency_io_buying' => 'bool',
      'is_reserved_buying' => 'bool',
      'expiration_time' => 'unsigned int',
      'existing_campaign_id' => 'string',
      'video_view_length_constraint' => 'unsigned int',
      'auction_entry_option_index' => 'unsigned int',
      'exceptions' => 'bool',
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

  public function getReferral(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/referral',
      new Referral(),
      'EDGE',
      Referral::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createReferral(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'invite_limit' => 'unsigned int',
      'messenger_cta' => 'string',
      'messenger_promotion_text' => 'string',
      'namespace' => 'unsigned int',
      'need_promo_code' => 'bool',
      'offer_origin' => 'string',
      'promotion_text' => 'string',
      'receiver_benefits_text' => 'string',
      'referral_link_uri' => 'Object',
      'sender_benefits_text' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/referral',
      new Referral(),
      'EDGE',
      Referral::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createReportStat(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'time_ranges' => 'Object',
      'data_columns' => 'list<string>',
      'actions_group_by' => 'list<actions_group_by_enum>',
      'filters' => 'list<Object>',
      'sort_by' => 'string',
      'sort_dir' => 'string',
      'time_increment' => 'string',
      'time_interval' => 'Object',
      'date_preset' => 'date_preset_enum',
      'format' => 'format_enum',
      'export_columns' => 'Object',
      'report_run_id' => 'string',
      'name' => 'string',
      'user_report' => 'bool',
      'business_id' => 'string',
      'limit' => 'int',
      'bypass_async' => 'bool',
      'summary' => 'bool',
    );
    $enums = array(
      'actions_group_by_enum' => array(
        'action_canvas_component_id',
        'action_canvas_component_name',
        'action_carousel_card_id',
        'action_carousel_card_name',
        'action_destination',
        'action_device',
        'action_event_channel',
        'action_target_id',
        'action_type',
        'action_video_sound',
        'action_video_type',
      ),
      'date_preset_enum' => array(
        'today',
        'yesterday',
        'this_month',
        'last_month',
        'this_quarter',
        'lifetime',
        'last_3d',
        'last_7d',
        'last_14d',
        'last_28d',
        'last_30d',
        'last_90d',
        'last_week_mon_sun',
        'last_week_sun_sat',
        'last_quarter',
        'last_year',
        'this_week_mon_today',
        'this_week_sun_today',
        'this_year',
      ),
      'format_enum' => array(
        'JSON',
        'CSV',
        'XLS',
        'XLSX',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/reportstats',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRoas(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'time_increment' => 'string',
      'time_range' => 'Object',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/roas',
      new AdAccountRoas(),
      'EDGE',
      AdAccountRoas::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSavedAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'business_id' => 'string',
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

  public function createSponsoredMessageAd(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'message_creative_id' => 'string',
      'daily_budget' => 'unsigned int',
      'bid_amount' => 'int',
      'targeting' => 'Targeting',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/sponsored_message_ads',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingSentenceLines(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'targeting_spec' => 'Targeting',
      'discard_ages' => 'bool',
      'discard_placements' => 'bool',
      'hide_targeting_spec_from_return' => 'bool',
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

  public function getTimezoneOffsets(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'start_year' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/timezoneoffsets',
      new TimezoneOffset(),
      'EDGE',
      TimezoneOffset::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteTracking(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tracking_specs' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/tracking',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function deleteUserMatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'payload' => 'Object',
      'namespace' => 'string',
      'bidirectional' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/user_match',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUserMatch(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'payload' => 'Object',
      'action' => 'string',
      'namespace' => 'string',
      'retention' => 'string',
      'bidirectional' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/user_match',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUserPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
      'email' => 'string',
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/userpermissions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getUserPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'Object',
      'user' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/userpermissions',
      new AdAccountUserPermissions(),
      'EDGE',
      AdAccountUserPermissions::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUserPermission(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
      'email' => 'string',
      'business' => 'string',
      'tasks' => 'list<tasks_enum>',
    );
    $enums = array(
      'tasks_enum' => AdAccountTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/userpermissions',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
      'uids' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/users',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function createUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'uid' => 'int',
      'tasks' => 'list<tasks_enum>',
    );
    $enums = array(
      'tasks_enum' => AdAccountTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/users',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUsersOfAnyAudience(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'session' => 'Object',
      'payload' => 'Object',
      'namespace' => 'string',
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
      'name' => 'string',
      'spend_cap_action' => 'string',
      'spend_cap' => 'float',
      'agency_client_declaration' => 'map',
      'business_info' => 'map',
      'tos_accepted' => 'map',
      'currency' => 'currency_enum',
      'timezone_id' => 'unsigned int',
      'end_advertiser' => 'string',
      'media_agency' => 'string',
      'partner' => 'string',
      'is_notifications_enabled' => 'bool',
      'attribution_spec' => 'list<Object>',
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
