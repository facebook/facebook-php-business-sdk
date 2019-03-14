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
