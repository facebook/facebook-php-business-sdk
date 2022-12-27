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

class CampaignFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AD_STRATEGY_GROUP_ID = 'ad_strategy_group_id';
  const AD_STRATEGY_ID = 'ad_strategy_id';
  const ADLABELS = 'adlabels';
  const BENCHMARK_REPORT_COUNT = 'benchmark_report_count';
  const BID_STRATEGY = 'bid_strategy';
  const BOOSTED_OBJECT_ID = 'boosted_object_id';
  const BRAND_LIFT_STUDIES = 'brand_lift_studies';
  const BUDGET_REBALANCE_FLAG = 'budget_rebalance_flag';
  const BUDGET_REMAINING = 'budget_remaining';
  const BUYING_TYPE = 'buying_type';
  const CAN_CREATE_BRAND_LIFT_STUDY = 'can_create_brand_lift_study';
  const CAN_USE_SPEND_CAP = 'can_use_spend_cap';
  const CONFIGURED_STATUS = 'configured_status';
  const CREATED_TIME = 'created_time';
  const DAILY_BUDGET = 'daily_budget';
  const EFFECTIVE_STATUS = 'effective_status';
  const HAS_SECONDARY_SKADNETWORK_REPORTING = 'has_secondary_skadnetwork_reporting';
  const ID = 'id';
  const IS_SKADNETWORK_ATTRIBUTION = 'is_skadnetwork_attribution';
  const ISSUES_INFO = 'issues_info';
  const LAST_BUDGET_TOGGLING_TIME = 'last_budget_toggling_time';
  const LIFETIME_BUDGET = 'lifetime_budget';
  const NAME = 'name';
  const OBJECTIVE = 'objective';
  const PACING_TYPE = 'pacing_type';
  const PRIMARY_ATTRIBUTION = 'primary_attribution';
  const PROMOTED_OBJECT = 'promoted_object';
  const RECOMMENDATIONS = 'recommendations';
  const SMART_PROMOTION_TYPE = 'smart_promotion_type';
  const SOURCE_CAMPAIGN = 'source_campaign';
  const SOURCE_CAMPAIGN_ID = 'source_campaign_id';
  const SPECIAL_AD_CATEGORIES = 'special_ad_categories';
  const SPECIAL_AD_CATEGORY = 'special_ad_category';
  const SPECIAL_AD_CATEGORY_COUNTRY = 'special_ad_category_country';
  const SPEND_CAP = 'spend_cap';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const STOP_TIME = 'stop_time';
  const TOPLINE_ID = 'topline_id';
  const UPDATED_TIME = 'updated_time';
  const ADBATCH = 'adbatch';
  const EXECUTION_OPTIONS = 'execution_options';
  const ITERATIVE_SPLIT_TEST_CONFIGS = 'iterative_split_test_configs';
  const UPSTREAM_EVENTS = 'upstream_events';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'ad_strategy_group_id' => 'string',
      'ad_strategy_id' => 'string',
      'adlabels' => 'list<AdLabel>',
      'benchmark_report_count' => 'int',
      'bid_strategy' => 'BidStrategy',
      'boosted_object_id' => 'string',
      'brand_lift_studies' => 'list<AdStudy>',
      'budget_rebalance_flag' => 'bool',
      'budget_remaining' => 'string',
      'buying_type' => 'string',
      'can_create_brand_lift_study' => 'bool',
      'can_use_spend_cap' => 'bool',
      'configured_status' => 'ConfiguredStatus',
      'created_time' => 'datetime',
      'daily_budget' => 'string',
      'effective_status' => 'EffectiveStatus',
      'has_secondary_skadnetwork_reporting' => 'bool',
      'id' => 'string',
      'is_skadnetwork_attribution' => 'bool',
      'issues_info' => 'list<AdCampaignIssuesInfo>',
      'last_budget_toggling_time' => 'datetime',
      'lifetime_budget' => 'string',
      'name' => 'string',
      'objective' => 'string',
      'pacing_type' => 'list<string>',
      'primary_attribution' => 'string',
      'promoted_object' => 'AdPromotedObject',
      'recommendations' => 'list<AdRecommendation>',
      'smart_promotion_type' => 'string',
      'source_campaign' => 'Campaign',
      'source_campaign_id' => 'string',
      'special_ad_categories' => 'list<string>',
      'special_ad_category' => 'string',
      'special_ad_category_country' => 'list<string>',
      'spend_cap' => 'string',
      'start_time' => 'datetime',
      'status' => 'Status',
      'stop_time' => 'datetime',
      'topline_id' => 'string',
      'updated_time' => 'datetime',
      'adbatch' => 'list<Object>',
      'execution_options' => 'list<ExecutionOptions>',
      'iterative_split_test_configs' => 'list<Object>',
      'upstream_events' => 'map',
    );
  }
}
