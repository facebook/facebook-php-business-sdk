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
