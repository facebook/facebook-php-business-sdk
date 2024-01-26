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

class ChildEventFields extends AbstractEnum {

  const END_TIME = 'end_time';
  const ID = 'id';
  const START_TIME = 'start_time';
  const TICKET_URI = 'ticket_uri';

  public function getFieldTypes() {
    return array(
      'end_time' => 'string',
      'id' => 'string',
      'start_time' => 'string',
      'ticket_uri' => 'string',
    );
  }
}
