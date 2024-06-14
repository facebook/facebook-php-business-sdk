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

class VideoMetricsReportFields extends AbstractEnum {

  const CHECKSUM = 'checksum';
  const CHUNKS = 'chunks';
  const END_DATE = 'end_date';
  const ID = 'id';
  const INDEX = 'index';
  const NAME = 'name';
  const PLATFORM = 'platform';
  const START_DATE = 'start_date';
  const TYPE = 'type';
  const UPLOAD_DATE = 'upload_date';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'checksum' => 'string',
      'chunks' => 'int',
      'end_date' => 'datetime',
      'id' => 'string',
      'index' => 'int',
      'name' => 'string',
      'platform' => 'string',
      'start_date' => 'datetime',
      'type' => 'string',
      'upload_date' => 'datetime',
      'url' => 'string',
    );
  }
}
