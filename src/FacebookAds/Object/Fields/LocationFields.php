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
