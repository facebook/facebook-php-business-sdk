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

class VehicleFields extends AbstractEnum {

  const ADDRESS = 'address';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const BODY_STYLE = 'body_style';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CONDITION = 'condition';
  const CURRENCY = 'currency';
  const CUSTOM_LABEL_0 = 'custom_label_0';
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
  const SALE_CURRENCY = 'sale_currency';
  const SALE_PRICE = 'sale_price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const STATE_OF_VEHICLE = 'state_of_vehicle';
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
  const YEAR = 'year';

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
      'applinks' => 'CatalogItemAppLinks',
      'availability' => 'string',
      'body_style' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'condition' => 'string',
      'currency' => 'string',
      'custom_label_0' => 'string',
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
      'sale_currency' => 'string',
      'sale_price' => 'string',
      'sanitized_images' => 'list<string>',
      'state_of_vehicle' => 'string',
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
      'year' => 'unsigned int',
    );
  }
}
