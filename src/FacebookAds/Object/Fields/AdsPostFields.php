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

class AdsPostFields extends AbstractEnum {

  const ADMIN_CREATOR = 'admin_creator';
  const CREATION_TIME = 'creation_time';
  const FEED_AUDIENCE_DESCRIPTION = 'feed_audience_description';
  const FEED_TARGETING = 'feed_targeting';
  const ID = 'id';
  const MESSAGE = 'message';
  const MODIFIED_TIME = 'modified_time';
  const OG_ACTION_SUMMARY = 'og_action_summary';
  const PERMALINK_URL = 'permalink_url';
  const PLACE = 'place';
  const PRIVACY_DESCRIPTION = 'privacy_description';
  const PROMOTION_INFO = 'promotion_info';
  const SCHEDULED_PUBLISH_TIME = 'scheduled_publish_time';
  const STORY_TOKEN = 'story_token';
  const THUMBNAIL = 'thumbnail';
  const TYPE = 'type';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'admin_creator' => 'User',
      'creation_time' => 'datetime',
      'feed_audience_description' => 'string',
      'feed_targeting' => 'Targeting',
      'id' => 'string',
      'message' => 'string',
      'modified_time' => 'datetime',
      'og_action_summary' => 'string',
      'permalink_url' => 'string',
      'place' => 'Place',
      'privacy_description' => 'string',
      'promotion_info' => 'Object',
      'scheduled_publish_time' => 'datetime',
      'story_token' => 'string',
      'thumbnail' => 'string',
      'type' => 'string',
      'video_id' => 'string',
    );
  }
}
