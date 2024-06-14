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

class BusinessSettingLogsDataFields extends AbstractEnum {

  const ACTOR = 'actor';
  const EVENT_OBJECT = 'event_object';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const EXTRA_DATA = 'extra_data';

  public function getFieldTypes() {
    return array(
      'actor' => 'Object',
      'event_object' => 'Object',
      'event_time' => 'string',
      'event_type' => 'string',
      'extra_data' => 'Object',
    );
  }
}
