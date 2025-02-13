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

class FundingSourceDetailsCouponFields extends AbstractEnum {

  const AMOUNT = 'amount';
  const CAMPAIGN_IDS = 'campaign_ids';
  const COUPON_ID = 'coupon_id';
  const COUPON_TIERING = 'coupon_tiering';
  const CURRENCY = 'currency';
  const DISPLAY_AMOUNT = 'display_amount';
  const EXPIRATION = 'expiration';
  const ORIGINAL_AMOUNT = 'original_amount';
  const ORIGINAL_DISPLAY_AMOUNT = 'original_display_amount';
  const START_DATE = 'start_date';

  public function getFieldTypes() {
    return array(
      'amount' => 'int',
      'campaign_ids' => 'list<int>',
      'coupon_id' => 'string',
      'coupon_tiering' => 'FundingSourceDetailsCouponTiering',
      'currency' => 'string',
      'display_amount' => 'string',
      'expiration' => 'datetime',
      'original_amount' => 'int',
      'original_display_amount' => 'string',
      'start_date' => 'datetime',
    );
  }
}
