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

class AdCreativeObjectStorySpecFields extends AbstractEnum {

  const INSTAGRAM_ACTOR_ID = 'instagram_actor_id';
  const LINK_DATA = 'link_data';
  const PAGE_ID = 'page_id';
  const PHOTO_DATA = 'photo_data';
  const PRODUCT_DATA = 'product_data';
  const TEMPLATE_DATA = 'template_data';
  const TEXT_DATA = 'text_data';
  const THREADS_USER_ID = 'threads_user_id';
  const VIDEO_DATA = 'video_data';

  public function getFieldTypes() {
    return array(
      'instagram_actor_id' => 'string',
      'link_data' => 'AdCreativeLinkData',
      'page_id' => 'string',
      'photo_data' => 'AdCreativePhotoData',
      'product_data' => 'list<AdCreativeProductData>',
      'template_data' => 'AdCreativeLinkData',
      'text_data' => 'AdCreativeTextData',
      'threads_user_id' => 'string',
      'video_data' => 'AdCreativeVideoData',
    );
  }
}
