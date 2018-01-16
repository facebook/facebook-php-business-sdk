<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
  const CREATOR_ID = 'creator_id';
  const CUSOMIZED_TCPA_CONTENT = 'cusomized_tcpa_content';
  const EXPIRED_LEADS_COUNT = 'expired_leads_count';
  const EXTRA_DETAILS = 'extra_details';
  const FOLLOW_UP_ACTION_TEXT = 'follow_up_action_text';
  const FOLLOW_UP_ACTION_URL = 'follow_up_action_url';
  const ID = 'id';
  const IS_CONTINUED_FLOW = 'is_continued_flow';
  const LEADGEN_EXPORT_CSV_URL = 'leadgen_export_csv_url';
  const LEADS_COUNT = 'leads_count';
  const LEGAL_CONTENT = 'legal_content';
  const LOCALE = 'locale';
  const MESSENGER_WELCOME_MESSAGE = 'messenger_welcome_message';
  const NAME = 'name';
  const ORGANIC_LEADS_COUNT = 'organic_leads_count';
  const PAGE = 'page';
  const PAGE_ID = 'page_id';
  const PRIVACY_POLICY_URL = 'privacy_policy_url';
  const QUALIFIERS = 'qualifiers';
  const QUESTION_PAGE_CUSTOM_HEADLINE = 'question_page_custom_headline';
  const QUESTIONS = 'questions';
  const STATUS = 'status';
  const TCPA_COMPLIANCE = 'tcpa_compliance';
  const THANK_YOU_PAGE = 'thank_you_page';

  public function getFieldTypes() {
    return array(
      'allow_organic_lead' => 'bool',
      'block_display_for_non_targeted_viewer' => 'bool',
      'context_card' => 'Object',
      'created_time' => 'datetime',
      'creator' => 'User',
      'creator_id' => 'int',
      'cusomized_tcpa_content' => 'string',
      'expired_leads_count' => 'unsigned int',
      'extra_details' => 'list<string>',
      'follow_up_action_text' => 'string',
      'follow_up_action_url' => 'string',
      'id' => 'string',
      'is_continued_flow' => 'bool',
      'leadgen_export_csv_url' => 'string',
      'leads_count' => 'unsigned int',
      'legal_content' => 'Object',
      'locale' => 'string',
      'messenger_welcome_message' => 'string',
      'name' => 'string',
      'organic_leads_count' => 'unsigned int',
      'page' => 'Object',
      'page_id' => 'string',
      'privacy_policy_url' => 'string',
      'qualifiers' => 'list<LeadGenQualifier>',
      'question_page_custom_headline' => 'string',
      'questions' => 'list<LeadGenQuestion>',
      'status' => 'string',
      'tcpa_compliance' => 'bool',
      'thank_you_page' => 'Object',
    );
  }
}
