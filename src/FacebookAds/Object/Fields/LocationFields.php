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

class LocationFields extends AbstractEnum {

  const CITY = 'city';
  const CITY_ID = 'city_id';
  const COUNTRY = 'country';
  const COUNTRY_CODE = 'country_code';
  const LATITUDE = 'latitude';
  const LOCATED_IN = 'located_in';
  const LONGITUDE = 'longitude';
  const NAME = 'name';
  const REGION = 'region';
  const REGION_ID = 'region_id';
  const STATE = 'state';
  const STREET = 'street';
  const ZIP = 'zip';

  public function getFieldTypes() {
    return array(
      'city' => 'string',
      'city_id' => 'unsigned int',
      'country' => 'string',
      'country_code' => 'string',
      'latitude' => 'float',
      'located_in' => 'string',
      'longitude' => 'float',
      'name' => 'string',
      'region' => 'string',
      'region_id' => 'unsigned int',
      'state' => 'string',
      'street' => 'string',
      'zip' => 'string',
    );
  }
}
