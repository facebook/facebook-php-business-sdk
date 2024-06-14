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

class ExternalEventSourceCPASEventsDebuggingFields extends AbstractEnum {

  const ACTUAL_EVENT_TIME = 'actual_event_time';
  const APP_VERSION = 'app_version';
  const CONTENT_URL = 'content_url';
  const DEVICE_OS = 'device_os';
  const DIAGNOSTIC = 'diagnostic';
  const EVENT_NAME = 'event_name';
  const EVENT_TIME = 'event_time';
  const MISSING_IDS = 'missing_ids';
  const SEVERITY = 'severity';

  public function getFieldTypes() {
    return array(
      'actual_event_time' => 'int',
      'app_version' => 'string',
      'content_url' => 'string',
      'device_os' => 'string',
      'diagnostic' => 'string',
      'event_name' => 'string',
      'event_time' => 'int',
      'missing_ids' => 'string',
      'severity' => 'string',
    );
  }
}
