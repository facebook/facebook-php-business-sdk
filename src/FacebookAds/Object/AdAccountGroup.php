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
use FacebookAds\Object\Fields\AdAccountGroupFields;
use FacebookAds\Object\Traits\FieldValidation;

class AdAccountGroup extends AbstractCrudObject {
  use FieldValidation;

  /**
   * @param string $id Optional (do not set for new objects)
   * @param string $parent_id Parent ID for AdAccountGroup is always "me"
   * @param Api $api The Api instance this object should use to make calls
   */
  public function __construct($id = null, $parent_id = null, Api $api = null) {
    parent::__construct($id, 'me', $api);
  }

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adaccountgroups';
  }

  /**
   * @return AdAccountGroupFields
   */
  public static function getFieldsEnum() {
    return AdAccountGroupFields::getInstance();
  }

  /**
   * Read objects from a connection
   *
   * @param string $prototype_class
   * @param array $fields Fields to request
   * @param array $params Additional filters for the reading
   * @param string $endpoint
   * @return array
   */
  protected function getConnectedObjects(
    $prototype_class,
    array $fields = array(),
    array $params = array(),
    $endpoint = null) {

    $response = $this->fetchConnection(
      $fields, $params, $prototype_class, $endpoint);

    $result = array();
    $response_data = $response->getContent();
    if (!empty($response_data)) {
      foreach (array_shift($response_data) as $data) {
        /** @var AbstractObject $object */
        $object = new $prototype_class(null, null, $this->getApi());
        $object->setDataWithoutValidation((array) $data);
        $result[] = $object;
      }
    }

    return $result;
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getUsers(array $fields = array(), array $params = array()) {
    return $this->getConnectedObjects(
      AdAccountGroupUser::className(), $fields, $params, 'users');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdAccounts(
    array $fields = array(), array $params = array()) {
    return $this->getConnectedObjects(
      AdAccountGroupAccount::className(), $fields, $params, 'adaccounts');
  }

  /**
   * Add users to the AdAccountGroup.
   *
   * @param array $roles list of user's roles indexed by user id
   * @return bool
   */
  public function addUsers(array $roles) {
    $params = array();
    foreach ($roles as $uid => $role) {
      $params[] = array(
        'uid' => $uid,
        'role' => $role
      );
    }

    return $this->getApi()->call(
      '/'.$this->assureId().'/users',
      RequestInterface::METHOD_POST,
      array('account_group_roles' => $params))->getContent();
  }

  /**
   * Update users in the AdAccountGroup.
   *
   * @param array $roles list of user's roles indexed by user id
   * @return bool
   */
  public function updateUsers(array $roles) {
    $params = array();
    foreach ($roles as $uid => $role) {
      $params[] = array(
        'uid' => $uid,
        'role' => $role
      );
    }

    return $this->getApi()->call(
      '/'.$this->assureId().'/users',
      RequestInterface::METHOD_POST,
      array('account_group_roles' => $params))->getContent();
  }

  /**
   * Delete user from AdAccountGroup
   *
   * @param $user_id
   * @return bool
   */
  public function removeUser($user_id) {
    return $this->getApi()->call(
      '/'.$this->assureId().'/users/'.$user_id,
      RequestInterface::METHOD_DELETE)->getContent();
  }

  /**
   * Add ad account to the AdAccountGroup.
   *
   * @param array $account_ids list of ad account ids to be added
   * @return bool
   */
  public function addAdAccounts(array $account_ids) {
    return $this->getApi()->call(
      '/'.$this->assureId().'/adaccounts',
      RequestInterface::METHOD_POST,
      array('account_ids' => $account_ids))->getContent();
  }

  /**
   * Delete ad account from AdAccountGroup
   *
   * @param $account_id
   * @return bool
   */
  public function removeAdAccount($account_id) {
    return $this->getApi()->call(
      '/'.$this->assureId().'/adaccounts/'.$account_id,
      RequestInterface::METHOD_DELETE)->getContent();
  }
}
