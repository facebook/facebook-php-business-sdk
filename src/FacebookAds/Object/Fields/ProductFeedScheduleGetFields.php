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

class ProductFeedScheduleGetFields extends AbstractEnum {

  const DAY_OF_MONTH = 'day_of_month';
  const DAY_OF_WEEK = 'day_of_week';
  const FEED_SCHEDULE_MODE = 'feed_schedule_mode';
  const HOUR = 'hour';
  const ID = 'id';
  const INTERVAL = 'interval';
  const INTERVAL_COUNT = 'interval_count';
  const MINUTE = 'minute';
  const NEXT_SCHEDULED_UPLOAD_TIME = 'next_scheduled_upload_time';
  const STATUS = 'status';
  const TIMEZONE = 'timezone';
  const URL = 'url';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'day_of_month' => 'int',
      'day_of_week' => 'string',
      'feed_schedule_mode' => 'FeedScheduleMode',
      'hour' => 'int',
      'id' => 'int',
      'interval' => 'string',
      'interval_count' => 'int',
      'minute' => 'int',
      'next_scheduled_upload_time' => 'string',
      'status' => 'Status',
      'timezone' => 'string',
      'url' => 'string',
      'username' => 'string',
    );
  }
}
