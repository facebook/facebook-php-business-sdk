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

class AdAccountPromotionProgressBarFields extends AbstractEnum {

  const ADACCOUNT_PERMISSION = 'adaccount_permission';
  const COUPON_CURRENCY = 'coupon_currency';
  const COUPON_VALUE = 'coupon_value';
  const EXPIRATION_TIME = 'expiration_time';
  const PROGRESS_COMPLETED = 'progress_completed';
  const PROMOTION_TYPE = 'promotion_type';
  const SPEND_REQUIREMENT_IN_CENT = 'spend_requirement_in_cent';
  const SPEND_SINCE_ENROLLMENT = 'spend_since_enrollment';

  public function getFieldTypes() {
    return array(
      'adaccount_permission' => 'bool',
      'coupon_currency' => 'string',
      'coupon_value' => 'int',
      'expiration_time' => 'datetime',
      'progress_completed' => 'bool',
      'promotion_type' => 'string',
      'spend_requirement_in_cent' => 'int',
      'spend_since_enrollment' => 'int',
    );
  }
}
