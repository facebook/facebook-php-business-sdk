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

class IGMediaFields extends AbstractEnum {

  const CAPTION = 'caption';
  const COMMENTS_COUNT = 'comments_count';
  const COPYRIGHT_CHECK_INFORMATION = 'copyright_check_information';
  const ID = 'id';
  const IG_ID = 'ig_id';
  const IS_COMMENT_ENABLED = 'is_comment_enabled';
  const IS_SHARED_TO_FEED = 'is_shared_to_feed';
  const LIKE_COUNT = 'like_count';
  const MEDIA_PRODUCT_TYPE = 'media_product_type';
  const MEDIA_TYPE = 'media_type';
  const MEDIA_URL = 'media_url';
  const OWNER = 'owner';
  const PERMALINK = 'permalink';
  const SHORTCODE = 'shortcode';
  const THUMBNAIL_URL = 'thumbnail_url';
  const TIMESTAMP = 'timestamp';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'caption' => 'string',
      'comments_count' => 'int',
      'copyright_check_information' => 'IGVideoCopyrightCheckMatchesInformation',
      'id' => 'string',
      'ig_id' => 'string',
      'is_comment_enabled' => 'bool',
      'is_shared_to_feed' => 'bool',
      'like_count' => 'int',
      'media_product_type' => 'string',
      'media_type' => 'string',
      'media_url' => 'string',
      'owner' => 'IGUser',
      'permalink' => 'string',
      'shortcode' => 'string',
      'thumbnail_url' => 'string',
      'timestamp' => 'datetime',
      'username' => 'string',
    );
  }
}
