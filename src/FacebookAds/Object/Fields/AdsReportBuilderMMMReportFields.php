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

class AdsReportBuilderMMMReportFields extends AbstractEnum {

  const ASYNC_STATUS = 'async_status';
  const EXPORT_FORMAT = 'export_format';
  const EXPORT_NAME = 'export_name';
  const EXPORT_TYPE = 'export_type';
  const HAS_SEEN = 'has_seen';
  const ID = 'id';
  const MMM_STATUS = 'mmm_status';
  const TIME_START = 'time_start';

  public function getFieldTypes() {
    return array(
      'async_status' => 'string',
      'export_format' => 'string',
      'export_name' => 'string',
      'export_type' => 'string',
      'has_seen' => 'bool',
      'id' => 'string',
      'mmm_status' => 'string',
      'time_start' => 'datetime',
    );
  }
}
