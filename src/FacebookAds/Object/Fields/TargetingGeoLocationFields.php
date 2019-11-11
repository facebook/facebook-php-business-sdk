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

class TargetingGeoLocationFields extends AbstractEnum {

  const CITIES = 'cities';
  const COUNTRIES = 'countries';
  const COUNTRY_GROUPS = 'country_groups';
  const CUSTOM_LOCATIONS = 'custom_locations';
  const ELECTORAL_DISTRICTS = 'electoral_districts';
  const GEO_MARKETS = 'geo_markets';
  const LARGE_GEO_AREAS = 'large_geo_areas';
  const LOCATION_CLUSTER_IDS = 'location_cluster_ids';
  const LOCATION_EXPANSION = 'location_expansion';
  const LOCATION_TYPES = 'location_types';
  const MEDIUM_GEO_AREAS = 'medium_geo_areas';
  const METRO_AREAS = 'metro_areas';
  const NEIGHBORHOODS = 'neighborhoods';
  const PLACES = 'places';
  const POLITICAL_DISTRICTS = 'political_districts';
  const REGIONS = 'regions';
  const SMALL_GEO_AREAS = 'small_geo_areas';
  const SUBCITIES = 'subcities';
  const SUBNEIGHBORHOODS = 'subneighborhoods';
  const ZIPS = 'zips';

  public function getFieldTypes() {
    return array(
      'cities' => 'list<TargetingGeoLocationCity>',
      'countries' => 'list<string>',
      'country_groups' => 'list<string>',
      'custom_locations' => 'list<TargetingGeoLocationCustomLocation>',
      'electoral_districts' => 'list<TargetingGeoLocationElectoralDistrict>',
      'geo_markets' => 'list<TargetingGeoLocationMarket>',
      'large_geo_areas' => 'list<TargetingGeoLocationGeoEntities>',
      'location_cluster_ids' => 'list<TargetingGeoLocationLocationCluster>',
      'location_expansion' => 'TargetingGeoLocationLocationExpansion',
      'location_types' => 'list<string>',
      'medium_geo_areas' => 'list<TargetingGeoLocationGeoEntities>',
      'metro_areas' => 'list<TargetingGeoLocationGeoEntities>',
      'neighborhoods' => 'list<TargetingGeoLocationGeoEntities>',
      'places' => 'list<TargetingGeoLocationPlace>',
      'political_districts' => 'list<TargetingGeoLocationPoliticalDistrict>',
      'regions' => 'list<TargetingGeoLocationRegion>',
      'small_geo_areas' => 'list<TargetingGeoLocationGeoEntities>',
      'subcities' => 'list<TargetingGeoLocationGeoEntities>',
      'subneighborhoods' => 'list<TargetingGeoLocationGeoEntities>',
      'zips' => 'list<TargetingGeoLocationZip>',
    );
  }
}
