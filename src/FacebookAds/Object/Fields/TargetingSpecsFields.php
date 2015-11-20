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

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * @method static TargetingSpecsFields getInstance()
 */
class TargetingSpecsFields extends AbstractEnum {

  const GENDERS = 'genders';
  const AGE_MIN = 'age_min';
  const AGE_MAX = 'age_max';
  const GEO_LOCATIONS = 'geo_locations';
  const GEO_MARKETS = 'geo_markets';
  const EXCLUDED_GEO_LOCATIONS = 'excluded_geo_locations';
  const EXCLUSIONS = 'exclusions';
  const USER_ADCLUSTERS = 'user_adclusters';
  const INTERESTS = 'interests';
  const USER_OS = 'user_os';
  const USER_DEVICE = 'user_device';
  const WIRELESS_CARRIER = 'wireless_carrier';
  const PAGE_TYPES = 'page_types';
  const CONNECTIONS = 'connections';
  const EXCLUDED_CONNECTIONS = 'excluded_connections';
  const FAMILY_STATUSES = 'family_statuses';
  const FRIENDS_OF_CONNECTIONS = 'friends_of_connections';
  const FLEXIBLE_SPEC = 'flexible_spec';
  const BEHAVIORS = 'behaviors';
  const RELATIONSHIP_STATUSES = 'relationship_statuses';
  const INTERESTED_IN = 'interested_in';
  const LIFE_EVENTS = 'life_events';
  const LOCATION_TYPES = 'location_types';
  const POLITICS = 'politics';
  const MARKETS = 'markets';
  const INDUSTRIES = 'industries';
  const INCOME = 'income';
  const NET_WORTH = 'net_worth';
  const HOME_TYPE = 'home_type';
  const HOME_OWNERSHIP = 'home_ownership';
  const HOME_VALUE = 'home_value';
  const ETHNIC_AFFINITY = 'ethnic_affinity';
  const GENERATION = 'generation';
  const HOUSEHOLD_COMPOSITION = 'household_composition';
  const MOMS = 'moms';
  const OFFICE_TYPE = 'office_type';
  const EDUCATION_SCHOOLS = 'education_schools';
  const EDUCATION_STATUSES = 'education_statuses';
  const COLLEGE_YEARS = 'college_years';
  const EDUCATION_MAJORS = 'education_majors';
  const WORK_EMPLOYERS = 'work_employers';
  const WORK_POSITIONS = 'work_positions';
  const LOCALES = 'locales';
  const ZIPS = 'zips';
  const CUSTOM_AUDIENCES = 'custom_audiences';
  const CUSTOM_LOCATIONS = 'custom_locations';
  const EXCLUDED_CUSTOM_AUDIENCES = 'excluded_custom_audiences';
  const DYNAMIC_AUDIENCE_IDS = 'dynamic_audience_ids';
  const PRODUCT_AUDIENCE_SPECS = 'product_audience_specs';
  const EXCLUDED_PRODUCT_AUDIENCE_SPECS = 'excluded_product_audience_specs';
}
