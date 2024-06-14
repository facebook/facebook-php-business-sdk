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

class AdSavedLocationFields extends AbstractEnum {

  const CITIES = 'cities';
  const COUNTRIES = 'countries';
  const COUNTRY_GROUPS = 'country_groups';
  const CUSTOM_LOCATIONS = 'custom_locations';
  const GEO_MARKETS = 'geo_markets';
  const ID = 'id';
  const LOCATION_SENTENCES = 'location_sentences';
  const NAME = 'name';
  const REGIONS = 'regions';
  const ZIPS = 'zips';

  public function getFieldTypes() {
    return array(
      'cities' => 'list<TargetingGeoLocationCity>',
      'countries' => 'list<string>',
      'country_groups' => 'list<string>',
      'custom_locations' => 'list<TargetingGeoLocationCustomLocation>',
      'geo_markets' => 'list<TargetingGeoLocationMarket>',
      'id' => 'string',
      'location_sentences' => 'list<string>',
      'name' => 'string',
      'regions' => 'list<TargetingGeoLocationRegion>',
      'zips' => 'list<TargetingGeoLocationZip>',
    );
  }
}
