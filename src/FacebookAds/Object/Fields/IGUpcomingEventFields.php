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

class IGUpcomingEventFields extends AbstractEnum {

  const END_TIME = 'end_time';
  const ID = 'id';
  const START_TIME = 'start_time';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'end_time' => 'datetime',
      'id' => 'string',
      'start_time' => 'datetime',
      'title' => 'string',
    );
  }
}
