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

class CPASAdCreationTemplateFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const ID = 'id';
  const IS_UNUSED_TEMPLATE = 'is_unused_template';
  const NAME = 'name';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const TARGETING_TYPE = 'targeting_type';
  const TEMPLATE_TYPE = 'template_type';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'id' => 'string',
      'is_unused_template' => 'bool',
      'name' => 'string',
      'optimization_goal' => 'string',
      'targeting_type' => 'string',
      'template_type' => 'string',
    );
  }
}
