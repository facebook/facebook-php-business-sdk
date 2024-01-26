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

class TargetingGeoLocationElectoralDistrictFields extends AbstractEnum {

  const COUNTRY = 'country';
  const DEPRECATION_CODE = 'deprecation_code';
  const ELECTORAL_DISTRICT = 'electoral_district';
  const KEY = 'key';
  const NAME = 'name';

  public function getFieldTypes() {
    return array(
      'country' => 'string',
      'deprecation_code' => 'string',
      'electoral_district' => 'string',
      'key' => 'string',
      'name' => 'string',
    );
  }
}
