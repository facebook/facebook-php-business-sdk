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

class LocalServiceBusinessFields extends AbstractEnum {

  const ADDRESS = 'address';
  const APPLINKS = 'applinks';
  const AVAILABILITY = 'availability';
  const BRAND = 'brand';
  const CATEGORY = 'category';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CONDITION = 'condition';
  const CUISINE_TYPE = 'cuisine_type';
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
  const DESCRIPTION = 'description';
  const EXPIRATION_DATE = 'expiration_date';
  const GTIN = 'gtin';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const LOCAL_SERVICE_BUSINESS_ID = 'local_service_business_id';
  const PHONE = 'phone';
  const PRICE = 'price';
  const PRICE_RANGE = 'price_range';
  const RETAILER_CATEGORY = 'retailer_category';
  const SANITIZED_IMAGES = 'sanitized_images';
  const SIZE = 'size';
  const TITLE = 'title';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';
  const VENDOR_ID = 'vendor_id';

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
      'applinks' => 'CatalogItemAppLinks',
      'availability' => 'Availability',
      'brand' => 'string',
      'category' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'condition' => 'Condition',
      'cuisine_type' => 'string',
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
      'description' => 'string',
      'expiration_date' => 'string',
      'gtin' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'local_service_business_id' => 'string',
      'phone' => 'string',
      'price' => 'string',
      'price_range' => 'string',
      'retailer_category' => 'string',
      'sanitized_images' => 'list<string>',
      'size' => 'string',
      'title' => 'string',
      'unit_price' => 'Object',
      'url' => 'string',
      'vendor_id' => 'string',
    );
  }
}
