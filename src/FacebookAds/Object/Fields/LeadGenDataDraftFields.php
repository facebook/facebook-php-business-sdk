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

class LeadGenDataDraftFields extends AbstractEnum {

  const BLOCK_DISPLAY_FOR_NON_TARGETED_VIEWER = 'block_display_for_non_targeted_viewer';
  const CONTEXT_CARD = 'context_card';
  const CREATED_TIME = 'created_time';
  const CREATOR_ID = 'creator_id';
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
      'context_card' => 'Object',
      'created_time' => 'datetime',
      'creator_id' => 'string',
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
      'tracking_parameters' => 'list<Object>',
    );
  }
}
