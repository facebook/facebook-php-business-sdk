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

class BrandRequestFields extends AbstractEnum {

  const AD_COUNTRIES = 'ad_countries';
  const ADDITIONAL_CONTACTS = 'additional_contacts';
  const APPROVAL_LEVEL = 'approval_level';
  const CELLS = 'cells';
  const COUNTRIES = 'countries';
  const DENY_REASON = 'deny_reason';
  const END_TIME = 'end_time';
  const ESTIMATED_REACH = 'estimated_reach';
  const ID = 'id';
  const IS_MULTICELL = 'is_multicell';
  const LOCALE = 'locale';
  const MAX_AGE = 'max_age';
  const MIN_AGE = 'min_age';
  const QUESTIONS = 'questions';
  const REGION = 'region';
  const REQUEST_STATUS = 'request_status';
  const REVIEW_DATE = 'review_date';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const SUBMIT_DATE = 'submit_date';
  const TOTAL_BUDGET = 'total_budget';

  public function getFieldTypes() {
    return array(
      'ad_countries' => 'list<string>',
      'additional_contacts' => 'list<string>',
      'approval_level' => 'unsigned int',
      'cells' => 'list<Object>',
      'countries' => 'list<string>',
      'deny_reason' => 'string',
      'end_time' => 'datetime',
      'estimated_reach' => 'unsigned int',
      'id' => 'string',
      'is_multicell' => 'bool',
      'locale' => 'string',
      'max_age' => 'unsigned int',
      'min_age' => 'unsigned int',
      'questions' => 'list<Object>',
      'region' => 'string',
      'request_status' => 'string',
      'review_date' => 'datetime',
      'start_time' => 'datetime',
      'status' => 'string',
      'submit_date' => 'datetime',
      'total_budget' => 'unsigned int',
    );
  }
}
