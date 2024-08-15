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

class AdToplineFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const CLIENT_APPROVAL_DATE = 'client_approval_date';
  const CREATED_BY = 'created_by';
  const CREATED_DATE = 'created_date';
  const DESCRIPTION = 'description';
  const FLIGHT_END_DATE = 'flight_end_date';
  const FLIGHT_START_DATE = 'flight_start_date';
  const FUNC_CAP_AMOUNT = 'func_cap_amount';
  const FUNC_CAP_AMOUNT_WITH_OFFSET = 'func_cap_amount_with_offset';
  const FUNC_LINE_AMOUNT = 'func_line_amount';
  const FUNC_LINE_AMOUNT_WITH_OFFSET = 'func_line_amount_with_offset';
  const FUNC_PRICE = 'func_price';
  const FUNC_PRICE_WITH_OFFSET = 'func_price_with_offset';
  const GENDER = 'gender';
  const ID = 'id';
  const IMPRESSIONS = 'impressions';
  const IO_NUMBER = 'io_number';
  const IS_BONUS_LINE = 'is_bonus_line';
  const KEYWORDS = 'keywords';
  const LAST_UPDATED_BY = 'last_updated_by';
  const LAST_UPDATED_DATE = 'last_updated_date';
  const LINE_NUMBER = 'line_number';
  const LINE_POSITION = 'line_position';
  const LINE_TYPE = 'line_type';
  const LOCATION = 'location';
  const MAX_AGE = 'max_age';
  const MAX_BUDGET = 'max_budget';
  const MIN_AGE = 'min_age';
  const PRICE_PER_TRP = 'price_per_trp';
  const PRODUCT_TYPE = 'product_type';
  const REV_ASSURANCE_APPROVAL_DATE = 'rev_assurance_approval_date';
  const TARGETS = 'targets';
  const TRP_UPDATED_TIME = 'trp_updated_time';
  const TRP_VALUE = 'trp_value';
  const UOM = 'uom';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'client_approval_date' => 'datetime',
      'created_by' => 'string',
      'created_date' => 'datetime',
      'description' => 'string',
      'flight_end_date' => 'datetime',
      'flight_start_date' => 'datetime',
      'func_cap_amount' => 'string',
      'func_cap_amount_with_offset' => 'string',
      'func_line_amount' => 'string',
      'func_line_amount_with_offset' => 'string',
      'func_price' => 'string',
      'func_price_with_offset' => 'string',
      'gender' => 'string',
      'id' => 'string',
      'impressions' => 'int',
      'io_number' => 'int',
      'is_bonus_line' => 'int',
      'keywords' => 'string',
      'last_updated_by' => 'string',
      'last_updated_date' => 'datetime',
      'line_number' => 'int',
      'line_position' => 'int',
      'line_type' => 'string',
      'location' => 'string',
      'max_age' => 'string',
      'max_budget' => 'string',
      'min_age' => 'string',
      'price_per_trp' => 'string',
      'product_type' => 'string',
      'rev_assurance_approval_date' => 'datetime',
      'targets' => 'string',
      'trp_updated_time' => 'int',
      'trp_value' => 'string',
      'uom' => 'string',
    );
  }
}
