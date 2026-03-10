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

class LeadNurturingStateFields extends AbstractEnum {

  const AI_AGENT_MODE = 'ai_agent_mode';
  const CONVERSATION_SUMMARY = 'conversation_summary';
  const HANDOFF_REASON = 'handoff_reason';
  const LEAD_INTEREST_LEVEL = 'lead_interest_level';
  const NEEDED_MANUAL_ACTIONS = 'needed_manual_actions';
  const QUALIFICATION_DETAILS = 'qualification_details';
  const QUALIFICATION_STATUS = 'qualification_status';
  const SCHEDULED_TIME = 'scheduled_time';
  const UPDATED_EMAIL = 'updated_email';
  const UPDATED_PHONE_NUMBER = 'updated_phone_number';

  public function getFieldTypes() {
    return array(
      'ai_agent_mode' => 'string',
      'conversation_summary' => 'string',
      'handoff_reason' => 'string',
      'lead_interest_level' => 'string',
      'needed_manual_actions' => 'list<string>',
      'qualification_details' => 'string',
      'qualification_status' => 'string',
      'scheduled_time' => 'Object',
      'updated_email' => 'string',
      'updated_phone_number' => 'string',
    );
  }
}
