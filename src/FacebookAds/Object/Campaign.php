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
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\Object\Values\AdDatePresetValues;
use FacebookAds\Object\Values\AdSetDatePresetValues;
use FacebookAds\Object\Values\AdSetEffectiveStatusValues;
use FacebookAds\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAds\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAds\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsDatePresetValues;
use FacebookAds\Object\Values\AdsInsightsLevelValues;
use FacebookAds\Object\Values\AdsInsightsSummaryActionBreakdownsValues;
use FacebookAds\Object\Values\CampaignBidStrategyValues;
use FacebookAds\Object\Values\CampaignConfiguredStatusValues;
use FacebookAds\Object\Values\CampaignDatePresetValues;
use FacebookAds\Object\Values\CampaignEffectiveStatusValues;
use FacebookAds\Object\Values\CampaignExecutionOptionsValues;
use FacebookAds\Object\Values\CampaignObjectiveValues;
use FacebookAds\Object\Values\CampaignOperatorValues;
use FacebookAds\Object\Values\CampaignSmartPromotionTypeValues;
use FacebookAds\Object\Values\CampaignSpecialAdCategoriesValues;
use FacebookAds\Object\Values\CampaignSpecialAdCategoryCountryValues;
use FacebookAds\Object\Values\CampaignSpecialAdCategoryValues;
use FacebookAds\Object\Values\CampaignStatusOptionValues;
use FacebookAds\Object\Values\CampaignStatusValues;
use FacebookAds\Object\Traits\AdLabelAwareCrudObjectTrait;
use FacebookAds\Object\Traits\ObjectValidation;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Campaign extends AbstractArchivableCrudObject {

  use AdLabelAwareCrudObjectTrait;
  use ObjectValidation;

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'campaigns';
  }

  /**
   * @return CampaignFields
   */
  public static function getFieldsEnum() {
    return CampaignFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BidStrategy'] = CampaignBidStrategyValues::getInstance()->getValues();
    $ref_enums['ConfiguredStatus'] = CampaignConfiguredStatusValues::getInstance()->getValues();
    $ref_enums['EffectiveStatus'] = CampaignEffectiveStatusValues::getInstance()->getValues();
    $ref_enums['Status'] = CampaignStatusValues::getInstance()->getValues();
    $ref_enums['DatePreset'] = CampaignDatePresetValues::getInstance()->getValues();
    $ref_enums['ExecutionOptions'] = CampaignExecutionOptionsValues::getInstance()->getValues();
    $ref_enums['Objective'] = CampaignObjectiveValues::getInstance()->getValues();
    $ref_enums['SmartPromotionType'] = CampaignSmartPromotionTypeValues::getInstance()->getValues();
    $ref_enums['SpecialAdCategories'] = CampaignSpecialAdCategoriesValues::getInstance()->getValues();
    $ref_enums['SpecialAdCategoryCountry'] = CampaignSpecialAdCategoryCountryValues::getInstance()->getValues();
    $ref_enums['Operator'] = CampaignOperatorValues::getInstance()->getValues();
    $ref_enums['SpecialAdCategory'] = CampaignSpecialAdCategoryValues::getInstance()->getValues();
    $ref_enums['StatusOption'] = CampaignStatusOptionValues::getInstance()->getValues();
    return $ref_enums;
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

  public function createAdLabel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'execution_options' => 'list<execution_options_enum>',
    );
    $enums = array(
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adlabels',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
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

  public function getCopies(array $fields = array(), array $params = array(), $pending = false) {
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
      '/copies',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCopy(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'deep_copy' => 'bool',
      'end_time' => 'datetime',
      'rename_options' => 'Object',
      'start_time' => 'datetime',
      'status_option' => 'status_option_enum',
    );
    $enums = array(
      'status_option_enum' => CampaignStatusOptionValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/copies',
      new Campaign(),
      'EDGE',
      Campaign::getFieldsEnum()->getValues(),
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
      'time_range' => 'Object',
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
      new Campaign(),
      'NODE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adlabels' => 'list<Object>',
      'adset_bid_amounts' => 'map',
      'adset_budgets' => 'list<map>',
      'bid_strategy' => 'bid_strategy_enum',
      'budget_rebalance_flag' => 'bool',
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
      'special_ad_categories' => 'list<special_ad_categories_enum>',
      'special_ad_category' => 'special_ad_category_enum',
      'special_ad_category_country' => 'list<special_ad_category_country_enum>',
      'spend_cap' => 'unsigned int',
      'start_time' => 'datetime',
      'status' => 'status_enum',
      'stop_time' => 'datetime',
      'upstream_events' => 'map',
    );
    $enums = array(
      'bid_strategy_enum' => CampaignBidStrategyValues::getInstance()->getValues(),
      'execution_options_enum' => CampaignExecutionOptionsValues::getInstance()->getValues(),
      'objective_enum' => CampaignObjectiveValues::getInstance()->getValues(),
      'smart_promotion_type_enum' => CampaignSmartPromotionTypeValues::getInstance()->getValues(),
      'special_ad_categories_enum' => CampaignSpecialAdCategoriesValues::getInstance()->getValues(),
      'special_ad_category_enum' => CampaignSpecialAdCategoryValues::getInstance()->getValues(),
      'special_ad_category_country_enum' => CampaignSpecialAdCategoryCountryValues::getInstance()->getValues(),
      'status_enum' => CampaignStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Campaign(),
      'NODE',
      Campaign::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
