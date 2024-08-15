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

class PartnerCategoryFields extends AbstractEnum {

  const APPROXIMATE_COUNT = 'approximate_count';
  const COUNTRY = 'country';
  const DESCRIPTION = 'description';
  const DETAILS = 'details';
  const ID = 'id';
  const IS_PRIVATE = 'is_private';
  const NAME = 'name';
  const PARENT_CATEGORY = 'parent_category';
  const SOURCE = 'source';
  const STATUS = 'status';
  const TARGETING_TYPE = 'targeting_type';

  public function getFieldTypes() {
    return array(
      'approximate_count' => 'int',
      'country' => 'string',
      'description' => 'string',
      'details' => 'string',
      'id' => 'string',
      'is_private' => 'bool',
      'name' => 'string',
      'parent_category' => 'string',
      'source' => 'string',
      'status' => 'string',
      'targeting_type' => 'string',
    );
  }
}
