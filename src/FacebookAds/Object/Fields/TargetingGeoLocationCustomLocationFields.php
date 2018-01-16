<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
