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

class MessengerDestinationPageWelcomeMessageFields extends AbstractEnum {

  const ID = 'id';
  const PAGE_WELCOME_MESSAGE_BODY = 'page_welcome_message_body';
  const PAGE_WELCOME_MESSAGE_TYPE = 'page_welcome_message_type';
  const TEMPLATE_NAME = 'template_name';
  const TIME_CREATED = 'time_created';
  const TIME_LAST_USED = 'time_last_used';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'page_welcome_message_body' => 'string',
      'page_welcome_message_type' => 'string',
      'template_name' => 'string',
      'time_created' => 'datetime',
      'time_last_used' => 'datetime',
    );
  }
}
