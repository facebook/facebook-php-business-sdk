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

class AdsPixelRawFiresResultFields extends AbstractEnum {

  const DATA_JSON = 'data_json';
  const DEVICE_TYPE = 'device_type';
  const EVENT = 'event';
  const EVENT_DETECTION_METHOD = 'event_detection_method';
  const EVENT_SRC = 'event_src';
  const PLACED_URL = 'placed_url';
  const TIMESTAMP = 'timestamp';
  const USER_PII_KEYS = 'user_pii_keys';

  public function getFieldTypes() {
    return array(
      'data_json' => 'string',
      'device_type' => 'string',
      'event' => 'string',
      'event_detection_method' => 'string',
      'event_src' => 'string',
      'placed_url' => 'string',
      'timestamp' => 'datetime',
      'user_pii_keys' => 'string',
    );
  }
}
