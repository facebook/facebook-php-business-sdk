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

class LeadGenFormPreviewDetailsFields extends AbstractEnum {

  const CALL_TO_ACTION_TITLE = 'call_to_action_title';
  const DEFAULT_APPOINTMENT_SCHEDULING_INLINE_CONTEXT = 'default_appointment_scheduling_inline_context';
  const DEFAULT_THANK_YOU_PAGE = 'default_thank_you_page';
  const EDIT_TEXT = 'edit_text';
  const EMAIL_INLINE_CONTEXT_TEXT = 'email_inline_context_text';
  const NEXT_BUTTON_TEXT = 'next_button_text';
  const PERSONAL_INFO_TEXT = 'personal_info_text';
  const PHONE_NUMBER_INLINE_CONTEXT_TEXT = 'phone_number_inline_context_text';
  const REVIEW_YOUR_INFO_TEXT = 'review_your_info_text';
  const SECURE_SHARING_TEXT = 'secure_sharing_text';
  const SLIDE_TO_SUBMIT_TEXT = 'slide_to_submit_text';
  const SUBMIT_BUTTON_TEXT = 'submit_button_text';

  public function getFieldTypes() {
    return array(
      'call_to_action_title' => 'string',
      'default_appointment_scheduling_inline_context' => 'string',
      'default_thank_you_page' => 'Object',
      'edit_text' => 'string',
      'email_inline_context_text' => 'string',
      'next_button_text' => 'string',
      'personal_info_text' => 'string',
      'phone_number_inline_context_text' => 'string',
      'review_your_info_text' => 'string',
      'secure_sharing_text' => 'string',
      'slide_to_submit_text' => 'string',
      'submit_button_text' => 'string',
    );
  }
}
