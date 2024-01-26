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

class ReachFrequencyEstimatesCurveFields extends AbstractEnum {

  const BUDGET = 'budget';
  const CONVERSION = 'conversion';
  const IMPRESSION = 'impression';
  const INTERPOLATED_REACH = 'interpolated_reach';
  const NUM_POINTS = 'num_points';
  const RAW_IMPRESSION = 'raw_impression';
  const RAW_REACH = 'raw_reach';
  const REACH = 'reach';

  public function getFieldTypes() {
    return array(
      'budget' => 'list<int>',
      'conversion' => 'list<int>',
      'impression' => 'list<int>',
      'interpolated_reach' => 'float',
      'num_points' => 'unsigned int',
      'raw_impression' => 'list<int>',
      'raw_reach' => 'list<int>',
      'reach' => 'list<int>',
    );
  }
}
