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

class EventRegistrationSettingFields extends AbstractEnum {

  const ID = 'id';
  const QUESTIONS = 'questions';
  const TARGET_TYPE = 'target_type';
  const TICKET_TIER_IDS = 'ticket_tier_ids';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'questions' => 'string',
      'target_type' => 'string',
      'ticket_tier_ids' => 'list<string>',
    );
  }
}
