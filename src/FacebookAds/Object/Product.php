<?php
/**
 * Copyright 2014 Facebook, Inc.
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

namespace FacebookAds\Object;

use FacebookAds\Object\Fields\ProductFields;
use FacebookAds\Object\Traits\CannotCreate;
use FacebookAds\Object\Traits\FieldValidation;

class Product extends AbstractCrudObject {
  use CannotCreate;
  use FieldValidation;

  /**
   * @var string[]
   */
  protected static $fields = array(
    ProductFields::ID,
    ProductFields::AGE_GROUP,
    ProductFields::AVAILABILITY,
    ProductFields::BRAND,
    ProductFields::CATEGORY,
    ProductFields::COLOR,
    ProductFields::CONDITION,
    ProductFields::DESCRIPTION,
    ProductFields::EXPIRATION_DATE,
    ProductFields::GENDER,
    ProductFields::GTIN,
    ProductFields::IMAGE_URL,
    ProductFields::MATERIAL,
    ProductFields::MANUFACTURER_PART_NUMBER,
    ProductFields::NAME,
    ProductFields::PATTERN,
    ProductFields::PRICE,
    ProductFields::PRODUCT_TYPE,
    ProductFields::RETAILER_ID,
    ProductFields::RETAILER_PRODUCT_GROUP_ID,
    ProductFields::SALE_PRICE,
    ProductFields::SALE_PRICE_START_DATE,
    ProductFields::SALE_PRICE_END_DATE,
    ProductFields::SHIPPING_WEIGHT_VALUE,
    ProductFields::SHIPPING_WEIGHT_UNIT,
    ProductFields::SIZE,
    ProductFields::URL,
    ProductFields::PRODUCT_FEED,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'products';
  }

  public function getProductSets(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ProductSet::className(), $fields, $params, 'product_sets');
  }
}
