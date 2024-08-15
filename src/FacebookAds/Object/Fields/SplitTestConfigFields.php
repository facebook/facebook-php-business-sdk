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

class SplitTestConfigFields extends AbstractEnum {

  const BUDGET = 'budget';
  const EARLY_WINNER_DECLARATION_ENABLED = 'early_winner_declaration_enabled';
  const END_TIME = 'end_time';
  const SPLITS = 'splits';
  const START_TIME = 'start_time';
  const TEST_VARIABLE = 'test_variable';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'budget' => 'int',
      'early_winner_declaration_enabled' => 'bool',
      'end_time' => 'datetime',
      'splits' => 'list<int>',
      'start_time' => 'datetime',
      'test_variable' => 'string',
      'id' => 'string',
    );
  }
}
