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

class DACheckFields extends AbstractEnum {

  const ACTION_URI = 'action_uri';
  const DESCRIPTION = 'description';
  const KEY = 'key';
  const RESULT = 'result';
  const TITLE = 'title';
  const USER_MESSAGE = 'user_message';

  public function getFieldTypes() {
    return array(
      'action_uri' => 'string',
      'description' => 'string',
      'key' => 'string',
      'result' => 'string',
      'title' => 'string',
      'user_message' => 'string',
    );
  }
}
