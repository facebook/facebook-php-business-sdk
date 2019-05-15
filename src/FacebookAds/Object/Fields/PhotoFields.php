<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
