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

class ProductEventStatFields extends AbstractEnum {

  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const DEVICE_TYPE = 'device_type';
  const EVENT = 'event';
  const EVENT_SOURCE = 'event_source';
  const TOTAL_CONTENT_IDS_MATCHED_OTHER_CATALOGS = 'total_content_ids_matched_other_catalogs';
  const TOTAL_MATCHED_CONTENT_IDS = 'total_matched_content_ids';
  const TOTAL_UNMATCHED_CONTENT_IDS = 'total_unmatched_content_ids';
  const UNIQUE_CONTENT_IDS_MATCHED_OTHER_CATALOGS = 'unique_content_ids_matched_other_catalogs';
  const UNIQUE_MATCHED_CONTENT_IDS = 'unique_matched_content_ids';
  const UNIQUE_UNMATCHED_CONTENT_IDS = 'unique_unmatched_content_ids';

  public function getFieldTypes() {
    return array(
      'date_start' => 'string',
      'date_stop' => 'string',
      'device_type' => 'DeviceType',
      'event' => 'Event',
      'event_source' => 'ExternalEventSource',
      'total_content_ids_matched_other_catalogs' => 'int',
      'total_matched_content_ids' => 'int',
      'total_unmatched_content_ids' => 'int',
      'unique_content_ids_matched_other_catalogs' => 'int',
      'unique_matched_content_ids' => 'int',
      'unique_unmatched_content_ids' => 'int',
    );
  }
}
