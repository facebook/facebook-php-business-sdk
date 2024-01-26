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

  const CALL_TO_ACTION = 'call_to_action';
  const CAPTION = 'caption';
  const DESCRIPTION = 'description';
  const IMAGE_CROPS = 'image_crops';
  const IMAGE_HASH = 'image_hash';
  const LINK = 'link';
  const NAME = 'name';
  const PICTURE = 'picture';
  const PLACE_DATA = 'place_data';
  const STATIC_CARD = 'static_card';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'call_to_action' => 'AdCreativeLinkDataCallToAction',
      'caption' => 'string',
      'description' => 'string',
      'image_crops' => 'AdsImageCrops',
      'image_hash' => 'string',
      'link' => 'string',
      'name' => 'string',
      'picture' => 'string',
      'place_data' => 'AdCreativePlaceData',
      'static_card' => 'bool',
      'video_id' => 'string',
    );
  }
}
