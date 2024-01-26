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

class AdAsyncRequestFields extends AbstractEnum {

  const ASYNC_REQUEST_SET = 'async_request_set';
  const CREATED_TIME = 'created_time';
  const ID = 'id';
  const INPUT = 'input';
  const RESULT = 'result';
  const SCOPE_OBJECT_ID = 'scope_object_id';
  const STATUS = 'status';
  const TYPE = 'type';
  const UPDATED_TIME = 'updated_time';

  public function getFieldTypes() {
    return array(
      'async_request_set' => 'AdAsyncRequestSet',
      'created_time' => 'datetime',
      'id' => 'string',
      'input' => 'map',
      'result' => 'map',
      'scope_object_id' => 'string',
      'status' => 'string',
      'type' => 'string',
      'updated_time' => 'datetime',
    );
  }
}
