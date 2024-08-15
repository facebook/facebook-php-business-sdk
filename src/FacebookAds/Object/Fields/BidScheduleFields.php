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

class BidScheduleFields extends AbstractEnum {

  const AD_OBJECT_ID = 'ad_object_id';
  const BID_RECURRENCE_TYPE = 'bid_recurrence_type';
  const BID_TIMEZONE = 'bid_timezone';
  const BID_VALUE = 'bid_value';
  const ID = 'id';
  const STATUS = 'status';
  const TIME_END = 'time_end';
  const TIME_START = 'time_start';

  public function getFieldTypes() {
    return array(
      'ad_object_id' => 'string',
      'bid_recurrence_type' => 'string',
      'bid_timezone' => 'string',
      'bid_value' => 'int',
      'id' => 'string',
      'status' => 'string',
      'time_end' => 'datetime',
      'time_start' => 'datetime',
    );
  }
}
