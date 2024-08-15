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

class PageInsightsAsyncExportRunFields extends AbstractEnum {

  const DATA_LEVEL = 'data_level';
  const FILTERS = 'filters';
  const FORMAT = 'format';
  const GEN_REPORT_DATE = 'gen_report_date';
  const ID = 'id';
  const REPORT_END_DATE = 'report_end_date';
  const REPORT_START_DATE = 'report_start_date';
  const SORTERS = 'sorters';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'data_level' => 'string',
      'filters' => 'list<Object>',
      'format' => 'string',
      'gen_report_date' => 'int',
      'id' => 'string',
      'report_end_date' => 'int',
      'report_start_date' => 'int',
      'sorters' => 'list<Object>',
      'status' => 'string',
    );
  }
}
