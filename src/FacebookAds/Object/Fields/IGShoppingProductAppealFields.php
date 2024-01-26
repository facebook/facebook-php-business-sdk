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

class IGShoppingProductAppealFields extends AbstractEnum {

  const ELIGIBLE_FOR_APPEAL = 'eligible_for_appeal';
  const PRODUCT_APPEAL_STATUS = 'product_appeal_status';
  const PRODUCT_ID = 'product_id';
  const REJECTION_REASONS = 'rejection_reasons';
  const REVIEW_STATUS = 'review_status';

  public function getFieldTypes() {
    return array(
      'eligible_for_appeal' => 'bool',
      'product_appeal_status' => 'string',
      'product_id' => 'int',
      'rejection_reasons' => 'list<string>',
      'review_status' => 'string',
    );
  }
}
