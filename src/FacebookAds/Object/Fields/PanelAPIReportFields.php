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

class PanelAPIReportFields extends AbstractEnum {

  const CHECKSUM = 'checksum';
  const DOWNLOAD_URL = 'download_url';
  const END_DATE = 'end_date';
  const EXPORT_FILE_TYPE = 'export_file_type';
  const ID = 'id';
  const INDEX = 'index';
  const NAME = 'name';
  const NUMBER_OF_CHUNKS = 'number_of_chunks';
  const START_DATE = 'start_date';
  const UPLOAD_DATE = 'upload_date';

  public function getFieldTypes() {
    return array(
      'checksum' => 'string',
      'download_url' => 'string',
      'end_date' => 'datetime',
      'export_file_type' => 'string',
      'id' => 'string',
      'index' => 'int',
      'name' => 'string',
      'number_of_chunks' => 'int',
      'start_date' => 'datetime',
      'upload_date' => 'datetime',
    );
  }
}
