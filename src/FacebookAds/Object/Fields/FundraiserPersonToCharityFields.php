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

class FundraiserPersonToCharityFields extends AbstractEnum {

  const AMOUNT_RAISED = 'amount_raised';
  const CHARITY_ID = 'charity_id';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const DONATIONS_COUNT = 'donations_count';
  const DONORS_COUNT = 'donors_count';
  const END_TIME = 'end_time';
  const EXTERNAL_AMOUNT_RAISED = 'external_amount_raised';
  const EXTERNAL_DONATIONS_COUNT = 'external_donations_count';
  const EXTERNAL_DONORS_COUNT = 'external_donors_count';
  const EXTERNAL_EVENT_NAME = 'external_event_name';
  const EXTERNAL_EVENT_START_TIME = 'external_event_start_time';
  const EXTERNAL_EVENT_URI = 'external_event_uri';
  const EXTERNAL_FUNDRAISER_URI = 'external_fundraiser_uri';
  const EXTERNAL_ID = 'external_id';
  const GOAL_AMOUNT = 'goal_amount';
  const ID = 'id';
  const INTERNAL_AMOUNT_RAISED = 'internal_amount_raised';
  const INTERNAL_DONATIONS_COUNT = 'internal_donations_count';
  const INTERNAL_DONORS_COUNT = 'internal_donors_count';
  const NAME = 'name';
  const URI = 'uri';

  public function getFieldTypes() {
    return array(
      'amount_raised' => 'int',
      'charity_id' => 'string',
      'currency' => 'string',
      'description' => 'string',
      'donations_count' => 'int',
      'donors_count' => 'int',
      'end_time' => 'datetime',
      'external_amount_raised' => 'int',
      'external_donations_count' => 'int',
      'external_donors_count' => 'int',
      'external_event_name' => 'string',
      'external_event_start_time' => 'datetime',
      'external_event_uri' => 'string',
      'external_fundraiser_uri' => 'string',
      'external_id' => 'string',
      'goal_amount' => 'int',
      'id' => 'string',
      'internal_amount_raised' => 'int',
      'internal_donations_count' => 'int',
      'internal_donors_count' => 'int',
      'name' => 'string',
      'uri' => 'string',
    );
  }
}
