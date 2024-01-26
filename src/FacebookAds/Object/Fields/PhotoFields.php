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

class PhotoFields extends AbstractEnum {

  const ALBUM = 'album';
  const ALT_TEXT = 'alt_text';
  const ALT_TEXT_CUSTOM = 'alt_text_custom';
  const BACKDATED_TIME = 'backdated_time';
  const BACKDATED_TIME_GRANULARITY = 'backdated_time_granularity';
  const CAN_BACKDATE = 'can_backdate';
  const CAN_DELETE = 'can_delete';
  const CAN_TAG = 'can_tag';
  const CREATED_TIME = 'created_time';
  const EVENT = 'event';
  const FROM = 'from';
  const HEIGHT = 'height';
  const ICON = 'icon';
  const ID = 'id';
  const IMAGES = 'images';
  const LINK = 'link';
  const NAME = 'name';
  const NAME_TAGS = 'name_tags';
  const PAGE_STORY_ID = 'page_story_id';
  const PICTURE = 'picture';
  const PLACE = 'place';
  const POSITION = 'position';
  const SOURCE = 'source';
  const TARGET = 'target';
  const UPDATED_TIME = 'updated_time';
  const WEBP_IMAGES = 'webp_images';
  const WIDTH = 'width';

  public function getFieldTypes() {
    return array(
      'album' => 'Album',
      'alt_text' => 'string',
      'alt_text_custom' => 'string',
      'backdated_time' => 'datetime',
      'backdated_time_granularity' => 'string',
      'can_backdate' => 'bool',
      'can_delete' => 'bool',
      'can_tag' => 'bool',
      'created_time' => 'datetime',
      'event' => 'Event',
      'from' => 'Object',
      'height' => 'unsigned int',
      'icon' => 'string',
      'id' => 'string',
      'images' => 'list<PlatformImageSource>',
      'link' => 'string',
      'name' => 'string',
      'name_tags' => 'list<EntityAtTextRange>',
      'page_story_id' => 'string',
      'picture' => 'string',
      'place' => 'Place',
      'position' => 'unsigned int',
      'source' => 'string',
      'target' => 'Profile',
      'updated_time' => 'datetime',
      'webp_images' => 'list<PlatformImageSource>',
      'width' => 'unsigned int',
    );
  }
}
