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

class LeadGenDraftQuestionFields extends AbstractEnum {

  const CONDITIONAL_QUESTIONS_CHOICES = 'conditional_questions_choices';
  const CONDITIONAL_QUESTIONS_GROUP_ID = 'conditional_questions_group_id';
  const DEPENDENT_CONDITIONAL_QUESTIONS = 'dependent_conditional_questions';
  const INLINE_CONTEXT = 'inline_context';
  const KEY = 'key';
  const LABEL = 'label';
  const OPTIONS = 'options';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'conditional_questions_choices' => 'list<LeadGenConditionalQuestionsGroupChoices>',
      'conditional_questions_group_id' => 'string',
      'dependent_conditional_questions' => 'list<LeadGenConditionalQuestionsGroupQuestions>',
      'inline_context' => 'string',
      'key' => 'string',
      'label' => 'string',
      'options' => 'list<LeadGenQuestionOption>',
      'type' => 'string',
    );
  }
}
