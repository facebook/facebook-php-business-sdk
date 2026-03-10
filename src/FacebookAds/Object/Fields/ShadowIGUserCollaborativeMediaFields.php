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

class ShadowIGUserCollaborativeMediaFields extends AbstractEnum {

  const CAPTION = 'caption';
  const COMMENTS_COUNT = 'comments_count';
  const ID = 'id';
  const LIKE_COUNT = 'like_count';
  const MEDIA_PRODUCT_TYPE = 'media_product_type';
  const MEDIA_TYPE = 'media_type';
  const MEDIA_URL = 'media_url';
  const PERMALINK = 'permalink';
  const REPOSTS_COUNT = 'reposts_count';
  const SAVED_COUNT = 'saved_count';
  const SHARES_COUNT = 'shares_count';
  const THUMBNAIL_URL = 'thumbnail_url';
  const TIMESTAMP = 'timestamp';
  const TOTAL_COMMENTS_COUNT = 'total_comments_count';
  const TOTAL_LIKE_COUNT = 'total_like_count';
  const TOTAL_VIEWS_COUNT = 'total_views_count';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'caption' => 'string',
      'comments_count' => 'int',
      'id' => 'string',
      'like_count' => 'int',
      'media_product_type' => 'string',
      'media_type' => 'string',
      'media_url' => 'string',
      'permalink' => 'string',
      'reposts_count' => 'int',
      'saved_count' => 'int',
      'shares_count' => 'int',
      'thumbnail_url' => 'string',
      'timestamp' => 'datetime',
      'total_comments_count' => 'int',
      'total_like_count' => 'int',
      'total_views_count' => 'int',
      'username' => 'string',
    );
  }
}
