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

class AdStudyCellFields extends AbstractEnum {

  const AD_ENTITIES_COUNT = 'ad_entities_count';
  const CONTROL_PERCENTAGE = 'control_percentage';
  const ID = 'id';
  const NAME = 'name';
  const TREATMENT_PERCENTAGE = 'treatment_percentage';

  public function getFieldTypes() {
    return array(
      'ad_entities_count' => 'unsigned int',
      'control_percentage' => 'float',
      'id' => 'string',
      'name' => 'string',
      'treatment_percentage' => 'float',
    );
  }
}
