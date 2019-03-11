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

class IterativeSplitTestConfigFields extends AbstractEnum {

  const BUDGET = 'budget';
  const END_TIME = 'end_time';
  const GUIDANCE = 'guidance';
  const ID = 'id';
  const ITERATIVE_SPLIT_TEST_ORIGINAL_VARIANT_ID = 'iterative_split_test_original_variant_id';
  const ITERATIVE_SPLIT_TEST_VARIANT_TO_SPLIT_MAPPING = 'iterative_split_test_variant_to_split_mapping';
  const RESULTS_WINDOW = 'results_window';
  const SPLITS = 'splits';
  const START_TIME = 'start_time';

  public function getFieldTypes() {
    return array(
      'budget' => 'int',
      'end_time' => 'datetime',
      'guidance' => 'Object',
      'id' => 'string',
      'iterative_split_test_original_variant_id' => 'string',
      'iterative_split_test_variant_to_split_mapping' => 'map<string, int>',
      'results_window' => 'Object',
      'splits' => 'list<int>',
      'start_time' => 'datetime',
    );
  }
}
