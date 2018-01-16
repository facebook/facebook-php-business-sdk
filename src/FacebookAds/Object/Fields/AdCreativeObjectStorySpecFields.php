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

class AdCreativeObjectStorySpecFields extends AbstractEnum {

  const INSTAGRAM_ACTOR_ID = 'instagram_actor_id';
  const LINK_DATA = 'link_data';
  const PAGE_ID = 'page_id';
  const PHOTO_DATA = 'photo_data';
  const TEMPLATE_DATA = 'template_data';
  const TEXT_DATA = 'text_data';
  const VIDEO_DATA = 'video_data';

  public function getFieldTypes() {
    return array(
      'instagram_actor_id' => 'string',
      'link_data' => 'AdCreativeLinkData',
      'page_id' => 'string',
      'photo_data' => 'AdCreativePhotoData',
      'template_data' => 'AdCreativeLinkData',
      'text_data' => 'AdCreativeTextData',
      'video_data' => 'AdCreativeVideoData',
    );
  }
}
