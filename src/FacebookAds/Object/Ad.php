<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\AdFields;
use FacebookAds\Object\Values\AdBidTypeValues;
use FacebookAds\Object\Values\AdConfiguredStatusValues;
use FacebookAds\Object\Values\AdDatePresetValues;
use FacebookAds\Object\Values\AdEffectiveStatusValues;
use FacebookAds\Object\Values\AdExecutionOptionsValues;
use FacebookAds\Object\Values\AdOperatorValues;
use FacebookAds\Object\Values\AdPreviewAdFormatValues;
use FacebookAds\Object\Values\AdPreviewCreativeFeatureValues;
use FacebookAds\Object\Values\AdPreviewRenderTypeValues;
use FacebookAds\Object\Values\AdStatusOptionValues;
use FacebookAds\Object\Values\AdStatusValues;
use FacebookAds\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAds\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAds\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsDatePresetValues;
use FacebookAds\Object\Values\AdsInsightsLevelValues;
use FacebookAds\Object\Values\AdsInsightsSummaryActionBreakdownsValues;
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Ad extends AbstractArchivableCrudObject
  implements CanRedownloadInterface {

  use AdLabelAwareCrudObjectTrait;

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'ads';
  }

  /**
   * @return AdFields
   */
  public static function getFieldsEnum() {
    return AdFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BidType'] = AdBidTypeValues::getInstance()->getValues();
    $ref_enums['ConfiguredStatus'] = AdConfiguredStatusValues::getInstance()->getValues();
    $ref_enums['EffectiveStatus'] = AdEffectiveStatusValues::getInstance()->getValues();
    $ref_enums['Status'] = AdStatusValues::getInstance()->getValues();
    $ref_enums['DatePreset'] = AdDatePresetValues::getInstance()->getValues();
    $ref_enums['ExecutionOptions'] = AdExecutionOptionsValues::getInstance()->getValues();
    $ref_enums['Operator'] = AdOperatorValues::getInstance()->getValues();
    $ref_enums['StatusOption'] = AdStatusOptionValues::getInstance()->getValues();
    return $ref_enums;
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

  public function createAdLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'execution_options' => 'list<execution_options_enum>',
    );
    $enums = array(
      'execution_options_enum' => AdExecutionOptionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlabels',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdRulesGoverned(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'pass_evaluation' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adrules_governed',
      new AdRule(),
      'EDGE',
      AdRule::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCopies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'date_preset' => 'date_preset_enum',
      'effective_status' => 'list<string>',
      'time_range' => 'map',
      'updated_since' => 'int',
    );
    $enums = array(
      'date_preset_enum' => AdDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/copies',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopy(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adset_id' => 'string',
      'rename_options' => 'Object',
      'status_option' => 'status_option_enum',
    );
    $enums = array(
      'status_option_enum' => AdStatusOptionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copies',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
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
      'time_range' => 'map',
      'time_ranges' => 'list<map>',
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
      'time_range' => 'map',
      'time_ranges' => 'list<map>',
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

  public function getLeads(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/leads',
      new Lead(),
      'EDGE',
      Lead::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPreviews(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_format' => 'ad_format_enum',
      'creative_feature' => 'creative_feature_enum',
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
      'creative_feature_enum' => AdPreviewCreativeFeatureValues::getInstance()->getValues(),
      'render_type_enum' => AdPreviewRenderTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/previews',
      new AdPreview(),
      'EDGE',
      AdPreview::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTargetingSentenceLines(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
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

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/',
      new AbstractCrudObject(),
      'NODE',
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
      'am_call_tags' => 'map',
      'date_preset' => 'date_preset_enum',
      'from_adtable' => 'bool',
      'review_feedback_breakdown' => 'bool',
      'time_range' => 'map',
    );
    $enums = array(
      'date_preset_enum' => array(
        'data_maximum',
        'last_14d',
        'last_28d',
        'last_30d',
        'last_3d',
        'last_7d',
        'last_90d',
        'last_month',
        'last_quarter',
        'last_week_mon_sun',
        'last_week_sun_sat',
        'last_year',
        'maximum',
        'this_month',
        'this_quarter',
        'this_week_mon_today',
        'this_week_sun_today',
        'this_year',
        'today',
        'yesterday',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Ad(),
      'NODE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_schedule_end_time' => 'datetime',
      'ad_schedule_start_time' => 'datetime',
      'adlabels' => 'list<Object>',
      'adset_spec' => 'AdSet',
      'audience_id' => 'string',
      'bid_amount' => 'int',
      'conversion_domain' => 'string',
      'creative' => 'AdCreative',
      'display_sequence' => 'unsigned int',
      'draft_adgroup_id' => 'string',
      'engagement_audience' => 'bool',
      'execution_options' => 'list<execution_options_enum>',
      'include_demolink_hashes' => 'bool',
      'name' => 'string',
      'priority' => 'unsigned int',
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
      '/',
      new Ad(),
      'NODE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
