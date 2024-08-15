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

class MediaCopyrightAttributionFields extends AbstractEnum {

  const ATTRIBUTION_IG_TARGET_ID = 'attribution_ig_target_id';
  const ATTRIBUTION_TARGET_EMAIL_ADDRESS = 'attribution_target_email_address';
  const ATTRIBUTION_TARGET_ID = 'attribution_target_id';
  const ATTRIBUTION_TARGET_NAME = 'attribution_target_name';
  const ATTRIBUTION_TYPE = 'attribution_type';
  const ATTRIBUTION_URI = 'attribution_uri';
  const COPYRIGHT_COUNT = 'copyright_count';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const ID = 'id';
  const IS_ENABLED = 'is_enabled';
  const LINK_TITLE = 'link_title';
  const MATCH_COUNT = 'match_count';
  const OWNER = 'owner';
  const STATUS = 'status';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'attribution_ig_target_id' => 'string',
      'attribution_target_email_address' => 'string',
      'attribution_target_id' => 'string',
      'attribution_target_name' => 'string',
      'attribution_type' => 'string',
      'attribution_uri' => 'string',
      'copyright_count' => 'int',
      'creation_time' => 'datetime',
      'creator' => 'Profile',
      'id' => 'string',
      'is_enabled' => 'bool',
      'link_title' => 'string',
      'match_count' => 'int',
      'owner' => 'Page',
      'status' => 'string',
      'title' => 'string',
    );
  }
}
