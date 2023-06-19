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

class HomeListingFields extends AbstractEnum {

  const AC_TYPE = 'ac_type';
  const ADDITIONAL_FEES_DESCRIPTION = 'additional_fees_description';
  const ADDRESS = 'address';
  const AGENT_COMPANY = 'agent_company';
  const AGENT_EMAIL = 'agent_email';
  const AGENT_FB_PAGE_ID = 'agent_fb_page_id';
  const AGENT_NAME = 'agent_name';
  const AGENT_PHONE = 'agent_phone';
  const APPLINKS = 'applinks';
  const AREA_SIZE = 'area_size';
  const AREA_UNIT = 'area_unit';
  const AVAILABILITY = 'availability';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CO_2_EMISSION_RATING_EU = 'co_2_emission_rating_eu';
  const CURRENCY = 'currency';
  const DAYS_ON_MARKET = 'days_on_market';
  const DESCRIPTION = 'description';
  const ENERGY_RATING_EU = 'energy_rating_eu';
  const FURNISH_TYPE = 'furnish_type';
  const GROUP_ID = 'group_id';
  const HEATING_TYPE = 'heating_type';
  const HOME_LISTING_ID = 'home_listing_id';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const LAUNDRY_TYPE = 'laundry_type';
  const LISTING_TYPE = 'listing_type';
  const MAX_CURRENCY = 'max_currency';
  const MAX_PRICE = 'max_price';
  const MIN_CURRENCY = 'min_currency';
  const MIN_PRICE = 'min_price';
  const NAME = 'name';
  const NUM_BATHS = 'num_baths';
  const NUM_BEDS = 'num_beds';
  const NUM_ROOMS = 'num_rooms';
  const NUM_UNITS = 'num_units';
  const PARKING_TYPE = 'parking_type';
  const PARTNER_VERIFICATION = 'partner_verification';
  const PET_POLICY = 'pet_policy';
  const PRICE = 'price';
  const PROPERTY_TYPE = 'property_type';
  const SANITIZED_IMAGES = 'sanitized_images';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VISIBILITY = 'visibility';
  const YEAR_BUILT = 'year_built';

  public function getFieldTypes() {
    return array(
      'ac_type' => 'string',
      'additional_fees_description' => 'string',
      'address' => 'Object',
      'agent_company' => 'string',
      'agent_email' => 'string',
      'agent_fb_page_id' => 'Page',
      'agent_name' => 'string',
      'agent_phone' => 'string',
      'applinks' => 'CatalogItemAppLinks',
      'area_size' => 'unsigned int',
      'area_unit' => 'string',
      'availability' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'co_2_emission_rating_eu' => 'Object',
      'currency' => 'string',
      'days_on_market' => 'unsigned int',
      'description' => 'string',
      'energy_rating_eu' => 'Object',
      'furnish_type' => 'string',
      'group_id' => 'string',
      'heating_type' => 'string',
      'home_listing_id' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'laundry_type' => 'string',
      'listing_type' => 'string',
      'max_currency' => 'string',
      'max_price' => 'string',
      'min_currency' => 'string',
      'min_price' => 'string',
      'name' => 'string',
      'num_baths' => 'float',
      'num_beds' => 'float',
      'num_rooms' => 'float',
      'num_units' => 'unsigned int',
      'parking_type' => 'string',
      'partner_verification' => 'string',
      'pet_policy' => 'string',
      'price' => 'string',
      'property_type' => 'string',
      'sanitized_images' => 'list<string>',
      'unit_price' => 'Object',
      'url' => 'string',
      'visibility' => 'Visibility',
      'year_built' => 'int',
    );
  }
}
