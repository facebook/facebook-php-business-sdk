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

class AppRequestFields extends AbstractEnum {

  const ACTION_TYPE = 'action_type';
  const APPLICATION = 'application';
  const CREATED_TIME = 'created_time';
  const DATA = 'data';
  const FROM = 'from';
  const ID = 'id';
  const MESSAGE = 'message';
  const OBJECT = 'object';
  const TO = 'to';

  public function getFieldTypes() {
    return array(
      'action_type' => 'string',
      'application' => 'Application',
      'created_time' => 'datetime',
      'data' => 'string',
      'from' => 'Object',
      'id' => 'string',
      'message' => 'string',
      'object' => 'Object',
      'to' => 'Object',
    );
  }
}
