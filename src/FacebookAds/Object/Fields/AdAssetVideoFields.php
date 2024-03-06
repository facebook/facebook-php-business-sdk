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

class AdAssetVideoFields extends AbstractEnum {

  const CAPTION_IDS = 'caption_ids';
  const ID = 'id';
  const SOURCE_IMAGE_URL = 'source_image_url';
  const TAG = 'tag';
  const THUMBNAIL_HASH = 'thumbnail_hash';
  const THUMBNAIL_SOURCE = 'thumbnail_source';
  const THUMBNAIL_URL = 'thumbnail_url';
  const URL = 'url';
  const URL_TAGS = 'url_tags';
  const VIDEO_ID = 'video_id';
  const VIDEO_NAME = 'video_name';

  public function getFieldTypes() {
    return array(
      'caption_ids' => 'list<string>',
      'id' => 'string',
      'source_image_url' => 'string',
      'tag' => 'string',
      'thumbnail_hash' => 'string',
      'thumbnail_source' => 'string',
      'thumbnail_url' => 'string',
      'url' => 'string',
      'url_tags' => 'string',
      'video_id' => 'string',
      'video_name' => 'string',
    );
  }
}
