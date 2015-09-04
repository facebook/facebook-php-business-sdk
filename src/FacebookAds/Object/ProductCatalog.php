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
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Cursor;

class ProductCatalog extends AbstractCrudObject {
  use FieldValidation;

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'product_catalogs';
  }

  /**
   * @return ProductCatalogFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogFields::getInstance();
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getProducts(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Product::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getProductSets(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ProductSet::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getProductFeeds(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ProductFeed::className(), $fields, $params);
  }

  /**
   * @return array
   */
  public function getExternalEventSources() {
    $response = $this->getApi()->call(
      '/'.$this->assureId().'/external_event_sources',
      RequestInterface::METHOD_GET);
    $data = $response->getContent();
    return (isset($data['data'])) ? $data['data'] : array();
  }

  /**
   * @param array $pixel_ids
   * @return bool
   */
  public function setExternalEventSources(array $pixel_ids) {
    return $this->modifyExternalEventSources(
      RequestInterface::METHOD_POST,
      $pixel_ids);
  }

  /**
   * @param array $pixel_ids
   * @return bool
   */
  public function removeExternalEventSources(array $pixel_ids) {
    return $this->modifyExternalEventSources(
      RequestInterface::METHOD_DELETE,
      $pixel_ids);
  }

  /**
   * @param string $method
   * @param array $pixel_ids
   * @return bool
   */
  protected function modifyExternalEventSources($method, array $pixel_ids) {
    $params = array(
      ProductCatalogFields::EXTERNAL_EVENT_SOURCES => $pixel_ids,
    );

    $response = $this->getApi()->call(
      '/'.$this->assureId().'/external_event_sources',
      $method,
      $params);
    $data = $response->getContent();
    return (isset($data['success'])) ? $data['success'] : false;
  }

  /**
   * @param int $user_id
   * @param string $role
   */
  public function addUserPermission($user_id, $role) {
    $params = array(
      'user' => $user_id,
      'role' => $role,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $user_id
   */
  public function deleteUserPermission($user_id) {
    $params = array(
      'user' => $user_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_DELETE,
      $params);
  }
}
