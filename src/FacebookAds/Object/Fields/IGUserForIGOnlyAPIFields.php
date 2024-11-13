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

class IGUserForIGOnlyAPIFields extends AbstractEnum {

  const ACCOUNT_TYPE = 'account_type';
  const BIOGRAPHY = 'biography';
  const FOLLOWERS_COUNT = 'followers_count';
  const FOLLOWS_COUNT = 'follows_count';
  const ID = 'id';
  const MEDIA_COUNT = 'media_count';
  const NAME = 'name';
  const PROFILE_PICTURE_URL = 'profile_picture_url';
  const USER_ID = 'user_id';
  const USERNAME = 'username';
  const WEBSITE = 'website';

  public function getFieldTypes() {
    return array(
      'account_type' => 'string',
      'biography' => 'string',
      'followers_count' => 'int',
      'follows_count' => 'int',
      'id' => 'string',
      'media_count' => 'int',
      'name' => 'string',
      'profile_picture_url' => 'string',
      'user_id' => 'int',
      'username' => 'string',
      'website' => 'string',
    );
  }
}
