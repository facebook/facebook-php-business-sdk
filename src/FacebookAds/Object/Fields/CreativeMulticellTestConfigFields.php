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

class CreativeMulticellTestConfigFields extends AbstractEnum {

  const DAILY_BUDGET = 'daily_budget';
  const LIFETIME_BUDGET = 'lifetime_budget';

  public function getFieldTypes() {
    return array(
      'daily_budget' => 'int',
      'lifetime_budget' => 'int',
    );
  }
}
