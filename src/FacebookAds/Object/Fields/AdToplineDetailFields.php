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

class AdToplineDetailFields extends AbstractEnum {

  const ACTIVE_STATUS = 'active_status';
  const AD_ACCOUNT_ID = 'ad_account_id';
  const FLIGHT_END_DATE = 'flight_end_date';
  const FLIGHT_START_DATE = 'flight_start_date';
  const ID = 'id';
  const IO_NUMBER = 'io_number';
  const LINE_NUMBER = 'line_number';
  const PRICE = 'price';
  const QUANTITY = 'quantity';
  const SF_DETAIL_LINE_ID = 'sf_detail_line_id';
  const SUBLINE_ID = 'subline_id';
  const TARGETS = 'targets';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';

  public function getFieldTypes() {
    return array(
      'active_status' => 'int',
      'ad_account_id' => 'string',
      'flight_end_date' => 'datetime',
      'flight_start_date' => 'datetime',
      'id' => 'string',
      'io_number' => 'int',
      'line_number' => 'int',
      'price' => 'float',
      'quantity' => 'float',
      'sf_detail_line_id' => 'string',
      'subline_id' => 'string',
      'targets' => 'string',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
    );
  }
}
