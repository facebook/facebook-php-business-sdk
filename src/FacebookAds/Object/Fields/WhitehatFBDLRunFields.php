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

class WhitehatFBDLRunFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const IS_PINNED = 'is_pinned';
  const NOTE = 'note';
  const RESULT = 'result';
  const RUN_CODE = 'run_code';
  const STATUS = 'status';
  const USER_TYPE = 'user_type';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'id' => 'string',
      'is_pinned' => 'bool',
      'note' => 'string',
      'result' => 'list<map<string, string>>',
      'run_code' => 'string',
      'status' => 'string',
      'user_type' => 'string',
    );
  }
}
