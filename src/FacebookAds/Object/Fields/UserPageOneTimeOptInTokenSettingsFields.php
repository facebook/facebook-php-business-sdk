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

class UserPageOneTimeOptInTokenSettingsFields extends AbstractEnum {

  const CREATION_TIMESTAMP = 'creation_timestamp';
  const NEXT_ELIGIBLE_TIME = 'next_eligible_time';
  const NOTIFICATION_MESSAGES_FREQUENCY = 'notification_messages_frequency';
  const NOTIFICATION_MESSAGES_REOPTIN = 'notification_messages_reoptin';
  const NOTIFICATION_MESSAGES_TIMEZONE = 'notification_messages_timezone';
  const NOTIFICATION_MESSAGES_TOKEN = 'notification_messages_token';
  const RECIPIENT_ID = 'recipient_id';
  const TOKEN_EXPIRY_TIMESTAMP = 'token_expiry_timestamp';
  const TOPIC_TITLE = 'topic_title';
  const USER_TOKEN_STATUS = 'user_token_status';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'creation_timestamp' => 'int',
      'next_eligible_time' => 'int',
      'notification_messages_frequency' => 'string',
      'notification_messages_reoptin' => 'string',
      'notification_messages_timezone' => 'string',
      'notification_messages_token' => 'string',
      'recipient_id' => 'string',
      'token_expiry_timestamp' => 'int',
      'topic_title' => 'string',
      'user_token_status' => 'string',
      'id' => 'string',
    );
  }
}
