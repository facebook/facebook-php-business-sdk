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

use FacebookAds\Object\Fields\ProjectFields;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Cursor;

class Project extends AbstractCrudObject {
  use FieldValidation;

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'businessprojects';
  }

  /**
   * @return ProjectFields
   */
  public static function getFieldsEnum() {
    return ProjectFields::getInstance();
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getPages(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Page::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdAccounts(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdAccount::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getApps(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      App::className(), $fields, $params, 'apps');
  }

  /**
   * @param int $page_id
   */
  public function addPage($page_id) {
    $params = array(
      'page_id' => $page_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/pages',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $page_id
   */
  public function deletePage($page_id) {
    $params = array(
      'page_id' => $page_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/pages',
      RequestInterface::METHOD_DELETE,
      $params);
  }

  /**
   * @param int $account_id
   */
  public function adAdAccount($account_id) {
    $params = array(
      'adaccount_id' => $account_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/adaccounts',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $account_id
   */
  public function deleteAdAccount($account_id) {
    $params = array(
      'adaccount_id' => $account_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/adaccounts',
      RequestInterface::METHOD_DELETE,
      $params);
  }

  /**
   * @param int $app_id
   */
  public function addApp($app_id) {
    $params = array(
      'app_id' => $app_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/apps',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $app_id
   */
  public function deleteApp($app_id) {
    $params = array(
      'app_id' => $app_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/apps',
      RequestInterface::METHOD_DELETE,
      $params);
  }
}
