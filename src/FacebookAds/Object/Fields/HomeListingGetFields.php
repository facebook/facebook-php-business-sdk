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

class HomeListingGetFields extends AbstractEnum {

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
  const CAPABILITIES = 'capabilities';
  const CAPABILITIES_DISABLED_BY_USER = 'capabilities_disabled_by_user';
  const CAPABILITIES_RENDERING_CATALOG_MANAGER = 'capabilities_rendering_catalog_manager';
  const CAPABILITY_TO_REJECTION_REASON = 'capability_to_rejection_reason';
  const CATALOG_ITEM_OVERRIDES = 'catalog_item_overrides';
  const CHANNELS_TO_INTEGRITY_STATUS = 'channels_to_integrity_status';
  const CO_2_EMISSION_RATING_EU = 'co_2_emission_rating_eu';
  const CURRENCY = 'currency';
  const CUSTOM_LABEL_0 = 'custom_label_0';
  const CUSTOM_LABEL_1 = 'custom_label_1';
  const CUSTOM_LABEL_2 = 'custom_label_2';
  const CUSTOM_LABEL_3 = 'custom_label_3';
  const CUSTOM_LABEL_4 = 'custom_label_4';
  const CUSTOM_NUMBER_0 = 'custom_number_0';
  const CUSTOM_NUMBER_1 = 'custom_number_1';
  const CUSTOM_NUMBER_2 = 'custom_number_2';
  const CUSTOM_NUMBER_3 = 'custom_number_3';
  const CUSTOM_NUMBER_4 = 'custom_number_4';
  const DAYS_ON_MARKET = 'days_on_market';
  const DESCRIPTION = 'description';
  const ENABLED_CAPABILITY_TO_REVIEW_STATUS = 'enabled_capability_to_review_status';
  const ENERGY_RATING_EU = 'energy_rating_eu';
  const FURNISH_TYPE = 'furnish_type';
  const GROUP_ID = 'group_id';
  const HEATING_TYPE = 'heating_type';
  const HOME_LISTING_ID = 'home_listing_id';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const IS_BLACKHOLED = 'is_blackholed';
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
  const OVERRIDE_DETAILS = 'override_details';
  const PARKING_TYPE = 'parking_type';
  const PARTNER_VERIFICATION = 'partner_verification';
  const PET_POLICY = 'pet_policy';
  const PRICE = 'price';
  const PRODUCT_FEED = 'product_feed';
  const PROPERTY_TYPE = 'property_type';
  const SANITIZED_IMAGES = 'sanitized_images';
  const SANITIZED_PREVIEWS = 'sanitized_previews';
  const SECURITYDEPOSIT_CURRENCY = 'securitydeposit_currency';
  const SECURITYDEPOSIT_PRICE = 'securitydeposit_price';
  const TAGS = 'tags';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const URL_SHIMMED = 'url_shimmed';
  const VALIDATION_ERRORS = 'validation_errors';
  const VIDEOS_METADATA = 'videos_metadata';
  const VISIBILITY = 'visibility';
  const YEAR_BUILT = 'year_built';

  public function getFieldTypes() {
    return array(
      'ac_type' => 'AcType',
      'additional_fees_description' => 'string',
      'address' => 'object',
      'agent_company' => 'string',
      'agent_email' => 'string',
      'agent_fb_page_id' => 'object',
      'agent_name' => 'string',
      'agent_phone' => 'string',
      'applinks' => 'object',
      'area_size' => 'int',
      'area_unit' => 'AreaUnit',
      'availability' => 'Availability',
      'capabilities' => 'list<Capabilities>',
      'capabilities_disabled_by_user' => 'list<string>',
      'capabilities_rendering_catalog_manager' => 'list<CapabilitiesRenderingCatalogManager>',
      'capability_to_rejection_reason' => 'list<object>',
      'catalog_item_overrides' => 'object',
      'channels_to_integrity_status' => 'object',
      'co_2_emission_rating_eu' => 'object',
      'currency' => 'string',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'custom_number_0' => 'int',
      'custom_number_1' => 'int',
      'custom_number_2' => 'int',
      'custom_number_3' => 'int',
      'custom_number_4' => 'int',
      'days_on_market' => 'int',
      'description' => 'string',
      'enabled_capability_to_review_status' => 'list<object>',
      'energy_rating_eu' => 'object',
      'furnish_type' => 'FurnishType',
      'group_id' => 'string',
      'heating_type' => 'HeatingType',
      'home_listing_id' => 'string',
      'id' => 'int',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'is_blackholed' => 'bool',
      'laundry_type' => 'LaundryType',
      'listing_type' => 'ListingType',
      'max_currency' => 'string',
      'max_price' => 'string',
      'min_currency' => 'string',
      'min_price' => 'string',
      'name' => 'string',
      'num_baths' => 'float',
      'num_beds' => 'float',
      'num_rooms' => 'float',
      'num_units' => 'int',
      'override_details' => 'object',
      'parking_type' => 'ParkingType',
      'partner_verification' => 'PartnerVerification',
      'pet_policy' => 'string',
      'price' => 'string',
      'product_feed' => 'object',
      'property_type' => 'PropertyType',
      'sanitized_images' => 'list<string>',
      'sanitized_previews' => 'list<string>',
      'securitydeposit_currency' => 'string',
      'securitydeposit_price' => 'string',
      'tags' => 'list<string>',
      'unit_price' => 'object',
      'url' => 'string',
      'url_shimmed' => 'string',
      'validation_errors' => 'object',
      'videos_metadata' => 'object',
      'visibility' => 'Visibility',
      'year_built' => 'int',
    );
  }
}
