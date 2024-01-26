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

class VideoCopyrightRuleFields extends AbstractEnum {

  const CONDITION_GROUPS = 'condition_groups';
  const COPYRIGHTS = 'copyrights';
  const CREATED_DATE = 'created_date';
  const CREATOR = 'creator';
  const ID = 'id';
  const IS_IN_MIGRATION = 'is_in_migration';
  const NAME = 'name';

  public function getFieldTypes() {
    return array(
      'condition_groups' => 'list<VideoCopyrightConditionGroup>',
      'copyrights' => 'list<string>',
      'created_date' => 'datetime',
      'creator' => 'User',
      'id' => 'string',
      'is_in_migration' => 'bool',
      'name' => 'string',
    );
  }
}
