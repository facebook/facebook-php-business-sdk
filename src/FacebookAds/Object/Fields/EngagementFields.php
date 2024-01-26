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

class EngagementFields extends AbstractEnum {

  const COUNT = 'count';
  const COUNT_STRING = 'count_string';
  const COUNT_STRING_WITH_LIKE = 'count_string_with_like';
  const COUNT_STRING_WITHOUT_LIKE = 'count_string_without_like';
  const SOCIAL_SENTENCE = 'social_sentence';
  const SOCIAL_SENTENCE_WITH_LIKE = 'social_sentence_with_like';
  const SOCIAL_SENTENCE_WITHOUT_LIKE = 'social_sentence_without_like';

  public function getFieldTypes() {
    return array(
      'count' => 'unsigned int',
      'count_string' => 'string',
      'count_string_with_like' => 'string',
      'count_string_without_like' => 'string',
      'social_sentence' => 'string',
      'social_sentence_with_like' => 'string',
      'social_sentence_without_like' => 'string',
    );
  }
}
