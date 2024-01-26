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

class OfflineConversionDataSetUploadFields extends AbstractEnum {

  const API_CALLS = 'api_calls';
  const CREATION_TIME = 'creation_time';
  const DUPLICATE_ENTRIES = 'duplicate_entries';
  const EVENT_STATS = 'event_stats';
  const EVENT_TIME_MAX = 'event_time_max';
  const EVENT_TIME_MIN = 'event_time_min';
  const FIRST_UPLOAD_TIME = 'first_upload_time';
  const ID = 'id';
  const IS_EXCLUDED_FOR_LIFT = 'is_excluded_for_lift';
  const LAST_UPLOAD_TIME = 'last_upload_time';
  const MATCH_RATE_APPROX = 'match_rate_approx';
  const MATCHED_ENTRIES = 'matched_entries';
  const UPLOAD_TAG = 'upload_tag';
  const VALID_ENTRIES = 'valid_entries';

  public function getFieldTypes() {
    return array(
      'api_calls' => 'int',
      'creation_time' => 'int',
      'duplicate_entries' => 'int',
      'event_stats' => 'string',
      'event_time_max' => 'int',
      'event_time_min' => 'int',
      'first_upload_time' => 'int',
      'id' => 'string',
      'is_excluded_for_lift' => 'bool',
      'last_upload_time' => 'int',
      'match_rate_approx' => 'int',
      'matched_entries' => 'int',
      'upload_tag' => 'string',
      'valid_entries' => 'int',
    );
  }
}
