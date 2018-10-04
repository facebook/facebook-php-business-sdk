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

class MediaCopyrightAttributionFields extends AbstractEnum {

  const ATTRIBUTION_TARGET_ID = 'attribution_target_id';
  const ATTRIBUTION_TARGET_NAME = 'attribution_target_name';
  const ATTRIBUTION_TYPE = 'attribution_type';
  const ATTRIBUTION_URI = 'attribution_uri';
  const COPYRIGHT_COUNT = 'copyright_count';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const ID = 'id';
  const IS_ENABLED = 'is_enabled';
  const LINK_TITLE = 'link_title';
  const MATCH_COUNT = 'match_count';
  const OWNER = 'owner';
  const STATUS = 'status';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'attribution_target_id' => 'string',
      'attribution_target_name' => 'string',
      'attribution_type' => 'string',
      'attribution_uri' => 'string',
      'copyright_count' => 'int',
      'creation_time' => 'datetime',
      'creator' => 'Profile',
      'id' => 'string',
      'is_enabled' => 'bool',
      'link_title' => 'string',
      'match_count' => 'int',
      'owner' => 'Page',
      'status' => 'string',
      'title' => 'string',
    );
  }
}
