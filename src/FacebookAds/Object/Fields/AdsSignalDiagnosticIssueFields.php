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

class AdsSignalDiagnosticIssueFields extends AbstractEnum {

  const DATA_SOURCE_ID = 'data_source_id';
  const DATA_SOURCE_TYPE = 'data_source_type';
  const DIAGNOSTIC_TYPE = 'diagnostic_type';
  const EVENT_NAME = 'event_name';
  const TRAFFIC_ANOMALY_DROP_PERCENTAGE = 'traffic_anomaly_drop_percentage';
  const TRAFFIC_ANOMALY_DROP_TIMESTAMP = 'traffic_anomaly_drop_timestamp';

  public function getFieldTypes() {
    return array(
      'data_source_id' => 'AdsPixel',
      'data_source_type' => 'string',
      'diagnostic_type' => 'string',
      'event_name' => 'string',
      'traffic_anomaly_drop_percentage' => 'float',
      'traffic_anomaly_drop_timestamp' => 'datetime',
    );
  }
}
