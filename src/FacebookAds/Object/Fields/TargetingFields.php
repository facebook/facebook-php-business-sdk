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

class TargetingFields extends AbstractEnum {

  const ADGROUP_ID = 'adgroup_id';
  const AGE_MAX = 'age_max';
  const AGE_MIN = 'age_min';
  const APP_INSTALL_STATE = 'app_install_state';
  const AUDIENCE_NETWORK_POSITIONS = 'audience_network_positions';
  const BEHAVIORS = 'behaviors';
  const BRAND_SAFETY_CONTENT_FILTER_LEVELS = 'brand_safety_content_filter_levels';
  const CATALOG_BASED_TARGETING = 'catalog_based_targeting';
  const CITIES = 'cities';
  const COLLEGE_YEARS = 'college_years';
  const CONNECTIONS = 'connections';
  const CONTEXTUAL_TARGETING_CATEGORIES = 'contextual_targeting_categories';
  const COUNTRIES = 'countries';
  const COUNTRY = 'country';
  const COUNTRY_GROUPS = 'country_groups';
  const CUSTOM_AUDIENCES = 'custom_audiences';
  const DEVICE_PLATFORMS = 'device_platforms';
  const DIRECT_INSTALL_DEVICES = 'direct_install_devices';
  const DYNAMIC_AUDIENCE_IDS = 'dynamic_audience_ids';
  const EDUCATION_MAJORS = 'education_majors';
  const EDUCATION_SCHOOLS = 'education_schools';
  const EDUCATION_STATUSES = 'education_statuses';
  const EFFECTIVE_AUDIENCE_NETWORK_POSITIONS = 'effective_audience_network_positions';
  const EFFECTIVE_DEVICE_PLATFORMS = 'effective_device_platforms';
  const EFFECTIVE_FACEBOOK_POSITIONS = 'effective_facebook_positions';
  const EFFECTIVE_INSTAGRAM_POSITIONS = 'effective_instagram_positions';
  const EFFECTIVE_MESSENGER_POSITIONS = 'effective_messenger_positions';
  const EFFECTIVE_PUBLISHER_PLATFORMS = 'effective_publisher_platforms';
  const ENGAGEMENT_SPECS = 'engagement_specs';
  const ETHNIC_AFFINITY = 'ethnic_affinity';
  const EXCLUDE_REACHED_SINCE = 'exclude_reached_since';
  const EXCLUDED_BRAND_SAFETY_CONTENT_TYPES = 'excluded_brand_safety_content_types';
  const EXCLUDED_CONNECTIONS = 'excluded_connections';
  const EXCLUDED_CUSTOM_AUDIENCES = 'excluded_custom_audiences';
  const EXCLUDED_DYNAMIC_AUDIENCE_IDS = 'excluded_dynamic_audience_ids';
  const EXCLUDED_ENGAGEMENT_SPECS = 'excluded_engagement_specs';
  const EXCLUDED_GEO_LOCATIONS = 'excluded_geo_locations';
  const EXCLUDED_MOBILE_DEVICE_MODEL = 'excluded_mobile_device_model';
  const EXCLUDED_PRODUCT_AUDIENCE_SPECS = 'excluded_product_audience_specs';
  const EXCLUDED_PUBLISHER_CATEGORIES = 'excluded_publisher_categories';
  const EXCLUDED_PUBLISHER_LIST_IDS = 'excluded_publisher_list_ids';
  const EXCLUDED_USER_DEVICE = 'excluded_user_device';
  const EXCLUSIONS = 'exclusions';
  const FACEBOOK_POSITIONS = 'facebook_positions';
  const FAMILY_STATUSES = 'family_statuses';
  const FB_DEAL_ID = 'fb_deal_id';
  const FLEXIBLE_SPEC = 'flexible_spec';
  const FRIENDS_OF_CONNECTIONS = 'friends_of_connections';
  const GENDERS = 'genders';
  const GENERATION = 'generation';
  const GEO_LOCATIONS = 'geo_locations';
  const HOME_OWNERSHIP = 'home_ownership';
  const HOME_TYPE = 'home_type';
  const HOME_VALUE = 'home_value';
  const HOUSEHOLD_COMPOSITION = 'household_composition';
  const INCOME = 'income';
  const INDUSTRIES = 'industries';
  const INSTAGRAM_POSITIONS = 'instagram_positions';
  const INSTREAM_VIDEO_SKIPPABLE_EXCLUDED = 'instream_video_skippable_excluded';
  const INTERESTED_IN = 'interested_in';
  const INTERESTS = 'interests';
  const IS_WHATSAPP_DESTINATION_AD = 'is_whatsapp_destination_ad';
  const KEYWORDS = 'keywords';
  const LIFE_EVENTS = 'life_events';
  const LOCALES = 'locales';
  const MESSENGER_POSITIONS = 'messenger_positions';
  const MOMS = 'moms';
  const NET_WORTH = 'net_worth';
  const OFFICE_TYPE = 'office_type';
  const PLACE_PAGE_SET_IDS = 'place_page_set_ids';
  const POLITICAL_VIEWS = 'political_views';
  const POLITICS = 'politics';
  const PRODUCT_AUDIENCE_SPECS = 'product_audience_specs';
  const PROSPECTING_AUDIENCE = 'prospecting_audience';
  const PUBLISHER_PLATFORMS = 'publisher_platforms';
  const RADIUS = 'radius';
  const REGIONS = 'regions';
  const RELATIONSHIP_STATUSES = 'relationship_statuses';
  const SITE_CATEGORY = 'site_category';
  const TARGETING_OPTIMIZATION = 'targeting_optimization';
  const USER_ADCLUSTERS = 'user_adclusters';
  const USER_DEVICE = 'user_device';
  const USER_EVENT = 'user_event';
  const USER_OS = 'user_os';
  const WIRELESS_CARRIER = 'wireless_carrier';
  const WORK_EMPLOYERS = 'work_employers';
  const WORK_POSITIONS = 'work_positions';
  const ZIPS = 'zips';

  public function getFieldTypes() {
    return array(
      'adgroup_id' => 'string',
      'age_max' => 'unsigned int',
      'age_min' => 'unsigned int',
      'app_install_state' => 'string',
      'audience_network_positions' => 'list<string>',
      'behaviors' => 'list<IDName>',
      'brand_safety_content_filter_levels' => 'list<string>',
      'catalog_based_targeting' => 'CatalogBasedTargeting',
      'cities' => 'list<IDName>',
      'college_years' => 'list<unsigned int>',
      'connections' => 'list<ConnectionsTargeting>',
      'contextual_targeting_categories' => 'list<IDName>',
      'countries' => 'list<string>',
      'country' => 'list<string>',
      'country_groups' => 'list<string>',
      'custom_audiences' => 'list<RawCustomAudience>',
      'device_platforms' => 'list<DevicePlatforms>',
      'direct_install_devices' => 'bool',
      'dynamic_audience_ids' => 'list<string>',
      'education_majors' => 'list<IDName>',
      'education_schools' => 'list<IDName>',
      'education_statuses' => 'list<unsigned int>',
      'effective_audience_network_positions' => 'list<string>',
      'effective_device_platforms' => 'list<EffectiveDevicePlatforms>',
      'effective_facebook_positions' => 'list<string>',
      'effective_instagram_positions' => 'list<string>',
      'effective_messenger_positions' => 'list<string>',
      'effective_publisher_platforms' => 'list<string>',
      'engagement_specs' => 'list<TargetingDynamicRule>',
      'ethnic_affinity' => 'list<IDName>',
      'exclude_reached_since' => 'list<string>',
      'excluded_brand_safety_content_types' => 'list<string>',
      'excluded_connections' => 'list<ConnectionsTargeting>',
      'excluded_custom_audiences' => 'list<RawCustomAudience>',
      'excluded_dynamic_audience_ids' => 'list<string>',
      'excluded_engagement_specs' => 'list<TargetingDynamicRule>',
      'excluded_geo_locations' => 'TargetingGeoLocation',
      'excluded_mobile_device_model' => 'list<string>',
      'excluded_product_audience_specs' => 'list<TargetingProductAudienceSpec>',
      'excluded_publisher_categories' => 'list<string>',
      'excluded_publisher_list_ids' => 'list<string>',
      'excluded_user_device' => 'list<string>',
      'exclusions' => 'FlexibleTargeting',
      'facebook_positions' => 'list<string>',
      'family_statuses' => 'list<IDName>',
      'fb_deal_id' => 'string',
      'flexible_spec' => 'list<FlexibleTargeting>',
      'friends_of_connections' => 'list<ConnectionsTargeting>',
      'genders' => 'list<unsigned int>',
      'generation' => 'list<IDName>',
      'geo_locations' => 'TargetingGeoLocation',
      'home_ownership' => 'list<IDName>',
      'home_type' => 'list<IDName>',
      'home_value' => 'list<IDName>',
      'household_composition' => 'list<IDName>',
      'income' => 'list<IDName>',
      'industries' => 'list<IDName>',
      'instagram_positions' => 'list<string>',
      'instream_video_skippable_excluded' => 'bool',
      'interested_in' => 'list<unsigned int>',
      'interests' => 'list<IDName>',
      'is_whatsapp_destination_ad' => 'bool',
      'keywords' => 'list<string>',
      'life_events' => 'list<IDName>',
      'locales' => 'list<unsigned int>',
      'messenger_positions' => 'list<string>',
      'moms' => 'list<IDName>',
      'net_worth' => 'list<IDName>',
      'office_type' => 'list<IDName>',
      'place_page_set_ids' => 'list<string>',
      'political_views' => 'list<unsigned int>',
      'politics' => 'list<IDName>',
      'product_audience_specs' => 'list<TargetingProductAudienceSpec>',
      'prospecting_audience' => 'TargetingProspectingAudience',
      'publisher_platforms' => 'list<string>',
      'radius' => 'string',
      'regions' => 'list<IDName>',
      'relationship_statuses' => 'list<unsigned int>',
      'site_category' => 'list<string>',
      'targeting_optimization' => 'string',
      'user_adclusters' => 'list<IDName>',
      'user_device' => 'list<string>',
      'user_event' => 'list<unsigned int>',
      'user_os' => 'list<string>',
      'wireless_carrier' => 'list<string>',
      'work_employers' => 'list<IDName>',
      'work_positions' => 'list<IDName>',
      'zips' => 'list<string>',
    );
  }
}
