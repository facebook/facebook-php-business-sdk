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

class AdCampaignGroupGetFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ADVANTAGE_STATE_INFO = 'advantage_state_info';
  const BID_STRATEGY = 'bid_strategy';
  const BUDGET_REMAINING = 'budget_remaining';
  const BUYING_TYPE = 'buying_type';
  const CONFIGURED_STATUS = 'configured_status';
  const CREATED_TIME = 'created_time';
  const DAILY_BUDGET = 'daily_budget';
  const EFFECTIVE_STATUS = 'effective_status';
  const ID = 'id';
  const LIFETIME_BUDGET = 'lifetime_budget';
  const NAME = 'name';
  const OBJECTIVE = 'objective';
  const PROMOTED_OBJECT = 'promoted_object';
  const SPECIAL_AD_CATEGORIES = 'special_ad_categories';
  const SPEND_CAP = 'spend_cap';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const STOP_TIME = 'stop_time';
  const UPDATED_TIME = 'updated_time';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'advantage_state_info' => 'object',
      'bid_strategy' => 'string',
      'budget_remaining' => 'string',
      'buying_type' => 'string',
      'configured_status' => 'string',
      'created_time' => 'string',
      'daily_budget' => 'string',
      'effective_status' => 'string',
      'id' => 'string',
      'lifetime_budget' => 'string',
      'name' => 'string',
      'objective' => 'string',
      'promoted_object' => 'object',
      'special_ad_categories' => 'list<string>',
      'spend_cap' => 'string',
      'start_time' => 'string',
      'status' => 'string',
      'stop_time' => 'string',
      'updated_time' => 'string',
    );
  }
}
