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

class ProductItemARDataFields extends AbstractEnum {

  const CONTAINER_EFFECT = 'container_effect';
  const EFFECT_ICON = 'effect_icon';
  const EFFECT_PARAMETERS = 'effect_parameters';
  const PICKER_ICON = 'picker_icon';
  const PRODUCT_AR_LINK = 'product_ar_link';
  const STATE = 'state';
  const SURFACES = 'surfaces';

  public function getFieldTypes() {
    return array(
      'container_effect' => 'string',
      'effect_icon' => 'string',
      'effect_parameters' => 'Object',
      'picker_icon' => 'string',
      'product_ar_link' => 'Object',
      'state' => 'string',
      'surfaces' => 'list<Surfaces>',
    );
  }
}
