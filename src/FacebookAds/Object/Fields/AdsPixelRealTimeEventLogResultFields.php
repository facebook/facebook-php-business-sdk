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

class AdsPixelRealTimeEventLogResultFields extends AbstractEnum {

  const DATA_JSON = 'data_json';
  const DEDUP_DATA = 'dedup_data';
  const DEVICE_TYPE = 'device_type';
  const DOMAIN_CONTROL_RULE_REJECTION = 'domain_control_rule_rejection';
  const EVENT = 'event';
  const EVENT_DETECTION_METHOD = 'event_detection_method';
  const IN_IFRAME = 'in_iframe';
  const MATCHED_RULE_CONDITIONS = 'matched_rule_conditions';
  const RESOLVED_LINK = 'resolved_link';
  const SOURCE_RULE_CONDITION = 'source_rule_condition';
  const TIMESTAMP = 'timestamp';
  const TRACE_ID = 'trace_id';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'data_json' => 'string',
      'dedup_data' => 'string',
      'device_type' => 'string',
      'domain_control_rule_rejection' => 'string',
      'event' => 'string',
      'event_detection_method' => 'string',
      'in_iframe' => 'bool',
      'matched_rule_conditions' => 'string',
      'resolved_link' => 'string',
      'source_rule_condition' => 'string',
      'timestamp' => 'string',
      'trace_id' => 'string',
      'url' => 'string',
    );
  }
}
