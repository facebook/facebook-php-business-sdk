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

class VehicleFields extends AbstractEnum {

  const ADDRESS = 'address';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const AVAILABILITY_CIRCLE_RADIUS = 'availability_circle_radius';
  const AVAILABILITY_CIRCLE_RADIUS_UNIT = 'availability_circle_radius_unit';
  const BODY_STYLE = 'body_style';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
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
  const DEALER_COMMUNICATION_CHANNEL = 'dealer_communication_channel';
  const DEALER_EMAIL = 'dealer_email';
  const DEALER_ID = 'dealer_id';
  const DEALER_NAME = 'dealer_name';
  const DEALER_PHONE = 'dealer_phone';
  const DEALER_PRIVACY_POLICY_URL = 'dealer_privacy_policy_url';
  const DESCRIPTION = 'description';
  const DRIVETRAIN = 'drivetrain';
  const EXTERIOR_COLOR = 'exterior_color';
  const FB_PAGE_ID = 'fb_page_id';
  const FEATURES = 'features';
  const FUEL_TYPE = 'fuel_type';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const INTERIOR_COLOR = 'interior_color';
  const LEGAL_DISCLOSURE_IMPRESSUM_URL = 'legal_disclosure_impressum_url';
  const MAKE = 'make';
  const MILEAGE = 'mileage';
  const MODEL = 'model';
  const PREVIOUS_CURRENCY = 'previous_currency';
  const PREVIOUS_PRICE = 'previous_price';
  const PRICE = 'price';
  const PRODUCT_PRIORITY_0 = 'product_priority_0';
  const PRODUCT_PRIORITY_1 = 'product_priority_1';
  const PRODUCT_PRIORITY_2 = 'product_priority_2';
  const PRODUCT_PRIORITY_3 = 'product_priority_3';
  const PRODUCT_PRIORITY_4 = 'product_priority_4';
  const SALE_CURRENCY = 'sale_currency';
  const SALE_PRICE = 'sale_price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const STATE_OF_VEHICLE = 'state_of_vehicle';
  const TAGS = 'tags';
  const TITLE = 'title';
  const TRANSMISSION = 'transmission';
  const TRIM = 'trim';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VEHICLE_ID = 'vehicle_id';
  const VEHICLE_REGISTRATION_PLATE = 'vehicle_registration_plate';
  const VEHICLE_SPECIFICATIONS = 'vehicle_specifications';
  const VEHICLE_TYPE = 'vehicle_type';
  const VIN = 'vin';
  const VISIBILITY = 'visibility';
  const YEAR = 'year';

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
      'applinks' => 'CatalogItemAppLinks',
      'availability' => 'string',
      'availability_circle_radius' => 'float',
      'availability_circle_radius_unit' => 'string',
      'body_style' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'condition' => 'string',
      'currency' => 'string',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'custom_number_0' => 'unsigned int',
      'custom_number_1' => 'unsigned int',
      'custom_number_2' => 'unsigned int',
      'custom_number_3' => 'unsigned int',
      'custom_number_4' => 'unsigned int',
      'date_first_on_lot' => 'string',
      'dealer_communication_channel' => 'string',
      'dealer_email' => 'string',
      'dealer_id' => 'string',
      'dealer_name' => 'string',
      'dealer_phone' => 'string',
      'dealer_privacy_policy_url' => 'string',
      'description' => 'string',
      'drivetrain' => 'string',
      'exterior_color' => 'string',
      'fb_page_id' => 'Page',
      'features' => 'list<Object>',
      'fuel_type' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'interior_color' => 'string',
      'legal_disclosure_impressum_url' => 'string',
      'make' => 'string',
      'mileage' => 'Object',
      'model' => 'string',
      'previous_currency' => 'string',
      'previous_price' => 'string',
      'price' => 'string',
      'product_priority_0' => 'float',
      'product_priority_1' => 'float',
      'product_priority_2' => 'float',
      'product_priority_3' => 'float',
      'product_priority_4' => 'float',
      'sale_currency' => 'string',
      'sale_price' => 'string',
      'sanitized_images' => 'list<string>',
      'state_of_vehicle' => 'string',
      'tags' => 'list<string>',
      'title' => 'string',
      'transmission' => 'string',
      'trim' => 'string',
      'unit_price' => 'Object',
      'url' => 'string',
      'vehicle_id' => 'string',
      'vehicle_registration_plate' => 'string',
      'vehicle_specifications' => 'list<Object>',
      'vehicle_type' => 'string',
      'vin' => 'string',
      'visibility' => 'Visibility',
      'year' => 'unsigned int',
    );
  }
}
