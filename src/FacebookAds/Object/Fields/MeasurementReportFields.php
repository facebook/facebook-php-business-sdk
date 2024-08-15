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

class MeasurementReportFields extends AbstractEnum {

  const DOWNLOAD_URLS = 'download_urls';
  const ID = 'id';
  const METADATA = 'metadata';
  const REPORT_TYPE = 'report_type';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'download_urls' => 'list<string>',
      'id' => 'string',
      'metadata' => 'map',
      'report_type' => 'string',
      'status' => 'string',
    );
  }
}
