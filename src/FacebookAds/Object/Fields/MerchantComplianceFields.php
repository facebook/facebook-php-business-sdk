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

class MerchantComplianceFields extends AbstractEnum {

  const ACTIVE_CAMPAIGNS = 'active_campaigns';
  const COMPLIANCE_STATUS = 'compliance_status';
  const COUNT_DOWN_START_TIME = 'count_down_start_time';
  const PURCHASE = 'purchase';
  const PURCHASE_CONVERSION_VALUE = 'purchase_conversion_value';

  public function getFieldTypes() {
    return array(
      'active_campaigns' => 'int',
      'compliance_status' => 'string',
      'count_down_start_time' => 'int',
      'purchase' => 'int',
      'purchase_conversion_value' => 'float',
    );
  }
}
