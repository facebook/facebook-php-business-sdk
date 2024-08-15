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

class AdAccountBillingDatePreferenceFields extends AbstractEnum {

  const AD_ACCOUNT = 'ad_account';
  const DAY_OF_MONTH = 'day_of_month';
  const ID = 'id';
  const NEXT_BILL_DATE = 'next_bill_date';
  const TIME_CREATED = 'time_created';
  const TIME_EFFECTIVE = 'time_effective';

  public function getFieldTypes() {
    return array(
      'ad_account' => 'AdAccount',
      'day_of_month' => 'int',
      'id' => 'string',
      'next_bill_date' => 'datetime',
      'time_created' => 'datetime',
      'time_effective' => 'datetime',
    );
  }
}
