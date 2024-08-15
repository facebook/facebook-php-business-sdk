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

class LeadgenFormFields extends AbstractEnum {

  const ALLOW_ORGANIC_LEAD = 'allow_organic_lead';
  const BLOCK_DISPLAY_FOR_NON_TARGETED_VIEWER = 'block_display_for_non_targeted_viewer';
  const CONTEXT_CARD = 'context_card';
  const CREATED_TIME = 'created_time';
  const CREATOR = 'creator';
  const EXPIRED_LEADS_COUNT = 'expired_leads_count';
  const FOLLOW_UP_ACTION_TEXT = 'follow_up_action_text';
  const FOLLOW_UP_ACTION_URL = 'follow_up_action_url';
  const ID = 'id';
  const IS_OPTIMIZED_FOR_QUALITY = 'is_optimized_for_quality';
  const LEADS_COUNT = 'leads_count';
  const LEGAL_CONTENT = 'legal_content';
  const LOCALE = 'locale';
  const NAME = 'name';
  const ORGANIC_LEADS_COUNT = 'organic_leads_count';
  const PAGE = 'page';
  const PAGE_ID = 'page_id';
  const PRIVACY_POLICY_URL = 'privacy_policy_url';
  const QUESTION_PAGE_CUSTOM_HEADLINE = 'question_page_custom_headline';
  const QUESTIONS = 'questions';
  const STATUS = 'status';
  const THANK_YOU_PAGE = 'thank_you_page';
  const TRACKING_PARAMETERS = 'tracking_parameters';

  public function getFieldTypes() {
    return array(
      'allow_organic_lead' => 'bool',
      'block_display_for_non_targeted_viewer' => 'bool',
      'context_card' => 'LeadGenContextCard',
      'created_time' => 'datetime',
      'creator' => 'User',
      'expired_leads_count' => 'unsigned int',
      'follow_up_action_text' => 'string',
      'follow_up_action_url' => 'string',
      'id' => 'string',
      'is_optimized_for_quality' => 'bool',
      'leads_count' => 'unsigned int',
      'legal_content' => 'LeadGenLegalContent',
      'locale' => 'string',
      'name' => 'string',
      'organic_leads_count' => 'unsigned int',
      'page' => 'Page',
      'page_id' => 'string',
      'privacy_policy_url' => 'string',
      'question_page_custom_headline' => 'string',
      'questions' => 'list<LeadGenQuestion>',
      'status' => 'string',
      'thank_you_page' => 'LeadGenThankYouPage',
      'tracking_parameters' => 'list<KeyValue>',
    );
  }
}
