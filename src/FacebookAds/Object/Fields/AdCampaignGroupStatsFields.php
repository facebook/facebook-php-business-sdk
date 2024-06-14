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

class AdCampaignGroupStatsFields extends AbstractEnum {

  const ACTIONS = 'actions';
  const CAMPAIGN_GROUP_ID = 'campaign_group_id';
  const CLICKS = 'clicks';
  const END_TIME = 'end_time';
  const IMPRESSIONS = 'impressions';
  const INLINE_ACTIONS = 'inline_actions';
  const SOCIAL_CLICKS = 'social_clicks';
  const SOCIAL_IMPRESSIONS = 'social_impressions';
  const SOCIAL_SPENT = 'social_spent';
  const SOCIAL_UNIQUE_CLICKS = 'social_unique_clicks';
  const SOCIAL_UNIQUE_IMPRESSIONS = 'social_unique_impressions';
  const SPENT = 'spent';
  const START_TIME = 'start_time';
  const UNIQUE_CLICKS = 'unique_clicks';
  const UNIQUE_IMPRESSIONS = 'unique_impressions';

  public function getFieldTypes() {
    return array(
      'actions' => 'map<string, int>',
      'campaign_group_id' => 'string',
      'clicks' => 'unsigned int',
      'end_time' => 'datetime',
      'impressions' => 'unsigned int',
      'inline_actions' => 'map<string, int>',
      'social_clicks' => 'unsigned int',
      'social_impressions' => 'unsigned int',
      'social_spent' => 'unsigned int',
      'social_unique_clicks' => 'unsigned int',
      'social_unique_impressions' => 'unsigned int',
      'spent' => 'unsigned int',
      'start_time' => 'datetime',
      'unique_clicks' => 'unsigned int',
      'unique_impressions' => 'unsigned int',
    );
  }
}
