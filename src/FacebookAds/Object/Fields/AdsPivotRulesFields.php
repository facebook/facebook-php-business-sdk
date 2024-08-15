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

class AdsPivotRulesFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const NAME = 'name';
  const PERMISSION = 'permission';
  const RULES = 'rules';
  const SCOPE = 'scope';
  const UPDATE_BY = 'update_by';
  const UPDATE_TIME = 'update_time';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'creator' => 'Profile',
      'description' => 'string',
      'id' => 'string',
      'name' => 'string',
      'permission' => 'string',
      'rules' => 'list<Object>',
      'scope' => 'string',
      'update_by' => 'Profile',
      'update_time' => 'datetime',
    );
  }
}
