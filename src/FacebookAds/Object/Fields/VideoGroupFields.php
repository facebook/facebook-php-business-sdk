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

class VideoGroupFields extends AbstractEnum {

  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const DISABLE_REASON = 'disable_reason';
  const ID = 'id';
  const IG_PROFILE_IDS = 'ig_profile_ids';
  const IS_DISABLED = 'is_disabled';
  const IS_FB_VIDEO_GROUP = 'is_fb_video_group';
  const LAST_USED_TIME = 'last_used_time';
  const LENGTH = 'length';
  const NAME = 'name';
  const PAGE_ID = 'page_id';
  const PAGE_IDS = 'page_ids';
  const PICTURE = 'picture';
  const PLACEMENTS = 'placements';
  const VIDEO_GROUP_TYPES = 'video_group_types';
  const VIDEOS = 'videos';
  const VIEWS = 'views';

  public function getFieldTypes() {
    return array(
      'created_time' => 'string',
      'description' => 'string',
      'disable_reason' => 'string',
      'id' => 'string',
      'ig_profile_ids' => 'list<string>',
      'is_disabled' => 'bool',
      'is_fb_video_group' => 'bool',
      'last_used_time' => 'string',
      'length' => 'float',
      'name' => 'string',
      'page_id' => 'string',
      'page_ids' => 'list<string>',
      'picture' => 'string',
      'placements' => 'list<string>',
      'video_group_types' => 'list<string>',
      'videos' => 'list<string>',
      'views' => 'unsigned int',
    );
  }
}
