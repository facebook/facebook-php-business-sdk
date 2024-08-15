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

class AdAssetFeedSpecVideoFields extends AbstractEnum {

  const ADLABELS = 'adlabels';
  const CAPTION_IDS = 'caption_ids';
  const THUMBNAIL_HASH = 'thumbnail_hash';
  const THUMBNAIL_URL = 'thumbnail_url';
  const URL_TAGS = 'url_tags';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'adlabels' => 'list<AdAssetFeedSpecAssetLabel>',
      'caption_ids' => 'list<string>',
      'thumbnail_hash' => 'string',
      'thumbnail_url' => 'string',
      'url_tags' => 'string',
      'video_id' => 'string',
    );
  }
}
