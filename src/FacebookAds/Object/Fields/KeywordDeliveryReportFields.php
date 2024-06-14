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

class KeywordDeliveryReportFields extends AbstractEnum {

  const ESTIMATED_CLICKS = 'estimated_clicks';
  const ESTIMATED_CONVERSIONS = 'estimated_conversions';
  const ESTIMATED_COST = 'estimated_cost';
  const ESTIMATED_CPC = 'estimated_cpc';
  const ESTIMATED_CTR = 'estimated_ctr';
  const ESTIMATED_CVR = 'estimated_cvr';
  const ESTIMATED_IMPRESSIONS = 'estimated_impressions';
  const ESTIMATED_RETURNS = 'estimated_returns';
  const KEYWORD = 'keyword';

  public function getFieldTypes() {
    return array(
      'estimated_clicks' => 'unsigned int',
      'estimated_conversions' => 'unsigned int',
      'estimated_cost' => 'float',
      'estimated_cpc' => 'float',
      'estimated_ctr' => 'float',
      'estimated_cvr' => 'float',
      'estimated_impressions' => 'unsigned int',
      'estimated_returns' => 'float',
      'keyword' => 'string',
    );
  }
}
