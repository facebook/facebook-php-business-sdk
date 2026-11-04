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

class AdgroupGetFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AD_ACTIVE_TIME = 'ad_active_time';
  const AD_SCHEDULE_END_TIME = 'ad_schedule_end_time';
  const AD_SCHEDULE_START_TIME = 'ad_schedule_start_time';
  const ADCREATIVES = 'adcreatives';
  const ADLABELS = 'adlabels';
  const ADRULES_GOVERNED = 'adrules_governed';
  const ADSET = 'adset';
  const ADSET_ID = 'adset_id';
  const BID_AMOUNT = 'bid_amount';
  const BID_INFO = 'bid_info';
  const BID_TYPE = 'bid_type';
  const CAMPAIGN = 'campaign';
  const CAMPAIGN_ID = 'campaign_id';
  const CAN_AGGREGATE_SOCIAL_FEEDBACK_ON_EDIT = 'can_aggregate_social_feedback_on_edit';
  const CLICKS = 'clicks';
  const CONFIGURED_STATUS = 'configured_status';
  const CONVERSION_DOMAIN = 'conversion_domain';
  const CONVERSION_SPECS = 'conversion_specs';
  const CREATED_TIME = 'created_time';
  const CREATIVE = 'creative';
  const CREATIVE_ASSET_GROUPS_SPEC = 'creative_asset_groups_spec';
  const CREATIVE_AUDIENCE_PAIRING_PERSONA = 'creative_audience_pairing_persona';
  const CREATIVE_BODY = 'creative_body';
  const CREATIVE_HISTORY = 'creative_history';
  const CREATIVE_ID = 'creative_id';
  const CREATIVE_LINK_URL = 'creative_link_url';
  const CREATIVE_TITLE = 'creative_title';
  const DELIVERY_INFO = 'delivery_info';
  const DELIVERY_STATUS = 'delivery_status';
  const DEMOLINK_HASH = 'demolink_hash';
  const DISPLAY_SEQUENCE = 'display_sequence';
  const EFFECTIVE_STATUS = 'effective_status';
  const ENGAGEMENT_AUDIENCE = 'engagement_audience';
  const FREQUENCY = 'frequency';
  const ID = 'id';
  const IMPRESSIONS = 'impressions';
  const IS_AUTOBID = 'is_autobid';
  const LAST_UPDATED_BY_APP_ID = 'last_updated_by_app_id';
  const META_REWARD_ADGROUP_STATUS = 'meta_reward_adgroup_status';
  const SPECIAL_AD_CATEGORIES = 'special_ad_categories';
  const SPENT = 'spent';
  const STATUS = 'status';
  const UPDATED_TIME = 'updated_time';
  const VIEW_TAGS = 'view_tags';
  const YESTERDAY_SPENT = 'yesterday_spent';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'ad_active_time' => 'string',
      'ad_schedule_end_time' => 'mixed',
      'ad_schedule_start_time' => 'mixed',
      'adcreatives' => 'object',
      'adlabels' => 'list<object>',
      'adrules_governed' => 'object',
      'adset' => 'object',
      'adset_id' => 'int',
      'bid_amount' => 'int',
      'bid_info' => 'map<int, int>',
      'bid_type' => 'string',
      'campaign' => 'object',
      'campaign_id' => 'int',
      'can_aggregate_social_feedback_on_edit' => 'bool',
      'clicks' => 'int',
      'configured_status' => 'string',
      'conversion_domain' => 'string',
      'conversion_specs' => 'list<object>',
      'created_time' => 'mixed',
      'creative' => 'object',
      'creative_asset_groups_spec' => 'object',
      'creative_audience_pairing_persona' => 'object',
      'creative_body' => 'string',
      'creative_history' => 'list<object>',
      'creative_id' => 'int',
      'creative_link_url' => 'string',
      'creative_title' => 'string',
      'delivery_info' => 'object',
      'delivery_status' => 'object',
      'demolink_hash' => 'string',
      'display_sequence' => 'int',
      'effective_status' => 'string',
      'engagement_audience' => 'bool',
      'frequency' => 'float',
      'id' => 'int',
      'impressions' => 'int',
      'is_autobid' => 'bool',
      'last_updated_by_app_id' => 'string',
      'meta_reward_adgroup_status' => 'string',
      'special_ad_categories' => 'list<string>',
      'spent' => 'string',
      'status' => 'string',
      'updated_time' => 'mixed',
      'view_tags' => 'list<string>',
      'yesterday_spent' => 'string',
    );
  }
}
