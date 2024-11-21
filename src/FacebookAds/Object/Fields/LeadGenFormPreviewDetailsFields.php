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

class LeadGenFormPreviewDetailsFields extends AbstractEnum {

  const CALL_BUSINESS_TEXT = 'call_business_text';
  const CALL_TO_ACTION_TITLE = 'call_to_action_title';
  const CHAT_ON_MESSENGER_TEXT = 'chat_on_messenger_text';
  const CHAT_ON_WHATSAPP_TEXT = 'chat_on_whatsapp_text';
  const CONTACT_INFORMATION_TEXT = 'contact_information_text';
  const CREATIVES_OVERVIEW_DEFAULT_TEXT = 'creatives_overview_default_text';
  const DATA_PRIVACY_POLICY_SETTING_DESCRIPTION = 'data_privacy_policy_setting_description';
  const DEFAULT_APPOINTMENT_SCHEDULING_INLINE_CONTEXT = 'default_appointment_scheduling_inline_context';
  const DEFAULT_DISQUALIFIED_END_COMPONENT = 'default_disqualified_end_component';
  const DEFAULT_THANK_YOU_PAGE = 'default_thank_you_page';
  const DISQUALIFIED_THANK_YOU_CARD_TRANSPARENCY_INFO_TEXT = 'disqualified_thank_you_card_transparency_info_text';
  const EDIT_TEXT = 'edit_text';
  const EMAIL_INLINE_CONTEXT_TEXT = 'email_inline_context_text';
  const EMAIL_MESSENGER_PUSH_OPT_IN_DISCLAIMER = 'email_messenger_push_opt_in_disclaimer';
  const EMAIL_MESSENGER_PUSH_OPT_IN_TRANSPARENCY_TEXT = 'email_messenger_push_opt_in_transparency_text';
  const FORM_CLARITY_DESCRIPTION_CONTENT = 'form_clarity_description_content';
  const FORM_CLARITY_DESCRIPTION_TITLE = 'form_clarity_description_title';
  const FORM_CLARITY_HEADLINE = 'form_clarity_headline';
  const GATED_CONTENT_LOCKED_DESCRIPTION = 'gated_content_locked_description';
  const GATED_CONTENT_LOCKED_HEADLINE = 'gated_content_locked_headline';
  const GATED_CONTENT_UNLOCKED_DESCRIPTION = 'gated_content_unlocked_description';
  const GATED_CONTENT_UNLOCKED_HEADLINE = 'gated_content_unlocked_headline';
  const HOW_IT_WORKS_SECTION_HEADERS = 'how_it_works_section_headers';
  const NEXT_BUTTON_TEXT = 'next_button_text';
  const OPTIONAL_QUESTION_TEXT = 'optional_question_text';
  const PERSONAL_INFO_TEXT = 'personal_info_text';
  const PHONE_NUMBER_INLINE_CONTEXT_TEXT = 'phone_number_inline_context_text';
  const PRIVACY_POLICY_LINK_TEXT = 'privacy_policy_link_text';
  const PRIVACY_POLICY_TITLE_SECTION_TITLE_TEXT = 'privacy_policy_title_section_title_text';
  const PRIVACY_SETTING_DESCRIPTION = 'privacy_setting_description';
  const PRODUCTS_SECTION_HEADERS = 'products_section_headers';
  const QUALIFIED_THANK_YOU_CARD_TRANSPARENCY_INFO_TEXT = 'qualified_thank_you_card_transparency_info_text';
  const REDEEM_PROMO_CODE_TEXT = 'redeem_promo_code_text';
  const REVIEW_YOUR_INFO_TEXT = 'review_your_info_text';
  const SECURE_SHARING_TEXT = 'secure_sharing_text';
  const SLIDE_TO_SUBMIT_TEXT = 'slide_to_submit_text';
  const SOCIAL_PROOF_SECTION_HEADERS = 'social_proof_section_headers';
  const SUBMIT_BUTTON_TEXT = 'submit_button_text';
  const VIEW_FILE_TEXT = 'view_file_text';

  public function getFieldTypes() {
    return array(
      'call_business_text' => 'string',
      'call_to_action_title' => 'string',
      'chat_on_messenger_text' => 'string',
      'chat_on_whatsapp_text' => 'string',
      'contact_information_text' => 'string',
      'creatives_overview_default_text' => 'string',
      'data_privacy_policy_setting_description' => 'string',
      'default_appointment_scheduling_inline_context' => 'string',
      'default_disqualified_end_component' => 'Object',
      'default_thank_you_page' => 'Object',
      'disqualified_thank_you_card_transparency_info_text' => 'string',
      'edit_text' => 'string',
      'email_inline_context_text' => 'string',
      'email_messenger_push_opt_in_disclaimer' => 'string',
      'email_messenger_push_opt_in_transparency_text' => 'string',
      'form_clarity_description_content' => 'string',
      'form_clarity_description_title' => 'string',
      'form_clarity_headline' => 'string',
      'gated_content_locked_description' => 'string',
      'gated_content_locked_headline' => 'string',
      'gated_content_unlocked_description' => 'string',
      'gated_content_unlocked_headline' => 'string',
      'how_it_works_section_headers' => 'list<map<string, string>>',
      'next_button_text' => 'string',
      'optional_question_text' => 'string',
      'personal_info_text' => 'string',
      'phone_number_inline_context_text' => 'string',
      'privacy_policy_link_text' => 'string',
      'privacy_policy_title_section_title_text' => 'string',
      'privacy_setting_description' => 'string',
      'products_section_headers' => 'list<map<string, string>>',
      'qualified_thank_you_card_transparency_info_text' => 'string',
      'redeem_promo_code_text' => 'string',
      'review_your_info_text' => 'string',
      'secure_sharing_text' => 'string',
      'slide_to_submit_text' => 'string',
      'social_proof_section_headers' => 'list<map<string, string>>',
      'submit_button_text' => 'string',
      'view_file_text' => 'string',
    );
  }
}
