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

class AsyncSessionFields extends AbstractEnum {

  const APP = 'app';
  const COMPLETE_TIME = 'complete_time';
  const ERROR_CODE = 'error_code';
  const EXCEPTION = 'exception';
  const ID = 'id';
  const METHOD = 'method';
  const NAME = 'name';
  const PAGE = 'page';
  const PERCENT_COMPLETED = 'percent_completed';
  const PLATFORM_VERSION = 'platform_version';
  const RESULT = 'result';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const URI = 'uri';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'app' => 'Application',
      'complete_time' => 'datetime',
      'error_code' => 'int',
      'exception' => 'string',
      'id' => 'string',
      'method' => 'string',
      'name' => 'string',
      'page' => 'Page',
      'percent_completed' => 'int',
      'platform_version' => 'string',
      'result' => 'string',
      'start_time' => 'datetime',
      'status' => 'string',
      'uri' => 'string',
      'user' => 'User',
    );
  }
}
