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

class MessageDeliveryEstimateFields extends AbstractEnum {

  const ESTIMATE_COST = 'estimate_cost';
  const ESTIMATE_COST_LOWER_BOUND = 'estimate_cost_lower_bound';
  const ESTIMATE_COST_UPPER_BOUND = 'estimate_cost_upper_bound';
  const ESTIMATE_COVERAGE_LOWER_BOUND = 'estimate_coverage_lower_bound';
  const ESTIMATE_COVERAGE_UPPER_BOUND = 'estimate_coverage_upper_bound';
  const ESTIMATE_DELIVERY = 'estimate_delivery';
  const ESTIMATE_DELIVERY_LOWER_BOUND = 'estimate_delivery_lower_bound';
  const ESTIMATE_DELIVERY_UPPER_BOUND = 'estimate_delivery_upper_bound';
  const ESTIMATE_STATUS = 'estimate_status';

  public function getFieldTypes() {
    return array(
      'estimate_cost' => 'float',
      'estimate_cost_lower_bound' => 'float',
      'estimate_cost_upper_bound' => 'float',
      'estimate_coverage_lower_bound' => 'int',
      'estimate_coverage_upper_bound' => 'int',
      'estimate_delivery' => 'int',
      'estimate_delivery_lower_bound' => 'int',
      'estimate_delivery_upper_bound' => 'int',
      'estimate_status' => 'string',
    );
  }
}
