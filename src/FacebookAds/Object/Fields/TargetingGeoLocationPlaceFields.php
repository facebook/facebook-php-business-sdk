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

class TargetingGeoLocationPlaceFields extends AbstractEnum {

  const COUNTRY = 'country';
  const DISTANCE_UNIT = 'distance_unit';
  const KEY = 'key';
  const LATITUDE = 'latitude';
  const LONGITUDE = 'longitude';
  const NAME = 'name';
  const PRIMARY_CITY_ID = 'primary_city_id';
  const RADIUS = 'radius';
  const REGION_ID = 'region_id';

  public function getFieldTypes() {
    return array(
      'country' => 'string',
      'distance_unit' => 'string',
      'key' => 'string',
      'latitude' => 'float',
      'longitude' => 'float',
      'name' => 'string',
      'primary_city_id' => 'int',
      'radius' => 'float',
      'region_id' => 'int',
    );
  }
}
