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

class IGCommentFields extends AbstractEnum {

  const FROM = 'from';
  const HIDDEN = 'hidden';
  const ID = 'id';
  const LIKE_COUNT = 'like_count';
  const MEDIA = 'media';
  const PARENT_ID = 'parent_id';
  const TEXT = 'text';
  const TIMESTAMP = 'timestamp';
  const USER = 'user';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'from' => 'IGCommentFromUser',
      'hidden' => 'bool',
      'id' => 'string',
      'like_count' => 'int',
      'media' => 'IGMedia',
      'parent_id' => 'string',
      'text' => 'string',
      'timestamp' => 'datetime',
      'user' => 'IGUser',
      'username' => 'string',
    );
  }
}
