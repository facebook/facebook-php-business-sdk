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
