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

class AdFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AD_ACTIVE_TIME = 'ad_active_time';
  const AD_REVIEW_FEEDBACK = 'ad_review_feedback';
  const AD_SCHEDULE_END_TIME = 'ad_schedule_end_time';
  const AD_SCHEDULE_START_TIME = 'ad_schedule_start_time';
  const ADLABELS = 'adlabels';
  const ADSET = 'adset';
  const ADSET_ID = 'adset_id';
  const BID_AMOUNT = 'bid_amount';
  const BID_INFO = 'bid_info';
  const BID_TYPE = 'bid_type';
  const CAMPAIGN = 'campaign';
  const CAMPAIGN_ID = 'campaign_id';
  const CONFIGURED_STATUS = 'configured_status';
  const CONVERSION_DOMAIN = 'conversion_domain';
  const CONVERSION_SPECS = 'conversion_specs';
  const CREATED_TIME = 'created_time';
  const CREATIVE = 'creative';
  const DEMOLINK_HASH = 'demolink_hash';
  const DISPLAY_SEQUENCE = 'display_sequence';
  const EFFECTIVE_STATUS = 'effective_status';
  const ENGAGEMENT_AUDIENCE = 'engagement_audience';
  const FAILED_DELIVERY_CHECKS = 'failed_delivery_checks';
  const ID = 'id';
  const ISSUES_INFO = 'issues_info';
  const LAST_UPDATED_BY_APP_ID = 'last_updated_by_app_id';
  const NAME = 'name';
  const PREVIEW_SHAREABLE_LINK = 'preview_shareable_link';
  const PRIORITY = 'priority';
  const RECOMMENDATIONS = 'recommendations';
  const SOURCE_AD = 'source_ad';
  const SOURCE_AD_ID = 'source_ad_id';
  const STATUS = 'status';
  const TARGETING = 'targeting';
  const TRACKING_AND_CONVERSION_WITH_DEFAULTS = 'tracking_and_conversion_with_defaults';
  const TRACKING_SPECS = 'tracking_specs';
  const UPDATED_TIME = 'updated_time';
  const ADSET_SPEC = 'adset_spec';
  const AUDIENCE_ID = 'audience_id';
  const DATE_FORMAT = 'date_format';
  const DRAFT_ADGROUP_ID = 'draft_adgroup_id';
  const EXECUTION_OPTIONS = 'execution_options';
  const INCLUDE_DEMOLINK_HASHES = 'include_demolink_hashes';
  const FILENAME = 'filename';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'ad_active_time' => 'string',
      'ad_review_feedback' => 'AdgroupReviewFeedback',
      'ad_schedule_end_time' => 'datetime',
      'ad_schedule_start_time' => 'datetime',
      'adlabels' => 'list<AdLabel>',
      'adset' => 'AdSet',
      'adset_id' => 'string',
      'bid_amount' => 'int',
      'bid_info' => 'map<string, unsigned int>',
      'bid_type' => 'BidType',
      'campaign' => 'Campaign',
      'campaign_id' => 'string',
      'configured_status' => 'ConfiguredStatus',
      'conversion_domain' => 'string',
      'conversion_specs' => 'list<ConversionActionQuery>',
      'created_time' => 'datetime',
      'creative' => 'AdCreative',
      'demolink_hash' => 'string',
      'display_sequence' => 'int',
      'effective_status' => 'EffectiveStatus',
      'engagement_audience' => 'bool',
      'failed_delivery_checks' => 'list<DeliveryCheck>',
      'id' => 'string',
      'issues_info' => 'list<AdgroupIssuesInfo>',
      'last_updated_by_app_id' => 'string',
      'name' => 'string',
      'preview_shareable_link' => 'string',
      'priority' => 'unsigned int',
      'recommendations' => 'list<AdRecommendation>',
      'source_ad' => 'Ad',
      'source_ad_id' => 'string',
      'status' => 'Status',
      'targeting' => 'Targeting',
      'tracking_and_conversion_with_defaults' => 'TrackingAndConversionWithDefaults',
      'tracking_specs' => 'list<ConversionActionQuery>',
      'updated_time' => 'datetime',
      'adset_spec' => 'AdSet',
      'audience_id' => 'string',
      'date_format' => 'string',
      'draft_adgroup_id' => 'string',
      'execution_options' => 'list<ExecutionOptions>',
      'include_demolink_hashes' => 'bool',
      'filename' => 'file',
    );
  }
}
