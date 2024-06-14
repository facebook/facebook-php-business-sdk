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

class BusinessRequestFields extends AbstractEnum {

  const ACCESSOR = 'accessor';
  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const OBJECT_ID = 'object_id';
  const OBJECT_TYPE = 'object_type';
  const PERMITTED_TASKS = 'permitted_tasks';
  const REQUEST_STATUS = 'request_status';
  const REQUEST_TYPE = 'request_type';
  const REQUESTOR = 'requestor';

  public function getFieldTypes() {
    return array(
      'accessor' => 'Business',
      'creation_time' => 'datetime',
      'id' => 'string',
      'object_id' => 'string',
      'object_type' => 'string',
      'permitted_tasks' => 'list<string>',
      'request_status' => 'string',
      'request_type' => 'string',
      'requestor' => 'string',
    );
  }
}
