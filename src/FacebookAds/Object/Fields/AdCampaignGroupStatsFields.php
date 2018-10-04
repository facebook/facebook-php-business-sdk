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
  const ID = 'id';

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
      'id' => 'string',
    );
  }
}
