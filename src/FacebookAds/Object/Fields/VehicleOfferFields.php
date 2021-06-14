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

class VehicleOfferFields extends AbstractEnum {

  const AMOUNT_CURRENCY = 'amount_currency';
  const AMOUNT_PERCENTAGE = 'amount_percentage';
  const AMOUNT_PRICE = 'amount_price';
  const AMOUNT_QUALIFIER = 'amount_qualifier';
  const APPLINKS = 'applinks';
  const BODY_STYLE = 'body_style';
  const CASHBACK_CURRENCY = 'cashback_currency';
  const CASHBACK_PRICE = 'cashback_price';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const DMA_CODES = 'dma_codes';
  const DOWNPAYMENT_CURRENCY = 'downpayment_currency';
  const DOWNPAYMENT_PRICE = 'downpayment_price';
  const DOWNPAYMENT_QUALIFIER = 'downpayment_qualifier';
  const END_DATE = 'end_date';
  const END_TIME = 'end_time';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
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
  const TRIM = 'trim';
  const URL = 'url';
  const VEHICLE_OFFER_ID = 'vehicle_offer_id';
  const YEAR = 'year';

  public function getFieldTypes() {
    return array(
      'amount_currency' => 'string',
      'amount_percentage' => 'float',
      'amount_price' => 'string',
      'amount_qualifier' => 'string',
      'applinks' => 'CatalogItemAppLinks',
      'body_style' => 'string',
      'cashback_currency' => 'string',
      'cashback_price' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'dma_codes' => 'list<string>',
      'downpayment_currency' => 'string',
      'downpayment_price' => 'string',
      'downpayment_qualifier' => 'string',
      'end_date' => 'string',
      'end_time' => 'int',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
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
      'trim' => 'string',
      'url' => 'string',
      'vehicle_offer_id' => 'string',
      'year' => 'int',
    );
  }
}
