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

class AdActivityFields extends AbstractEnum {

  const ACTOR_ID = 'actor_id';
  const ACTOR_NAME = 'actor_name';
  const APPLICATION_ID = 'application_id';
  const APPLICATION_NAME = 'application_name';
  const DATE_TIME_IN_TIMEZONE = 'date_time_in_timezone';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const EXTRA_DATA = 'extra_data';
  const OBJECT_ID = 'object_id';
  const OBJECT_NAME = 'object_name';
  const OBJECT_TYPE = 'object_type';
  const TRANSLATED_EVENT_TYPE = 'translated_event_type';

  public function getFieldTypes() {
    return array(
      'actor_id' => 'string',
      'actor_name' => 'string',
      'application_id' => 'string',
      'application_name' => 'string',
      'date_time_in_timezone' => 'string',
      'event_time' => 'datetime',
      'event_type' => 'EventType',
      'extra_data' => 'string',
      'object_id' => 'string',
      'object_name' => 'string',
      'object_type' => 'string',
      'translated_event_type' => 'string',
    );
  }
}
