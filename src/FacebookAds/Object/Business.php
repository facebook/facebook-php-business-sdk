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

use FacebookAds\Object\Fields\BusinessFields;
use FacebookAds\Object\Traits\CannotCreate;
use FacebookAds\Object\Traits\CannotDelete;
use FacebookAds\Object\Traits\FieldValidation;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Cursor;

class Business extends AbstractCrudObject {
  use FieldValidation;
  use CannotCreate;
  use CannotDelete;

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'businesses';
  }

  /**
   * @return BusinessFields
   */
  public static function getFieldsEnum() {
    return BusinessFields::getInstance();
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdAccounts($fields=array(), $params=array()) {
    return $this->getManyByConnection(
      BusinessAdAccount::className(), $fields, $params, 'adaccounts');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getUserPermissions($fields=array(), $params=array()) {
    return $this->getManyByConnection(
      UserPermission::className(), $fields, $params, 'userpermissions');
  }

  /**
   * @param int $user_id
   * @param string $role
   */
  public function addUserPermissionById($user_id, $role) {
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
  public function deleteUserPermissionById($user_id) {
    $params = array(
      'user' => $user_id,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_DELETE,
      $params);
  }

  /**
   * @param int $email
   * @param string $role
   */
  public function inviteUserByEmail($email, $role) {
    $params = array(
      'email' => $email,
      'role' => $role,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $email
   */
  public function deleteUserByEmail($email) {
    $params = array(
      'email' => $email,
    );
    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_DELETE,
      $params);
  }

  /**
   * @param int $account_id
   * @param string $access_type
   * @param array $roles
   */
  public function claimAdAccount($account_id, $access_type, $roles = array()) {
    $params = array(
      'adaccount_id' => $account_id,
      'access_type' => $access_type,
    );

    if (!empty($roles)) {
      $params['permitted_roles'] = $roles;
    }

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

  public function claimApp($app_id, $access_type, $roles = array()) {
    $params = array(
      'app_id' => $app_id,
      'access_type' => $access_type,
    );

    if (!empty($roles)) {
      $params['permitted_roles'] = $roles;
    }

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

  public function claimPage($page_id, $access_type, $roles = array()) {
    $params = array(
      'page_id' => $page_id,
      'access_type' => $access_type,
    );

    if (!empty($roles)) {
      $params['permitted_roles'] = $roles;
    }

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
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getProjects(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Project::className(), $fields, $params);
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
  public function getApps(array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      App::className(), $fields, $params, 'apps');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getClients(array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Client::className(), $fields, $params, 'clients');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAgencies(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      Agency::className(), $fields, $params, 'agencies');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getCreditCards(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      CreditCard::className(), $fields, $params, 'creditcards');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getExtendedCredits(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      ExtendedCredit::className(), $fields, $params, 'extendedcredits');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getProductCatalogues(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      BusinessProductCatalog::className(),
      $fields,
      $params,
      'product_catalogs');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getSystemUsers(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      SystemUser::className(), $fields, $params);
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdsPixels(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      AdsPixel::className(), $fields, $params);
  }
}
