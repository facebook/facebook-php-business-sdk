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

class AdKeywordStatsFields extends AbstractEnum {

  const ACTIONS = 'actions';
  const CLICKS = 'clicks';
  const COST_PER_TOTAL_ACTION = 'cost_per_total_action';
  const COST_PER_UNIQUE_CLICK = 'cost_per_unique_click';
  const CPC = 'cpc';
  const CPM = 'cpm';
  const CPP = 'cpp';
  const CTR = 'ctr';
  const FREQUENCY = 'frequency';
  const ID = 'id';
  const IMPRESSIONS = 'impressions';
  const NAME = 'name';
  const REACH = 'reach';
  const SPEND = 'spend';
  const TOTAL_ACTIONS = 'total_actions';
  const TOTAL_UNIQUE_ACTIONS = 'total_unique_actions';
  const UNIQUE_ACTIONS = 'unique_actions';
  const UNIQUE_CLICKS = 'unique_clicks';
  const UNIQUE_CTR = 'unique_ctr';
  const UNIQUE_IMPRESSIONS = 'unique_impressions';

  public function getFieldTypes() {
    return array(
      'actions' => 'list<AdsActionStats>',
      'clicks' => 'unsigned int',
      'cost_per_total_action' => 'float',
      'cost_per_unique_click' => 'float',
      'cpc' => 'float',
      'cpm' => 'float',
      'cpp' => 'float',
      'ctr' => 'float',
      'frequency' => 'float',
      'id' => 'string',
      'impressions' => 'unsigned int',
      'name' => 'string',
      'reach' => 'unsigned int',
      'spend' => 'float',
      'total_actions' => 'unsigned int',
      'total_unique_actions' => 'unsigned int',
      'unique_actions' => 'list<AdsActionStats>',
      'unique_clicks' => 'unsigned int',
      'unique_ctr' => 'float',
      'unique_impressions' => 'unsigned int',
    );
  }
}
