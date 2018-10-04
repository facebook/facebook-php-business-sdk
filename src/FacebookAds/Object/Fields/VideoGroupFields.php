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

class VideoGroupFields extends AbstractEnum {

  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const IG_PROFILE_IDS = 'ig_profile_ids';
  const IS_DISABLED = 'is_disabled';
  const IS_FB_VIDEO_GROUP = 'is_fb_video_group';
  const LAST_USED_TIME = 'last_used_time';
  const LENGTH = 'length';
  const NAME = 'name';
  const PAGE_ID = 'page_id';
  const PAGE_IDS = 'page_ids';
  const PICTURE = 'picture';
  const PLACEMENTS = 'placements';
  const VIDEO_GROUP_TYPES = 'video_group_types';
  const VIDEOS = 'videos';
  const VIEWS = 'views';

  public function getFieldTypes() {
    return array(
      'created_time' => 'string',
      'description' => 'string',
      'id' => 'string',
      'ig_profile_ids' => 'list<string>',
      'is_disabled' => 'bool',
      'is_fb_video_group' => 'bool',
      'last_used_time' => 'string',
      'length' => 'float',
      'name' => 'string',
      'page_id' => 'string',
      'page_ids' => 'list<string>',
      'picture' => 'string',
      'placements' => 'list<string>',
      'video_group_types' => 'list<string>',
      'videos' => 'list<string>',
      'views' => 'unsigned int',
    );
  }
}
