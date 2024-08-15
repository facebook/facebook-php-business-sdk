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

class LinkedInstagramAccountDataFields extends AbstractEnum {

  const ACCESS_TOKEN = 'access_token';
  const ANALYTICS_CLAIM = 'analytics_claim';
  const FULL_NAME = 'full_name';
  const PROFILE_PICTURE_URL = 'profile_picture_url';
  const USER_ID = 'user_id';
  const USER_NAME = 'user_name';

  public function getFieldTypes() {
    return array(
      'access_token' => 'string',
      'analytics_claim' => 'string',
      'full_name' => 'string',
      'profile_picture_url' => 'string',
      'user_id' => 'string',
      'user_name' => 'string',
    );
  }
}
