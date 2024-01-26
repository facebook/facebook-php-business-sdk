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

class MusicVideoCopyrightFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const DISPLAYED_MATCHES_COUNT = 'displayed_matches_count';
  const ID = 'id';
  const IN_CONFLICT = 'in_conflict';
  const ISRC = 'isrc';
  const MATCH_RULE = 'match_rule';
  const OWNERSHIP_COUNTRIES = 'ownership_countries';
  const REFERENCE_FILE_STATUS = 'reference_file_status';
  const RIDGE_MONITORING_STATUS = 'ridge_monitoring_status';
  const TAGS = 'tags';
  const UPDATE_TIME = 'update_time';
  const VIDEO_ASSET = 'video_asset';
  const WHITELISTED_FB_USERS = 'whitelisted_fb_users';
  const WHITELISTED_IG_USERS = 'whitelisted_ig_users';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'displayed_matches_count' => 'int',
      'id' => 'string',
      'in_conflict' => 'bool',
      'isrc' => 'string',
      'match_rule' => 'VideoCopyrightRule',
      'ownership_countries' => 'list<string>',
      'reference_file_status' => 'string',
      'ridge_monitoring_status' => 'string',
      'tags' => 'list<string>',
      'update_time' => 'datetime',
      'video_asset' => 'CopyrightReferenceContainer',
      'whitelisted_fb_users' => 'list<Object>',
      'whitelisted_ig_users' => 'list<string>',
    );
  }
}
