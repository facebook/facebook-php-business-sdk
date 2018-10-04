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

class AsyncSessionFields extends AbstractEnum {

  const APP = 'app';
  const COMPLETE_TIME = 'complete_time';
  const ERROR_CODE = 'error_code';
  const EXCEPTION = 'exception';
  const ID = 'id';
  const METHOD = 'method';
  const NAME = 'name';
  const PAGE = 'page';
  const PERCENT_COMPLETED = 'percent_completed';
  const PLATFORM_VERSION = 'platform_version';
  const RESULT = 'result';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const URI = 'uri';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'app' => 'Application',
      'complete_time' => 'datetime',
      'error_code' => 'int',
      'exception' => 'string',
      'id' => 'string',
      'method' => 'string',
      'name' => 'string',
      'page' => 'Page',
      'percent_completed' => 'int',
      'platform_version' => 'string',
      'result' => 'string',
      'start_time' => 'datetime',
      'status' => 'string',
      'uri' => 'string',
      'user' => 'User',
    );
  }
}
