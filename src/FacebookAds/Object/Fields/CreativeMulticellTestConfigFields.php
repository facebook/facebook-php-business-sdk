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

  const BUDGET_PERCENTAGE = 'budget_percentage';
  const CONFIGURED_CELL_COUNT = 'configured_cell_count';
  const DAILY_BUDGET = 'daily_budget';
  const ENTRY_SOURCE = 'entry_source';
  const LIFETIME_BUDGET = 'lifetime_budget';
  const USE_EXISTING_DAILY_BUDGET = 'use_existing_daily_budget';

  public function getFieldTypes() {
    return array(
      'budget_percentage' => 'int',
      'configured_cell_count' => 'int',
      'daily_budget' => 'int',
      'entry_source' => 'string',
      'lifetime_budget' => 'int',
      'use_existing_daily_budget' => 'bool',
    );
  }
}
