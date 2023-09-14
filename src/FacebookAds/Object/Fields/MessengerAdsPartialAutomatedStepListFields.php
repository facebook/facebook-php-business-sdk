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

class MessengerAdsPartialAutomatedStepListFields extends AbstractEnum {

  const FBLEAD_FORM = 'fblead_form';
  const FIRST_STEP_ID = 'first_step_id';
  const ID = 'id';
  const PAGE = 'page';
  const PRIVACY_URL = 'privacy_url';
  const REMINDER_TEXT = 'reminder_text';
  const STOP_QUESTION_MESSAGE = 'stop_question_message';

  public function getFieldTypes() {
    return array(
      'fblead_form' => 'LeadgenForm',
      'first_step_id' => 'string',
      'id' => 'string',
      'page' => 'Page',
      'privacy_url' => 'string',
      'reminder_text' => 'string',
      'stop_question_message' => 'string',
    );
  }
}
