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

class PremiumMusicVideoFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const CROSS_POST_VIDEOS = 'cross_post_videos';
  const ELIGIBLE_CROSS_POST_PAGES = 'eligible_cross_post_pages';
  const ID = 'id';
  const PREFERRED_VIDEO_THUMBNAIL_IMAGE_URI = 'preferred_video_thumbnail_image_uri';
  const PREMIUM_MUSIC_VIDEO_METADATA = 'premium_music_video_metadata';
  const SCHEDULED_PUBLISH_TIME = 'scheduled_publish_time';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'string',
      'cross_post_videos' => 'list<Object>',
      'eligible_cross_post_pages' => 'list<Object>',
      'id' => 'string',
      'preferred_video_thumbnail_image_uri' => 'string',
      'premium_music_video_metadata' => 'Object',
      'scheduled_publish_time' => 'int',
      'title' => 'string',
    );
  }
}
