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

class ProductFeedUploadFields extends AbstractEnum {

  const END_TIME = 'end_time';
  const ERROR_COUNT = 'error_count';
  const ERROR_REPORT = 'error_report';
  const FILENAME = 'filename';
  const ID = 'id';
  const INPUT_METHOD = 'input_method';
  const NUM_DELETED_ITEMS = 'num_deleted_items';
  const NUM_DETECTED_ITEMS = 'num_detected_items';
  const NUM_INVALID_ITEMS = 'num_invalid_items';
  const NUM_PERSISTED_ITEMS = 'num_persisted_items';
  const START_TIME = 'start_time';
  const URL = 'url';
  const WARNING_COUNT = 'warning_count';

  public function getFieldTypes() {
    return array(
      'end_time' => 'datetime',
      'error_count' => 'int',
      'error_report' => 'ProductFeedUploadErrorReport',
      'filename' => 'string',
      'id' => 'string',
      'input_method' => 'InputMethod',
      'num_deleted_items' => 'int',
      'num_detected_items' => 'int',
      'num_invalid_items' => 'int',
      'num_persisted_items' => 'int',
      'start_time' => 'datetime',
      'url' => 'string',
      'warning_count' => 'int',
    );
  }
}
