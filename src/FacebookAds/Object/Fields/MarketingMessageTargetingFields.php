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

class MarketingMessageTargetingFields extends AbstractEnum {

  const AUTOMATION_TYPE = 'automation_type';
  const DELAY_SEND_TIME_SECOND = 'delay_send_time_second';
  const DELAY_SEND_TIME_UNIT = 'delay_send_time_unit';
  const SUBSCRIBER_LISTS = 'subscriber_lists';
  const TARGETING_RULES = 'targeting_rules';

  public function getFieldTypes() {
    return array(
      'automation_type' => 'string',
      'delay_send_time_second' => 'unsigned int',
      'delay_send_time_unit' => 'string',
      'subscriber_lists' => 'list<RawCustomAudience>',
      'targeting_rules' => 'list<Object>',
    );
  }
}
