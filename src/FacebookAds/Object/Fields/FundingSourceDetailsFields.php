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

class FundingSourceDetailsFields extends AbstractEnum {

  const COUPON = 'coupon';
  const COUPONS = 'coupons';
  const DISPLAY_STRING = 'display_string';
  const ID = 'id';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'coupon' => 'FundingSourceDetailsCoupon',
      'coupons' => 'list<FundingSourceDetailsCoupon>',
      'display_string' => 'string',
      'id' => 'string',
      'type' => 'int',
    );
  }
}
