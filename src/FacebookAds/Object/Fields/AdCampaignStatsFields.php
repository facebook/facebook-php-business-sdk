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

class AdCampaignStatsFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACTIONS = 'actions';
  const ADGROUP_ID = 'adgroup_id';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_IDS = 'campaign_ids';
  const CLICKS = 'clicks';
  const END_TIME = 'end_time';
  const ID = 'id';
  const IMPRESSIONS = 'impressions';
  const INLINE_ACTIONS = 'inline_actions';
  const IO_NUMBER = 'io_number';
  const IS_COMPLETED = 'is_completed';
  const LINE_NUMBER = 'line_number';
  const NEWSFEED_POSITION = 'newsfeed_position';
  const SOCIAL_CLICKS = 'social_clicks';
  const SOCIAL_IMPRESSIONS = 'social_impressions';
  const SOCIAL_SPENT = 'social_spent';
  const SOCIAL_UNIQUE_CLICKS = 'social_unique_clicks';
  const SOCIAL_UNIQUE_IMPRESSIONS = 'social_unique_impressions';
  const SPENT = 'spent';
  const START_TIME = 'start_time';
  const TOPLINE_ID = 'topline_id';
  const UNIQUE_CLICKS = 'unique_clicks';
  const UNIQUE_IMPRESSIONS = 'unique_impressions';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'actions' => 'Object',
      'adgroup_id' => 'string',
      'campaign_id' => 'string',
      'campaign_ids' => 'list<string>',
      'clicks' => 'unsigned int',
      'end_time' => 'Object',
      'id' => 'string',
      'impressions' => 'string',
      'inline_actions' => 'map',
      'io_number' => 'unsigned int',
      'is_completed' => 'bool',
      'line_number' => 'unsigned int',
      'newsfeed_position' => 'Object',
      'social_clicks' => 'unsigned int',
      'social_impressions' => 'string',
      'social_spent' => 'unsigned int',
      'social_unique_clicks' => 'unsigned int',
      'social_unique_impressions' => 'string',
      'spent' => 'int',
      'start_time' => 'Object',
      'topline_id' => 'string',
      'unique_clicks' => 'unsigned int',
      'unique_impressions' => 'string',
    );
  }
}
