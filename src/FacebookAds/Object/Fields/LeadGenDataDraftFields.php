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

class LeadGenDataDraftFields extends AbstractEnum {

  const BLOCK_DISPLAY_FOR_NON_TARGETED_VIEWER = 'block_display_for_non_targeted_viewer';
  const CREATED_TIME = 'created_time';
  const DISQUALIFIED_END_COMPONENT = 'disqualified_end_component';
  const FOLLOW_UP_ACTION_URL = 'follow_up_action_url';
  const ID = 'id';
  const IS_OPTIMIZED_FOR_QUALITY = 'is_optimized_for_quality';
  const LEGAL_CONTENT = 'legal_content';
  const LOCALE = 'locale';
  const NAME = 'name';
  const PAGE = 'page';
  const QUESTION_PAGE_CUSTOM_HEADLINE = 'question_page_custom_headline';
  const QUESTIONS = 'questions';
  const STATUS = 'status';
  const THANK_YOU_PAGE = 'thank_you_page';
  const TRACKING_PARAMETERS = 'tracking_parameters';

  public function getFieldTypes() {
    return array(
      'block_display_for_non_targeted_viewer' => 'bool',
      'created_time' => 'datetime',
      'disqualified_end_component' => 'Object',
      'follow_up_action_url' => 'string',
      'id' => 'string',
      'is_optimized_for_quality' => 'bool',
      'legal_content' => 'Object',
      'locale' => 'string',
      'name' => 'string',
      'page' => 'Page',
      'question_page_custom_headline' => 'string',
      'questions' => 'list<LeadGenDraftQuestion>',
      'status' => 'string',
      'thank_you_page' => 'Object',
      'tracking_parameters' => 'list<map<string, string>>',
    );
  }
}
