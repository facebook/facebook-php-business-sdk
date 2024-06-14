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

class BusinessCreativeInsightsFields extends AbstractEnum {

  const ACTIONS = 'actions';
  const AGE = 'age';
  const COUNTRY = 'country';
  const DATE_END = 'date_end';
  const DATE_START = 'date_start';
  const DEVICE_PLATFORM = 'device_platform';
  const GENDER = 'gender';
  const IMPRESSIONS = 'impressions';
  const INLINE_LINK_CLICKS = 'inline_link_clicks';
  const OBJECTIVE = 'objective';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const PLATFORM_POSITION = 'platform_position';
  const PUBLISHER_PLATFORM = 'publisher_platform';
  const QUALITY_RANKING = 'quality_ranking';
  const VIDEO_PLAY_ACTIONS = 'video_play_actions';
  const VIDEO_THRUPLAY_WATCHED_ACTIONS = 'video_thruplay_watched_actions';

  public function getFieldTypes() {
    return array(
      'actions' => 'list<AdsActionStats>',
      'age' => 'string',
      'country' => 'string',
      'date_end' => 'string',
      'date_start' => 'string',
      'device_platform' => 'string',
      'gender' => 'string',
      'impressions' => 'int',
      'inline_link_clicks' => 'int',
      'objective' => 'string',
      'optimization_goal' => 'string',
      'platform_position' => 'string',
      'publisher_platform' => 'string',
      'quality_ranking' => 'string',
      'video_play_actions' => 'list<AdsActionStats>',
      'video_thruplay_watched_actions' => 'list<AdsActionStats>',
    );
  }
}
