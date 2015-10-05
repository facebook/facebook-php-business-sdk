<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

use FacebookAds\Api;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\Fields\ProductFields;
use FacebookAds\Object\Traits\CannotCreate;
use FacebookAds\Object\Traits\FieldValidation;

class Product extends AbstractCrudObject {
  use CannotCreate;
  use FieldValidation;

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'products';
  }

  /**
   * @return ProductFields
   */
  public static function getFieldsEnum() {
    return ProductFields::getInstance();
  }

  /**
   * @param string $retailer_id
   * @param int $catalog_id
   * @param array $fields
   * @param array $params
   * @return Product
   */
  public static function getProductFromCatalogByRetailerId (
    $retailer_id,
    $catalog_id,
    array $fields = array(),
    array $params = array()) {
    $response = Api::instance()->call(
      self::buildCatalogUrlForRetailerId($retailer_id, $catalog_id),
      RequestInterface::METHOD_GET,
      array_merge($params, array('fields' => $fields)));
    $response_data = $response->getContent();
    $product = new static($response_data[ProductFields::ID]);
    $product->setDataWithoutValidation($response_data);
    return $product;
  }

  /**
   * @param string $retailer_id
   * @param int $catalog_id
   * @param array $data
   * @param array $params
   * @return bool
   */
  public static function updateProductInCatalogByRetailerId (
    $retailer_id, $catalog_id, array $data = array(), array $params = array()) {
    $product = new static();
    $product->setDataWithoutValidation($data);

    $data = Api::instance()->call(
      self::buildCatalogUrlForRetailerId($retailer_id, $catalog_id),
      RequestInterface::METHOD_POST,
      array_merge($product->exportData(), $params))->getContent();
    return (isset($data['success'])) ? $data['success'] : false;
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getProductSets(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ProductSet::className(), $fields, $params, 'product_sets');
  }

  /**
   * @param string $retailer_id
   * @param int $catalog_id
   * @return string
   */
  public static function buildCatalogUrlForRetailerId(
    $retailer_id, $catalog_id) {
    return '/catalog:'.$catalog_id.':'.Api::base64UrlEncode($retailer_id);
  }
}
