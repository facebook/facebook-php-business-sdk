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

class LiveVideoTargetingFields extends AbstractEnum {

  const AGE_MAX = 'age_max';
  const AGE_MIN = 'age_min';
  const EXCLUDED_COUNTRIES = 'excluded_countries';
  const GEO_LOCATIONS = 'geo_locations';

  public function getFieldTypes() {
    return array(
      'age_max' => 'unsigned int',
      'age_min' => 'unsigned int',
      'excluded_countries' => 'list<string>',
      'geo_locations' => 'TargetingGeoLocation',
    );
  }
}
