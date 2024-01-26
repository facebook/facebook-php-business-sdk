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

class LifeEventFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const END_TIME = 'end_time';
  const FROM = 'from';
  const ID = 'id';
  const IS_HIDDEN = 'is_hidden';
  const START_TIME = 'start_time';
  const TITLE = 'title';
  const UPDATED_TIME = 'updated_time';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'end_time' => 'datetime',
      'from' => 'Page',
      'id' => 'string',
      'is_hidden' => 'bool',
      'start_time' => 'datetime',
      'title' => 'string',
      'updated_time' => 'datetime',
    );
  }
}
