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
  const BRAND = 'brand';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CURRENCY = 'currency';
  const CUSTOM_LABEL_0 = 'custom_label_0';
  const CUSTOM_LABEL_1 = 'custom_label_1';
  const CUSTOM_LABEL_2 = 'custom_label_2';
  const CUSTOM_LABEL_3 = 'custom_label_3';
  const CUSTOM_LABEL_4 = 'custom_label_4';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const LOCAL_SERVICE_BUSINESS_ID = 'local_service_business_id';
  const PRICE = 'price';
  const SANITIZED_IMAGES = 'sanitized_images';
  const TITLE = 'title';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
      'applinks' => 'CatalogItemAppLinks',
      'brand' => 'string',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'currency' => 'string',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'description' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'local_service_business_id' => 'string',
      'price' => 'string',
      'sanitized_images' => 'list<string>',
      'title' => 'string',
      'unit_price' => 'Object',
      'url' => 'string',
    );
  }
}
