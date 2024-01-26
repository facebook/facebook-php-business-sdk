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

class VehicleOfferFields extends AbstractEnum {

  const AMOUNT_CURRENCY = 'amount_currency';
  const AMOUNT_PERCENTAGE = 'amount_percentage';
  const AMOUNT_PRICE = 'amount_price';
  const AMOUNT_QUALIFIER = 'amount_qualifier';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const BODY_STYLE = 'body_style';
  const CASHBACK_CURRENCY = 'cashback_currency';
  const CASHBACK_PRICE = 'cashback_price';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const DMA_CODES = 'dma_codes';
  const DOWNPAYMENT_CURRENCY = 'downpayment_currency';
  const DOWNPAYMENT_PRICE = 'downpayment_price';
  const DOWNPAYMENT_QUALIFIER = 'downpayment_qualifier';
  const DRIVETRAIN = 'drivetrain';
  const END_DATE = 'end_date';
  const END_TIME = 'end_time';
  const EXTERIOR_COLOR = 'exterior_color';
  const FUEL_TYPE = 'fuel_type';
  const GENERATION = 'generation';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const INTERIOR_COLOR = 'interior_color';
  const INTERIOR_UPHOLSTERY = 'interior_upholstery';
  const MAKE = 'make';
  const MODEL = 'model';
  const OFFER_DESCRIPTION = 'offer_description';
  const OFFER_DISCLAIMER = 'offer_disclaimer';
  const OFFER_TYPE = 'offer_type';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const START_DATE = 'start_date';
  const START_TIME = 'start_time';
  const TERM_LENGTH = 'term_length';
  const TERM_QUALIFIER = 'term_qualifier';
  const TITLE = 'title';
  const TRANSMISSION = 'transmission';
  const TRIM = 'trim';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VEHICLE_OFFER_ID = 'vehicle_offer_id';
  const VISIBILITY = 'visibility';
  const YEAR = 'year';

  public function getFieldTypes() {
    return array(
      'amount_currency' => 'string',
      'amount_percentage' => 'float',
      'amount_price' => 'string',
      'amount_qualifier' => 'string',
      'applinks' => 'CatalogItemAppLinks',
      'availability' => 'string',
      'body_style' => 'string',
      'cashback_currency' => 'string',
      'cashback_price' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'dma_codes' => 'list<string>',
      'downpayment_currency' => 'string',
      'downpayment_price' => 'string',
      'downpayment_qualifier' => 'string',
      'drivetrain' => 'string',
      'end_date' => 'string',
      'end_time' => 'int',
      'exterior_color' => 'string',
      'fuel_type' => 'string',
      'generation' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'interior_color' => 'string',
      'interior_upholstery' => 'string',
      'make' => 'string',
      'model' => 'string',
      'offer_description' => 'string',
      'offer_disclaimer' => 'string',
      'offer_type' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'start_date' => 'string',
      'start_time' => 'int',
      'term_length' => 'unsigned int',
      'term_qualifier' => 'string',
      'title' => 'string',
      'transmission' => 'string',
      'trim' => 'string',
      'unit_price' => 'Object',
      'url' => 'string',
      'vehicle_offer_id' => 'string',
      'visibility' => 'Visibility',
      'year' => 'int',
    );
  }
}
