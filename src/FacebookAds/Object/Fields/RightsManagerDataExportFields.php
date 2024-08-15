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

class RightsManagerDataExportFields extends AbstractEnum {

  const DOWNLOAD_URI = 'download_uri';
  const EXPORT_SCOPE = 'export_scope';
  const ID = 'id';
  const NAME = 'name';
  const RECORD_TYPE = 'record_type';
  const TIME_RANGE_END = 'time_range_end';
  const TIME_RANGE_START = 'time_range_start';

  public function getFieldTypes() {
    return array(
      'download_uri' => 'string',
      'export_scope' => 'string',
      'id' => 'string',
      'name' => 'string',
      'record_type' => 'string',
      'time_range_end' => 'datetime',
      'time_range_start' => 'datetime',
    );
  }
}
