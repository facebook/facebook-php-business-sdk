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

class GroupFields extends AbstractEnum {

  const ARCHIVED = 'archived';
  const COVER = 'cover';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const EMAIL = 'email';
  const ICON = 'icon';
  const ID = 'id';
  const LINK = 'link';
  const MEMBER_COUNT = 'member_count';
  const MEMBER_REQUEST_COUNT = 'member_request_count';
  const NAME = 'name';
  const PARENT = 'parent';
  const PERMISSIONS = 'permissions';
  const PRIVACY = 'privacy';
  const PURPOSE = 'purpose';
  const SUBDOMAIN = 'subdomain';
  const UPDATED_TIME = 'updated_time';
  const VENUE = 'venue';

  public function getFieldTypes() {
    return array(
      'archived' => 'bool',
      'cover' => 'CoverPhoto',
      'created_time' => 'datetime',
      'description' => 'string',
      'email' => 'string',
      'icon' => 'string',
      'id' => 'string',
      'link' => 'string',
      'member_count' => 'unsigned int',
      'member_request_count' => 'unsigned int',
      'name' => 'string',
      'parent' => 'Object',
      'permissions' => 'list<string>',
      'privacy' => 'string',
      'purpose' => 'string',
      'subdomain' => 'string',
      'updated_time' => 'datetime',
      'venue' => 'Location',
    );
  }
}
