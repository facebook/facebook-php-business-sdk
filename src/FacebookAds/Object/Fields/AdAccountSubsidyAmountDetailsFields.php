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

class AdAccountSubsidyAmountDetailsFields extends AbstractEnum {

  const ENTERED_AMOUNT = 'entered_amount';
  const FEE_AMOUNT = 'fee_amount';
  const TOTAL_AMOUNT = 'total_amount';

  public function getFieldTypes() {
    return array(
      'entered_amount' => 'CurrencyAmount',
      'fee_amount' => 'CurrencyAmount',
      'total_amount' => 'CurrencyAmount',
    );
  }
}
