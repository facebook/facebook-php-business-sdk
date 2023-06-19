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

class BroadTargetingCategoriesFields extends AbstractEnum {

  const CATEGORY_DESCRIPTION = 'category_description';
  const ID = 'id';
  const NAME = 'name';
  const PARENT_CATEGORY = 'parent_category';
  const PATH = 'path';
  const SIZE_LOWER_BOUND = 'size_lower_bound';
  const SIZE_UPPER_BOUND = 'size_upper_bound';
  const SOURCE = 'source';
  const TYPE = 'type';
  const TYPE_NAME = 'type_name';
  const UNTRANSLATED_NAME = 'untranslated_name';
  const UNTRANSLATED_PARENT_NAME = 'untranslated_parent_name';

  public function getFieldTypes() {
    return array(
      'category_description' => 'string',
      'id' => 'string',
      'name' => 'string',
      'parent_category' => 'string',
      'path' => 'list<string>',
      'size_lower_bound' => 'int',
      'size_upper_bound' => 'int',
      'source' => 'string',
      'type' => 'int',
      'type_name' => 'string',
      'untranslated_name' => 'string',
      'untranslated_parent_name' => 'string',
    );
  }
}
