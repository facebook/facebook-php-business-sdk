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

class WhatsAppBusinessHealthStatusFields extends AbstractEnum {

  const ADDITIONAL_INFO = 'additional_info';
  const CAN_SEND_MESSAGE = 'can_send_message';
  const ENTITY_TYPE = 'entity_type';
  const ERRORS = 'errors';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'additional_info' => 'list<string>',
      'can_send_message' => 'string',
      'entity_type' => 'string',
      'errors' => 'list<Object>',
      'id' => 'string',
    );
  }
}
