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

class MusicVideoCopyrightFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const DISPLAYED_MATCHES_COUNT = 'displayed_matches_count';
  const ID = 'id';
  const IN_CONFLICT = 'in_conflict';
  const ISRC = 'isrc';
  const MATCH_RULE = 'match_rule';
  const OWNERSHIP_COUNTRIES = 'ownership_countries';
  const REFERENCE_FILE_STATUS = 'reference_file_status';
  const RIDGE_MONITORING_STATUS = 'ridge_monitoring_status';
  const TAGS = 'tags';
  const UPDATE_TIME = 'update_time';
  const VIDEO_ASSET = 'video_asset';
  const WHITELISTED_FB_USERS = 'whitelisted_fb_users';
  const WHITELISTED_IG_USERS = 'whitelisted_ig_users';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'displayed_matches_count' => 'int',
      'id' => 'string',
      'in_conflict' => 'bool',
      'isrc' => 'string',
      'match_rule' => 'VideoCopyrightRule',
      'ownership_countries' => 'list<string>',
      'reference_file_status' => 'string',
      'ridge_monitoring_status' => 'string',
      'tags' => 'list<string>',
      'update_time' => 'datetime',
      'video_asset' => 'CopyrightReferenceContainer',
      'whitelisted_fb_users' => 'list<Object>',
      'whitelisted_ig_users' => 'list<string>',
    );
  }
}
