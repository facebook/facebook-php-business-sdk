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

class OpenGraphObjectFields extends AbstractEnum {

  const ADMINS = 'admins';
  const APPLICATION = 'application';
  const AUDIO = 'audio';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const DETERMINER = 'determiner';
  const ENGAGEMENT = 'engagement';
  const ID = 'id';
  const IMAGE = 'image';
  const IS_SCRAPED = 'is_scraped';
  const LOCALE = 'locale';
  const LOCATION = 'location';
  const POST_ACTION_ID = 'post_action_id';
  const PROFILE_ID = 'profile_id';
  const RESTRICTIONS = 'restrictions';
  const SEE_ALSO = 'see_also';
  const SITE_NAME = 'site_name';
  const TITLE = 'title';
  const TYPE = 'type';
  const UPDATED_TIME = 'updated_time';
  const VIDEO = 'video';

  public function getFieldTypes() {
    return array(
      'admins' => 'list<Object>',
      'application' => 'Object',
      'audio' => 'list<Object>',
      'created_time' => 'datetime',
      'description' => 'string',
      'determiner' => 'string',
      'engagement' => 'Engagement',
      'id' => 'string',
      'image' => 'list<Object>',
      'is_scraped' => 'bool',
      'locale' => 'Object',
      'location' => 'Location',
      'post_action_id' => 'string',
      'profile_id' => 'Object',
      'restrictions' => 'Object',
      'see_also' => 'list<string>',
      'site_name' => 'string',
      'title' => 'string',
      'type' => 'string',
      'updated_time' => 'datetime',
      'video' => 'list<Object>',
    );
  }
}
