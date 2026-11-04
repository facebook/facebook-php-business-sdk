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

class ProductCatalogAutomotiveItemGetFields extends AbstractEnum {

  const ADDRESS = 'address';
  const AMOUNT_CURRENCY = 'amount_currency';
  const AMOUNT_PERCENTAGE = 'amount_percentage';
  const AMOUNT_PRICE = 'amount_price';
  const AMOUNT_QUALIFIER = 'amount_qualifier';
  const APPLINKS = 'applinks';
  const AUTOMOTIVE_MODEL_ID = 'automotive_model_id';
  const AVAILABILITY = 'availability';
  const AVAILABILITY_CIRCLE_RADIUS = 'availability_circle_radius';
  const AVAILABILITY_CIRCLE_RADIUS_UNIT = 'availability_circle_radius_unit';
  const BODY_STYLE = 'body_style';
  const CAPABILITIES = 'capabilities';
  const CAPABILITIES_DISABLED_BY_USER = 'capabilities_disabled_by_user';
  const CAPABILITIES_RENDERING_CATALOG_MANAGER = 'capabilities_rendering_catalog_manager';
  const CARFAX_DEALERSHIP_ID = 'carfax_dealership_id';
  const CHANNELS_TO_INTEGRITY_STATUS = 'channels_to_integrity_status';
  const COMSCORE_MARKET_CODES = 'comscore_market_codes';
  const CONDITION = 'condition';
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
  const DATE_FIRST_ON_LOT = 'date_first_on_lot';
  const DAYS_ON_LOT = 'days_on_lot';
  const DEALER_COMMUNICATION_CHANNEL = 'dealer_communication_channel';
  const DEALER_EMAIL = 'dealer_email';
  const DEALER_ID = 'dealer_id';
  const DEALER_NAME = 'dealer_name';
  const DEALER_PHONE = 'dealer_phone';
  const DEALER_PRIVACY_POLICY_URL = 'dealer_privacy_policy_url';
  const DEALER_URL = 'dealer_url';
  const DEFAULT_COUNTRY = 'default_country';
  const DEFAULT_LANGUAGE_LOCALE = 'default_language_locale';
  const DESCRIPTION = 'description';
  const DOWNPAYMENT_CURRENCY = 'downpayment_currency';
  const DOWNPAYMENT_PRICE = 'downpayment_price';
  const DOWNPAYMENT_QUALIFIER = 'downpayment_qualifier';
  const DRIVETRAIN = 'drivetrain';
  const ENABLED_CAPABILITY_TO_REVIEW_STATUS = 'enabled_capability_to_review_status';
  const END_DATE = 'end_date';
  const ENGINE_SIZE = 'engine_size';
  const EXTERIOR_COLOR = 'exterior_color';
  const FB_PAGE_ID = 'fb_page_id';
  const FEATURES = 'features';
  const FINANCE_DESCRIPTION = 'finance_description';
  const FINANCE_TYPE = 'finance_type';
  const FUEL_TYPE = 'fuel_type';
  const GENERATION = 'generation';
  const HORSE_POWER = 'horse_power';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const INTERIOR_COLOR = 'interior_color';
  const INTERIOR_UPHOLSTERY = 'interior_upholstery';
  const IS_BLACKHOLED = 'is_blackholed';
  const LEGAL_DISCLOSURE_IMPRESSUM_URL = 'legal_disclosure_impressum_url';
  const MAKE = 'make';
  const MILEAGE = 'mileage';
  const MODEL = 'model';
  const OFFER_DESCRIPTION = 'offer_description';
  const OFFER_DISCLAIMER = 'offer_disclaimer';
  const OFFER_DISCLAIMER_URL = 'offer_disclaimer_url';
  const OFFER_TYPE = 'offer_type';
  const PREVIOUS_CURRENCY = 'previous_currency';
  const PREVIOUS_PRICE = 'previous_price';
  const PRICE = 'price';
  const PRODUCT_FEED = 'product_feed';
  const PRODUCT_PRIORITY_0 = 'product_priority_0';
  const PRODUCT_PRIORITY_1 = 'product_priority_1';
  const PRODUCT_PRIORITY_2 = 'product_priority_2';
  const PRODUCT_PRIORITY_3 = 'product_priority_3';
  const PRODUCT_PRIORITY_4 = 'product_priority_4';
  const SALE_CURRENCY = 'sale_currency';
  const SALE_PRICE = 'sale_price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const SANITIZED_PREVIEWS = 'sanitized_previews';
  const START_DATE = 'start_date';
  const STATE_OF_VEHICLE = 'state_of_vehicle';
  const STOCK_NUMBER = 'stock_number';
  const TAGS = 'tags';
  const TERM_LENGTH = 'term_length';
  const TERM_QUALIFIER = 'term_qualifier';
  const TITLE = 'title';
  const TRANSMISSION = 'transmission';
  const TRIM = 'trim';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const URL_SHIMMED = 'url_shimmed';
  const VALIDATION_ERRORS = 'validation_errors';
  const VEHICLE_ID = 'vehicle_id';
  const VEHICLE_OFFER_ID = 'vehicle_offer_id';
  const VEHICLE_REGISTRATION_PLATE = 'vehicle_registration_plate';
  const VEHICLE_SPECIFICATIONS = 'vehicle_specifications';
  const VEHICLE_TYPE = 'vehicle_type';
  const VIDEOS_METADATA = 'videos_metadata';
  const VIN = 'vin';
  const VISIBILITY = 'visibility';
  const YEAR = 'year';

  public function getFieldTypes() {
    return array(
      'address' => 'object',
      'amount_currency' => 'string',
      'amount_percentage' => 'float',
      'amount_price' => 'string',
      'amount_qualifier' => 'string',
      'applinks' => 'object',
      'automotive_model_id' => 'string',
      'availability' => 'Availability',
      'availability_circle_radius' => 'float',
      'availability_circle_radius_unit' => 'AvailabilityCircleRadiusUnit',
      'body_style' => 'BodyStyle',
      'capabilities' => 'list<Capabilities>',
      'capabilities_disabled_by_user' => 'list<CapabilitiesDisabledByUser>',
      'capabilities_rendering_catalog_manager' => 'list<CapabilitiesRenderingCatalogManager>',
      'carfax_dealership_id' => 'string',
      'channels_to_integrity_status' => 'object',
      'comscore_market_codes' => 'list<string>',
      'condition' => 'Condition',
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
      'date_first_on_lot' => 'string',
      'days_on_lot' => 'int',
      'dealer_communication_channel' => 'DealerCommunicationChannel',
      'dealer_email' => 'string',
      'dealer_id' => 'string',
      'dealer_name' => 'string',
      'dealer_phone' => 'string',
      'dealer_privacy_policy_url' => 'string',
      'dealer_url' => 'string',
      'default_country' => 'string',
      'default_language_locale' => 'string',
      'description' => 'string',
      'downpayment_currency' => 'string',
      'downpayment_price' => 'string',
      'downpayment_qualifier' => 'string',
      'drivetrain' => 'Drivetrain',
      'enabled_capability_to_review_status' => 'list<object>',
      'end_date' => 'string',
      'engine_size' => 'float',
      'exterior_color' => 'string',
      'fb_page_id' => 'object',
      'features' => 'list<object>',
      'finance_description' => 'string',
      'finance_type' => 'FinanceType',
      'fuel_type' => 'FuelType',
      'generation' => 'string',
      'horse_power' => 'int',
      'id' => 'int',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'interior_color' => 'string',
      'interior_upholstery' => 'string',
      'is_blackholed' => 'bool',
      'legal_disclosure_impressum_url' => 'string',
      'make' => 'string',
      'mileage' => 'object',
      'model' => 'string',
      'offer_description' => 'string',
      'offer_disclaimer' => 'string',
      'offer_disclaimer_url' => 'string',
      'offer_type' => 'OfferType',
      'previous_currency' => 'string',
      'previous_price' => 'string',
      'price' => 'string',
      'product_feed' => 'object',
      'product_priority_0' => 'float',
      'product_priority_1' => 'float',
      'product_priority_2' => 'float',
      'product_priority_3' => 'float',
      'product_priority_4' => 'float',
      'sale_currency' => 'string',
      'sale_price' => 'string',
      'sanitized_images' => 'list<string>',
      'sanitized_previews' => 'list<string>',
      'start_date' => 'string',
      'state_of_vehicle' => 'StateOfVehicle',
      'stock_number' => 'string',
      'tags' => 'list<string>',
      'term_length' => 'int',
      'term_qualifier' => 'string',
      'title' => 'string',
      'transmission' => 'Transmission',
      'trim' => 'string',
      'unit_price' => 'object',
      'url' => 'string',
      'url_shimmed' => 'string',
      'validation_errors' => 'object',
      'vehicle_id' => 'string',
      'vehicle_offer_id' => 'string',
      'vehicle_registration_plate' => 'string',
      'vehicle_specifications' => 'list<object>',
      'vehicle_type' => 'VehicleType',
      'videos_metadata' => 'object',
      'vin' => 'string',
      'visibility' => 'Visibility',
      'year' => 'int',
    );
  }
}
