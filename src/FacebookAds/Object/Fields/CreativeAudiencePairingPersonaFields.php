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

class CreativeAudiencePairingPersonaFields extends AbstractEnum {

  const AGE_MAX = 'age_max';
  const AGE_MIN = 'age_min';
  const GENDERS = 'genders';

  public function getFieldTypes() {
    return array(
      'age_max' => 'int',
      'age_min' => 'int',
      'genders' => 'list<unsigned int>',
    );
  }
}
