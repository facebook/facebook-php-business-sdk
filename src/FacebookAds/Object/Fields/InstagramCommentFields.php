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

class InstagramCommentFields extends AbstractEnum {

  const COMMENT_TYPE = 'comment_type';
  const CREATED_AT = 'created_at';
  const ID = 'id';
  const INSTAGRAM_COMMENT_ID = 'instagram_comment_id';
  const INSTAGRAM_USER = 'instagram_user';
  const MENTIONED_INSTAGRAM_USERS = 'mentioned_instagram_users';
  const MESSAGE = 'message';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'comment_type' => 'string',
      'created_at' => 'datetime',
      'id' => 'string',
      'instagram_comment_id' => 'string',
      'instagram_user' => 'InstagramUser',
      'mentioned_instagram_users' => 'list<InstagramUser>',
      'message' => 'string',
      'username' => 'string',
    );
  }
}
