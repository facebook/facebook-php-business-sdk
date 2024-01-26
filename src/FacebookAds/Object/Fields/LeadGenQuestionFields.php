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

class LeadGenQuestionFields extends AbstractEnum {

  const CONDITIONAL_QUESTIONS_CHOICES = 'conditional_questions_choices';
  const CONDITIONAL_QUESTIONS_GROUP_ID = 'conditional_questions_group_id';
  const DEPENDENT_CONDITIONAL_QUESTIONS = 'dependent_conditional_questions';
  const ID = 'id';
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
      'id' => 'string',
      'inline_context' => 'string',
      'key' => 'string',
      'label' => 'string',
      'options' => 'list<LeadGenQuestionOption>',
      'type' => 'string',
    );
  }
}
