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

class AdAsyncRequestSetFields extends AbstractEnum {

  const CANCELED_COUNT = 'canceled_count';
  const CREATED_TIME = 'created_time';
  const ERROR_COUNT = 'error_count';
  const ID = 'id';
  const IN_PROGRESS_COUNT = 'in_progress_count';
  const INITIAL_COUNT = 'initial_count';
  const IS_COMPLETED = 'is_completed';
  const NAME = 'name';
  const NOTIFICATION_MODE = 'notification_mode';
  const NOTIFICATION_RESULT = 'notification_result';
  const NOTIFICATION_STATUS = 'notification_status';
  const NOTIFICATION_URI = 'notification_uri';
  const OWNER_ID = 'owner_id';
  const SUCCESS_COUNT = 'success_count';
  const TOTAL_COUNT = 'total_count';
  const UPDATED_TIME = 'updated_time';
  const AD_SPECS = 'ad_specs';

  public function getFieldTypes() {
    return array(
      'canceled_count' => 'int',
      'created_time' => 'datetime',
      'error_count' => 'int',
      'id' => 'string',
      'in_progress_count' => 'int',
      'initial_count' => 'unsigned int',
      'is_completed' => 'bool',
      'name' => 'string',
      'notification_mode' => 'NotificationMode',
      'notification_result' => 'AdAsyncRequestSetNotificationResult',
      'notification_status' => 'string',
      'notification_uri' => 'string',
      'owner_id' => 'string',
      'success_count' => 'int',
      'total_count' => 'unsigned int',
      'updated_time' => 'datetime',
      'ad_specs' => 'list<map>',
    );
  }
}
