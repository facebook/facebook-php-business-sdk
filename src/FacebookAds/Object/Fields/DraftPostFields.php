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

class DraftPostFields extends AbstractEnum {

  const ADMIN_CREATOR = 'admin_creator';
  const CREATION_TIME = 'creation_time';
  const FEED_AUDIENCE_DESCRIPTION = 'feed_audience_description';
  const FEED_TARGETING = 'feed_targeting';
  const ID = 'id';
  const IS_POST_IN_GOOD_STATE = 'is_post_in_good_state';
  const MESSAGE = 'message';
  const MODIFIED_TIME = 'modified_time';
  const OG_ACTION_SUMMARY = 'og_action_summary';
  const PERMALINK_URL = 'permalink_url';
  const PLACE = 'place';
  const PRIVACY_DESCRIPTION = 'privacy_description';
  const SCHEDULED_FAILURE_NOTICE = 'scheduled_failure_notice';
  const SCHEDULED_PUBLISH_TIME = 'scheduled_publish_time';
  const STORY_TOKEN = 'story_token';
  const THUMBNAIL = 'thumbnail';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'admin_creator' => 'User',
      'creation_time' => 'datetime',
      'feed_audience_description' => 'string',
      'feed_targeting' => 'Targeting',
      'id' => 'string',
      'is_post_in_good_state' => 'bool',
      'message' => 'string',
      'modified_time' => 'datetime',
      'og_action_summary' => 'string',
      'permalink_url' => 'string',
      'place' => 'Place',
      'privacy_description' => 'string',
      'scheduled_failure_notice' => 'string',
      'scheduled_publish_time' => 'datetime',
      'story_token' => 'string',
      'thumbnail' => 'string',
      'video_id' => 'string',
    );
  }
}
