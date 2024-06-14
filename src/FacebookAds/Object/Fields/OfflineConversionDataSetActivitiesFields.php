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

class OfflineConversionDataSetActivitiesFields extends AbstractEnum {

  const ACTOR_ID = 'actor_id';
  const ACTOR_NAME = 'actor_name';
  const ADACCOUNT_ID = 'adaccount_id';
  const ADACCOUNT_NAME = 'adaccount_name';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const EXTRA_DATA = 'extra_data';
  const OBJECT_ID = 'object_id';
  const OBJECT_NAME = 'object_name';

  public function getFieldTypes() {
    return array(
      'actor_id' => 'int',
      'actor_name' => 'string',
      'adaccount_id' => 'int',
      'adaccount_name' => 'string',
      'event_time' => 'datetime',
      'event_type' => 'string',
      'extra_data' => 'string',
      'object_id' => 'int',
      'object_name' => 'string',
    );
  }
}
