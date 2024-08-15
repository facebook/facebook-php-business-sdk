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

class AdAccountPrepayDetailsFields extends AbstractEnum {

  const DEFAULT_FUNDING_AMOUNT = 'default_funding_amount';
  const MAX_ACCEPTABLE_AMOUNT = 'max_acceptable_amount';
  const MIN_ACCEPTABLE_AMOUNT = 'min_acceptable_amount';
  const SHOULD_COLLECT_BUSINESS_DETAILS = 'should_collect_business_details';

  public function getFieldTypes() {
    return array(
      'default_funding_amount' => 'CurrencyAmount',
      'max_acceptable_amount' => 'CurrencyAmount',
      'min_acceptable_amount' => 'CurrencyAmount',
      'should_collect_business_details' => 'bool',
    );
  }
}
