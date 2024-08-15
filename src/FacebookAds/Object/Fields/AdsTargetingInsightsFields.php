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

class AdsTargetingInsightsFields extends AbstractEnum {

  const AUDIENCE_SIZE = 'audience_size';
  const CLICKS = 'clicks';
  const CONVERSION_COST = 'conversion_cost';
  const CONVERSIONS = 'conversions';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const IMPRESSIONS = 'impressions';
  const NAME = 'name';
  const REVENUE = 'revenue';
  const SPEND = 'spend';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'audience_size' => 'int',
      'clicks' => 'unsigned int',
      'conversion_cost' => 'float',
      'conversions' => 'unsigned int',
      'description' => 'string',
      'id' => 'string',
      'impressions' => 'string',
      'name' => 'string',
      'revenue' => 'float',
      'spend' => 'float',
      'type' => 'string',
    );
  }
}
