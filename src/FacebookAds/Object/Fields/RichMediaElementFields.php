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

class RichMediaElementFields extends AbstractEnum {

  const ELEMENT = 'element';
  const ELEMENT_TYPE = 'element_type';
  const NAME = 'name';

  public function getFieldTypes() {
    return array(
      'element' => 'Object',
      'element_type' => 'string',
      'name' => 'string',
    );
  }
}
