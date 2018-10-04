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

class AdScriptFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const API_VERSION = 'api_version';
  const CREATED_TIME = 'created_time';
  const CREATOR_ID = 'creator_id';
  const ID = 'id';
  const NAME = 'name';
  const SCHEDULE_SPEC = 'schedule_spec';
  const SCRIPT = 'script';
  const STATUS = 'status';
  const UPDATED_TIME = 'updated_time';
  const USER_ID = 'user_id';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'api_version' => 'string',
      'created_time' => 'datetime',
      'creator_id' => 'User',
      'id' => 'string',
      'name' => 'string',
      'schedule_spec' => 'Object',
      'script' => 'string',
      'status' => 'string',
      'updated_time' => 'datetime',
      'user_id' => 'User',
    );
  }
}
