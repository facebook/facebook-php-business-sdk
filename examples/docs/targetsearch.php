<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAdsDocs;

use FacebookAds\Object\TargetingSearch;
use FacebookAds\Object\Search\TargetingSearchTypes;
use FacebookAdsTest\Config\Config;

/** @var Config config*/

// _DOC open [SEARCH_GEOLOCATION_WITH_COUNTRY]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::GEOLOCATION,
  null,
  'un',
  array(
    'location_types' => array('country'),
  ));
// _DOC close [SEARCH_GEOLOCATION_WITH_COUNTRY]

// _DOC open [SEARCH_GEOLOCATION_WITH_REGION]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::GEOLOCATION,
  null,
  'al',
  array(
    'location_types' => array('region'),
  ));
// _DOC close [SEARCH_GEOLOCATION_WITH_REGION]

// _DOC open [SEARCH_GEOLOCATION_WITH_CITY]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::GEOLOCATION,
  null,
  'dub',
  array(
    'location_types' => array('city'),
  ));
// _DOC close [SEARCH_GEOLOCATION_WITH_CITY]

// _DOC open [SEARCH_GEOLOCATION_WITH_ZIP]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::GEOLOCATION,
  null,
  '9',
  array(
    'location_types' => array('zip'),
  ));
// _DOC close [SEARCH_GEOLOCATION_WITH_ZIP]

// _DOC open [SEARCH_GEOLOCATION_WITH_GEO_MARKET]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::GEOLOCATION,
  null,
  'New',
  array(
    'location_types' => array('geo_market'),
  ));
// _DOC close [SEARCH_GEOLOCATION_WITH_GEO_MARKET]

// _DOC open [SEARCH_LOCATIONS_METADATA]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::GEOLOCATIONMETA,
  null,
  null,
  array(
    'cities' => array(2418779),
    'zips' => array('US:90210'),
    'countries' => array('US', 'JP'),
    'regions' => array(10),
  ));
// _DOC close [SEARCH_LOCATIONS_METADATA]

// _DOC open [SEARCH_RADIUS_SUGGESTION]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::RADIUS_SUGGESTION,
  null,
  null,
  array(
    'latitude' => 37.449478,
    'longitude' => -122.173016,
  ));
// _DOC close [SEARCH_RADIUS_SUGGESTION]

// _DOC open [SEARCH_RADIUS_SUGGESTION_WITH_KILOMETER]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::RADIUS_SUGGESTION,
  null,
  null,
  array(
    'latitude' => 37.449478,
    'longitude' => -122.173016,
    'distance_unit' => 'kilometer',
  ));
// _DOC close [SEARCH_RADIUS_SUGGESTION_WITH_KILOMETER]

// _DOC open [SEARCH_INTEREST]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::INTEREST,
  null,
  'baseball');
// _DOC close [SEARCH_INTEREST]

// _DOC open [SEARCH_INTEREST_SUGGESTION]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::INTEREST_SUGGESTION,
  null,
  null,
  array(
  'interest_list' => array('soccer'),
  ));
// _DOC close [SEARCH_INTEREST_SUGGESTION]

// _DOC open [SEARCH_VALIDATION]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::INTEREST_VALIDATE,
  null,
  null,
  array(
  'interest_list' => array(
    'Japan',
    'nonexistantkeyword',
    ),
  ));
// _DOC close [SEARCH_VALIDATION]

// _DOC open [SEARCH_TARGETING_CATEGORY_WITH_INTERESTS]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::TARGETING_CATEGORY,
  'interests');
// _DOC close [SEARCH_TARGETING_CATEGORY_WITH_INTERESTS]

// _DOC open [SEARCH_TARGETING_CATEGORY_WITH_BEHAVIORS]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::TARGETING_CATEGORY,
  'behaviors');
// _DOC close [SEARCH_TARGETING_CATEGORY_WITH_BEHAVIORS]

// _DOC open [SEARCH_LOCALE]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::LOCALE,
  null,
  'en');
// _DOC close [SEARCH_LOCALE]

// _DOC open [SEARCH_EDUCATION_SCHOOL]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::EDUCATION,
  null,
  'ha');
// _DOC close [SEARCH_EDUCATION_SCHOOL]

// _DOC open [SEARCH_EDUCATION_MAJOR]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::MAJOR,
  null,
  'ph');
// _DOC close [SEARCH_EDUCATION_MAJOR]

// _DOC open [SEARCH_WORK_EMPLOYER]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::EMPLOYER,
  null,
  'mic');
// _DOC close [SEARCH_WORK_EMPLOYER]

// _DOC open [SEARCH_WORK_POSITION]
// use FacebookAds\Object\TargetingSearch;
// use FacebookAds\Object\Search\TargetingSearchTypes;

$result = TargetingSearch::search(
  TargetingSearchTypes::POSITION,
  null,
  'ana');
// _DOC close [SEARCH_WORK_POSITION]
