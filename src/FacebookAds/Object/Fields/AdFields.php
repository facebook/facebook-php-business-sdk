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

class AdFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AD_REVIEW_FEEDBACK = 'ad_review_feedback';
  const ADLABELS = 'adlabels';
  const ADSET = 'adset';
  const ADSET_ID = 'adset_id';
  const BID_AMOUNT = 'bid_amount';
  const BID_INFO = 'bid_info';
  const BID_TYPE = 'bid_type';
  const CAMPAIGN = 'campaign';
  const CAMPAIGN_ID = 'campaign_id';
  const CONFIGURED_STATUS = 'configured_status';
  const CONVERSION_SPECS = 'conversion_specs';
  const CREATED_TIME = 'created_time';
  const CREATIVE = 'creative';
  const DEMOLINK_HASH = 'demolink_hash';
  const DISPLAY_SEQUENCE = 'display_sequence';
  const EFFECTIVE_STATUS = 'effective_status';
  const ENGAGEMENT_AUDIENCE = 'engagement_audience';
  const FAILED_DELIVERY_CHECKS = 'failed_delivery_checks';
  const ID = 'id';
  const IMPRESSION_CONTROL_MAP = 'impression_control_map';
  const ISSUES_INFO = 'issues_info';
  const LAST_UPDATED_BY_APP_ID = 'last_updated_by_app_id';
  const LOCATIONS = 'locations';
  const NAME = 'name';
  const OBJECTIVE_SOURCE = 'objective_source';
  const PRIORITY = 'priority';
  const RECOMMENDATIONS = 'recommendations';
  const SOCIAL_PREFS = 'social_prefs';
  const SOURCE_AD = 'source_ad';
  const SOURCE_AD_ID = 'source_ad_id';
  const STATUS = 'status';
  const TARGETING = 'targeting';
  const TRACKING_AND_CONVERSION_WITH_DEFAULTS = 'tracking_and_conversion_with_defaults';
  const TRACKING_SPECS = 'tracking_specs';
  const UPDATED_TIME = 'updated_time';
  const URL_OVERRIDE = 'url_override';
  const AUDIENCE_ID = 'audience_id';
  const DATE_FORMAT = 'date_format';
  const INCLUDE_DEMOLINK_HASHES = 'include_demolink_hashes';
  const SOCIAL_REQUIRED = 'social_required';
  const ADSET_SPEC = 'adset_spec';
  const DRAFT_ADGROUP_ID = 'draft_adgroup_id';
  const EXECUTION_OPTIONS = 'execution_options';
  const FILENAME = 'filename';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'ad_review_feedback' => 'AdgroupReviewFeedback',
      'adlabels' => 'list<AdLabel>',
      'adset' => 'AdSet',
      'adset_id' => 'string',
      'bid_amount' => 'int',
      'bid_info' => 'map<string, unsigned int>',
      'bid_type' => 'BidType',
      'campaign' => 'Campaign',
      'campaign_id' => 'string',
      'configured_status' => 'ConfiguredStatus',
      'conversion_specs' => 'list<ConversionActionQuery>',
      'created_time' => 'datetime',
      'creative' => 'AdCreative',
      'demolink_hash' => 'string',
      'display_sequence' => 'int',
      'effective_status' => 'EffectiveStatus',
      'engagement_audience' => 'bool',
      'failed_delivery_checks' => 'list<DeliveryCheck>',
      'id' => 'string',
      'impression_control_map' => 'list<string>',
      'issues_info' => 'list<AdgroupIssuesInfo>',
      'last_updated_by_app_id' => 'string',
      'locations' => 'list<int>',
      'name' => 'string',
      'objective_source' => 'string',
      'priority' => 'unsigned int',
      'recommendations' => 'list<AdRecommendation>',
      'social_prefs' => 'list<string>',
      'source_ad' => 'Ad',
      'source_ad_id' => 'string',
      'status' => 'Status',
      'targeting' => 'Targeting',
      'tracking_and_conversion_with_defaults' => 'TrackingAndConversionWithDefaults',
      'tracking_specs' => 'list<ConversionActionQuery>',
      'updated_time' => 'datetime',
      'url_override' => 'string',
      'audience_id' => 'string',
      'date_format' => 'string',
      'include_demolink_hashes' => 'bool',
      'social_required' => 'bool',
      'adset_spec' => 'AdSet',
      'draft_adgroup_id' => 'string',
      'execution_options' => 'list<ExecutionOptions>',
      'filename' => 'file',
    );
  }
}
