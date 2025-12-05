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

class AdCreativeLinkDataChildAttachmentFields extends AbstractEnum {

  const ANDROID_URL = 'android_url';
  const CALL_TO_ACTION = 'call_to_action';
  const CAPTION = 'caption';
  const DESCRIPTION = 'description';
  const IG_MEDIA_ID = 'ig_media_id';
  const IMAGE_CROPS = 'image_crops';
  const IMAGE_HASH = 'image_hash';
  const IOS_URL = 'ios_url';
  const LINK = 'link';
  const MARKETING_MESSAGE_BUTTONS = 'marketing_message_buttons';
  const NAME = 'name';
  const PICTURE = 'picture';
  const PLACE_DATA = 'place_data';
  const STATIC_CARD = 'static_card';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'android_url' => 'string',
      'call_to_action' => 'AdCreativeLinkDataCallToAction',
      'caption' => 'string',
      'description' => 'string',
      'ig_media_id' => 'string',
      'image_crops' => 'AdsImageCrops',
      'image_hash' => 'string',
      'ios_url' => 'string',
      'link' => 'string',
      'marketing_message_buttons' => 'list<Object>',
      'name' => 'string',
      'picture' => 'string',
      'place_data' => 'AdCreativePlaceData',
      'static_card' => 'bool',
      'video_id' => 'string',
    );
  }
}
