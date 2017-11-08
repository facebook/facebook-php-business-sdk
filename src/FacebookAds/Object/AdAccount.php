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
use FacebookAds\Object\Values\AdAccountDeliveryEstimateOptimizationGoalValues;
use FacebookAds\Object\Values\AdAccountRoasFieldsValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedLimitTypeValues;
use FacebookAds\Object\Values\AdActivityCategoryValues;
use FacebookAds\Object\Values\AdCreativeApplinkTreatmentValues;
use FacebookAds\Object\Values\AdCreativeDynamicAdVoiceValues;
use FacebookAds\Object\Values\AdCreativeOperatorValues;
use FacebookAds\Object\Values\AdDatePresetValues;
use FacebookAds\Object\Values\AdExecutionOptionsValues;
use FacebookAds\Object\Values\AdOperatorValues;
use FacebookAds\Object\Values\AdPlacePageSetLocationTypesValues;
use FacebookAds\Object\Values\AdPreviewAdFormatValues;
use FacebookAds\Object\Values\AdRuleStatusValues;
use FacebookAds\Object\Values\AdSetBillingEventValues;
use FacebookAds\Object\Values\AdSetDatePresetValues;
use FacebookAds\Object\Values\AdSetDestinationTypeValues;
use FacebookAds\Object\Values\AdSetEffectiveStatusValues;
use FacebookAds\Object\Values\AdSetExecutionOptionsValues;
use FacebookAds\Object\Values\AdSetOperatorValues;
use FacebookAds\Object\Values\AdSetOptimizationGoalValues;
use FacebookAds\Object\Values\AdSetStatusValues;
use FacebookAds\Object\Values\AdStatusValues;
use FacebookAds\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAds\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAds\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsDatePresetValues;
use FacebookAds\Object\Values\AdsInsightsLevelValues;
use FacebookAds\Object\Values\AdsInsightsSummaryActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsSummaryValues;
use FacebookAds\Object\Values\CampaignDatePresetValues;
use FacebookAds\Object\Values\CampaignDeleteStrategyValues;
use FacebookAds\Object\Values\CampaignEffectiveStatusValues;
use FacebookAds\Object\Values\CampaignExecutionOptionsValues;
use FacebookAds\Object\Values\CampaignObjectiveValues;
use FacebookAds\Object\Values\CampaignOperatorValues;
use FacebookAds\Object\Values\CampaignStatusValues;
use FacebookAds\Object\Values\CustomAudienceClaimObjectiveValues;
use FacebookAds\Object\Values\CustomAudienceContentTypeValues;
use FacebookAds\Object\Values\CustomAudienceFieldsValues;
use FacebookAds\Object\Values\CustomAudienceSubtypeValues;
use FacebookAds\Object\Values\CustomConversionCustomEventTypeValues;
use FacebookAds\Object\Values\OffsitePixelTagValues;
use FacebookAds\Object\Values\PartnerCategoryPrivateOrPublicValues;
use FacebookAds\Object\Values\ReachEstimateOptimizeForValues;

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
    return $ref_enums;
  }


  public function getActivities(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'add_children' => 'bool',
      'business_id' => 'string',
      'category' => 'category_enum',
      'extra_oids' => 'list<string>',
      'oid' => 'string',
      'since' => 'datetime',
      'uid' => 'int',
      'until' => 'datetime',
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
      'location_types' => 'list<location_types_enum>',
      'name' => 'string',
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
      new AbstractCrudObject(),
      'EDGE',
      array(),
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
      'body' => 'string',
      'branded_content_sponsor_page_id' => 'string',
      'call_to_action' => 'Object',
      'dynamic_ad_voice' => 'dynamic_ad_voice_enum',
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
      'object_story_spec' => 'AdCreativeObjectStorySpec',
      'object_type' => 'string',
      'object_url' => 'string',
      'platform_customizations' => 'Object',
      'product_set_id' => 'string',
      'recommender_settings' => 'map',
      'template_url' => 'string',
      'template_url_spec' => 'Object',
      'thumbnail_url' => 'string',
      'title' => 'string',
      'url_tags' => 'string',
      'use_page_actor_override' => 'bool',
    );
    $enums = array(
      'applink_treatment_enum' => AdCreativeApplinkTreatmentValues::getInstance()->getValues(),
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
      'zipbytes' => 'Object',
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

  public function getAdRulesHistory(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'hide_no_changes' => 'bool',
    );
    $enums = array(
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
      'ad_draft_id' => 'string',
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<string>',
      'include_deleted' => 'bool',
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
      'bid_amount' => 'int',
      'creative' => 'AdCreative',
      'date_format' => 'string',
      'display_sequence' => 'unsigned int',
      'execution_options' => 'list<execution_options_enum>',
      'name' => 'string',
      'redownload' => 'bool',
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
      'ad_draft_id' => 'string',
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<effective_status_enum>',
      'include_deleted' => 'bool',
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
      'bid_amount' => 'int',
      'billing_event' => 'billing_event_enum',
      'campaign_id' => 'string',
      'campaign_spec' => 'Object',
      'creative_sequence' => 'list<string>',
      'daily_budget' => 'unsigned int',
      'daily_imps' => 'unsigned int',
      'destination_type' => 'destination_type_enum',
      'end_time' => 'datetime',
      'execution_options' => 'list<execution_options_enum>',
      'frequency_control_specs' => 'list<Object>',
      'is_autobid' => 'bool',
      'is_average_price_pacing' => 'bool',
      'lifetime_budget' => 'unsigned int',
      'lifetime_imps' => 'unsigned int',
      'name' => 'string',
      'optimization_goal' => 'optimization_goal_enum',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'Object',
      'redownload' => 'bool',
      'rf_prediction_id' => 'string',
      'start_time' => 'datetime',
      'status' => 'status_enum',
      'targeting' => 'Targeting',
      'time_based_ad_rotation_id_blocks' => 'list<list<unsigned int>>',
      'time_based_ad_rotation_intervals' => 'list<unsigned int>',
    );
    $enums = array(
      'billing_event_enum' => AdSetBillingEventValues::getInstance()->getValues(),
      'destination_type_enum' => AdSetDestinationTypeValues::getInstance()->getValues(),
      'execution_options_enum' => AdSetExecutionOptionsValues::getInstance()->getValues(),
      'optimization_goal_enum' => AdSetOptimizationGoalValues::getInstance()->getValues(),
      'status_enum' => AdSetStatusValues::getInstance()->getValues(),
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
    );
    $enums = array(
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
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
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

  public function createAdVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'composer_session_id' => 'string',
      'description' => 'string',
      'file_size' => 'unsigned int',
      'file_url' => 'string',
      'is_explicit_share' => 'bool',
      'manual_privacy' => 'bool',
      'name' => 'string',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_suggestion_mechanism' => 'string',
      'original_fov' => 'unsigned int',
      'original_projection_type' => 'original_projection_type_enum',
      'referenced_sticker_id' => 'string',
      'slideshow_spec' => 'map',
      'start_offset' => 'unsigned int',
      'time_since_original_post' => 'unsigned int',
      'title' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'upload_phase' => 'upload_phase_enum',
      'upload_session_id' => 'string',
      'video_file_chunk' => 'string',
    );
    $enums = array(
      'original_projection_type_enum' => array(
        'equirectangular',
        'cubemap',
        'equiangular_cubemap',
      ),
      'unpublished_content_type_enum' => array(
        'SCHEDULED',
        'DRAFT',
        'ADS_POST',
      ),
      'upload_phase_enum' => array(
        'start',
        'transfer',
        'finish',
        'cancel',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/advideos',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums),
      true,
      true
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
      new AbstractCrudObject(),
      'EDGE',
      array(),
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
      'notification_mode_enum' => array(
        'OFF',
        'ON_COMPLETE',
      ),
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

  public function deleteCampaigns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'before_date' => 'datetime',
      'delete_strategy' => 'delete_strategy_enum',
      'object_count' => 'int',
    );
    $enums = array(
      'delete_strategy_enum' => CampaignDeleteStrategyValues::getInstance()->getValues(),
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
      'budget_rebalance_flag' => 'bool',
      'buying_type' => 'string',
      'execution_options' => 'list<execution_options_enum>',
      'name' => 'string',
      'objective' => 'objective_enum',
      'promoted_object' => 'Object',
      'spend_cap' => 'unsigned int',
      'status' => 'status_enum',
    );
    $enums = array(
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
      'objective_enum' => CampaignObjectiveValues::getInstance()->getValues(),
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

  public function getCustomAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_id' => 'string',
      'fields' => 'list<fields_enum>',
      'filtering' => 'list<Object>',
      'pixel_id' => 'string',
    );
    $enums = array(
      'fields_enum' => CustomAudienceFieldsValues::getInstance()->getValues(),
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
      'claim_objective' => 'claim_objective_enum',
      'content_type' => 'content_type_enum',
      'dataset_id' => 'string',
      'description' => 'string',
      'event_source_group' => 'string',
      'is_value_based' => 'bool',
      'list_of_accounts' => 'list<unsigned int>',
      'lookalike_spec' => 'string',
      'name' => 'string',
      'opt_out_link' => 'string',
      'origin_audience_id' => 'string',
      'pixel_id' => 'string',
      'prefill' => 'bool',
      'product_set_id' => 'string',
      'retention_days' => 'unsigned int',
      'rule' => 'string',
      'rule_aggregation' => 'string',
      'subtype' => 'subtype_enum',
    );
    $enums = array(
      'claim_objective_enum' => CustomAudienceClaimObjectiveValues::getInstance()->getValues(),
      'content_type_enum' => CustomAudienceContentTypeValues::getInstance()->getValues(),
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

  public function createCustomConversion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
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

  public function getGeneratePreviews(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_format' => 'ad_format_enum',
      'creative' => 'AdCreative',
      'dynamic_creative_spec' => 'Object',
      'end_date' => 'datetime',
      'height' => 'unsigned int',
      'locale' => 'string',
      'place_page_id' => 'int',
      'post' => 'Object',
      'product_item_ids' => 'list<string>',
      'start_date' => 'datetime',
      'width' => 'unsigned int',
    );
    $enums = array(
      'ad_format_enum' => AdPreviewAdFormatValues::getInstance()->getValues(),
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
      'action_attribution_windows' => 'list<action_attribution_windows_enum>',
      'action_breakdowns' => 'list<action_breakdowns_enum>',
      'action_report_time' => 'action_report_time_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'date_preset' => 'date_preset_enum',
      'default_summary' => 'bool',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'fields' => 'list<fields_enum>',
      'filtering' => 'list<Object>',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'sort' => 'list<string>',
      'summary' => 'list<summary_enum>',
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
      'summary_enum' => AdsInsightsSummaryValues::getInstance()->getValues(),
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
      'fields' => 'list<fields_enum>',
      'filtering' => 'list<Object>',
      'level' => 'level_enum',
      'product_id_limit' => 'int',
      'sort' => 'list<string>',
      'summary' => 'list<summary_enum>',
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
      'summary_enum' => AdsInsightsSummaryValues::getInstance()->getValues(),
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
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function getOffsitePixels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/offsitepixels',
      new OffsitePixel(),
      'EDGE',
      OffsitePixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOffsitePixel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'tag' => 'tag_enum',
    );
    $enums = array(
      'tag_enum' => OffsitePixelTagValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/offsitepixels',
      new OffsitePixel(),
      'EDGE',
      OffsitePixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPartnerCategories(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'hide_pc' => 'bool',
      'private_or_public' => 'private_or_public_enum',
      'targeting_type' => 'string',
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
      'associated_audience_id' => 'unsigned int',
      'creation_params' => 'map',
      'description' => 'string',
      'exclusions' => 'list<Object>',
      'inclusions' => 'list<Object>',
      'name' => 'string',
      'opt_out_link' => 'string',
      'parent_audience_id' => 'unsigned int',
      'product_set_id' => 'string',
      'subtype' => 'subtype_enum',
      'tags' => 'list<string>',
    );
    $enums = array(
      'subtype_enum' => array(
        'CUSTOM',
        'WEBSITE',
        'APP',
        'OFFLINE_CONVERSION',
        'CLAIM',
        'PARTNER',
        'MANAGED',
        'VIDEO',
        'LOOKALIKE',
        'ENGAGEMENT',
        'DATA_SET',
        'BAG_OF_ACCOUNTS',
        'STUDY_RULE_AUDIENCE',
        'FOX',
      ),
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
      new AbstractCrudObject(),
      'EDGE',
      array(),
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
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getRateCard(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ratecard',
      new RateCard(),
      'EDGE',
      RateCard::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReachEstimate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'currency' => 'string',
      'daily_budget' => 'float',
      'object_store_url' => 'string',
      'optimize_for' => 'optimize_for_enum',
      'targeting_spec' => 'Targeting',
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
      'budget' => 'unsigned int',
      'campaign_group_id' => 'string',
      'day_parting_schedule' => 'list<Object>',
      'destination_id' => 'unsigned int',
      'destination_ids' => 'list<string>',
      'end_time' => 'unsigned int',
      'frequency_cap' => 'unsigned int',
      'interval_frequency_cap_reset_period' => 'unsigned int',
      'num_curve_points' => 'unsigned int',
      'objective' => 'string',
      'prediction_mode' => 'unsigned int',
      'reach' => 'unsigned int',
      'rf_prediction_id_to_share' => 'string',
      'start_time' => 'unsigned int',
      'stop_time' => 'unsigned int',
      'story_event_type' => 'unsigned int',
      'target_spec' => 'Targeting',
    );
    $enums = array(
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

  public function getRoas(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'fields' => 'list<fields_enum>',
      'filtering' => 'list<Object>',
      'time_increment' => 'string',
      'time_range' => 'Object',
    );
    $enums = array(
      'fields_enum' => AdAccountRoasFieldsValues::getInstance()->getValues(),
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

  public function getTargetingBrowse(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'include_nodes' => 'bool',
      'limit_type' => 'limit_type_enum',
    );
    $enums = array(
      'limit_type_enum' => AdAccountTargetingUnifiedLimitTypeValues::getInstance()->getValues(),
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
      'limit_type' => 'limit_type_enum',
      'q' => 'string',
    );
    $enums = array(
      'limit_type_enum' => AdAccountTargetingUnifiedLimitTypeValues::getInstance()->getValues(),
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
      'limit_type' => 'limit_type_enum',
      'targeting_list' => 'list<Object>',
    );
    $enums = array(
      'limit_type_enum' => AdAccountTargetingUnifiedLimitTypeValues::getInstance()->getValues(),
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
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTransactions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'time_start' => 'int',
      'time_stop' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/transactions',
      new Transaction(),
      'EDGE',
      Transaction::getFieldsEnum()->getValues(),
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
      'end_advertiser' => 'string',
      'is_notifications_enabled' => 'bool',
      'media_agency' => 'string',
      'name' => 'string',
      'partner' => 'string',
      'redownload' => 'bool',
      'spend_cap' => 'float',
      'spend_cap_action' => 'string',
    );
    $enums = array(
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
