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

class TargetingGeoLocationCustomLocationFields extends AbstractEnum {

  const ADDRESS_STRING = 'address_string';
  const COUNTRY = 'country';
  const COUNTRY_GROUP = 'country_group';
  const CUSTOM_TYPE = 'custom_type';
  const DISTANCE_UNIT = 'distance_unit';
  const KEY = 'key';
  const LATITUDE = 'latitude';
  const LONGITUDE = 'longitude';
  const MAX_POPULATION = 'max_population';
  const MIN_POPULATION = 'min_population';
  const NAME = 'name';
  const PRIMARY_CITY_ID = 'primary_city_id';
  const RADIUS = 'radius';
  const REGION_ID = 'region_id';

  public function getFieldTypes() {
    return array(
      'address_string' => 'string',
      'country' => 'string',
      'country_group' => 'string',
      'custom_type' => 'string',
      'distance_unit' => 'string',
      'key' => 'string',
      'latitude' => 'float',
      'longitude' => 'float',
      'max_population' => 'int',
      'min_population' => 'int',
      'name' => 'string',
      'primary_city_id' => 'int',
      'radius' => 'float',
      'region_id' => 'int',
    );
  }
}
