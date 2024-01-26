<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
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
