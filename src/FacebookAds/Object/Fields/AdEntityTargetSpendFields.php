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

class AdEntityTargetSpendFields extends AbstractEnum {

  const AMOUNT = 'amount';
  const HAS_ERROR = 'has_error';
  const IS_ACCURATE = 'is_accurate';
  const IS_PRORATED = 'is_prorated';
  const IS_UPDATING = 'is_updating';

  public function getFieldTypes() {
    return array(
      'amount' => 'string',
      'has_error' => 'bool',
      'is_accurate' => 'bool',
      'is_prorated' => 'bool',
      'is_updating' => 'bool',
    );
  }
}
