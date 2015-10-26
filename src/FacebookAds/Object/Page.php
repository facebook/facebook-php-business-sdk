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

use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;

class Page extends AbstractCrudObject {

  /**
   * @return string
   */
  public function getEndpoint() {
    return 'pages';
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getLeadgenForms(
    array $fields = array(), array $params = array()) {
    return $this->getManyByConnection(
      LeadgenForm::className(), $fields, $params);
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
   * @param int $business_id
   * @param int $user_id
   * @param string $role
   */
  public function addUser($business_id, $user_id, $role) {
    $params = array(
      'business_id' => $business_id,
      'user_id' => $user_id,
      'role' => $role,
    );

    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $business_id
   * @param int $user_id
   */
  public function deleteUser($business_id, $user_id) {
    $params = array(
      'business_id' => $business_id,
      'user_id' => $user_id,
    );

    $this->getApi()->call(
      '/'.$this->assureId().'/userpermissions',
      RequestInterface::METHOD_DELETE,
      $params);
  }

  /**
   * @param int $business_id
   * @param array $roles
   */
  public function grantBusinessAccess($business_id, $roles) {
    $params = array(
      'business' => $business_id,
      'permitted_roles' => $roles,
    );

    $this->getApi()->call(
      '/'.$this->assureId().'/agencies',
      RequestInterface::METHOD_POST,
      $params);
  }

  /**
   * @param int $business_id
   */
  public function revokeBusinessAccess($business_id) {
    $params = array(
      'business' => $business_id,
    );

    $this->getApi()->call(
      '/'.$this->assureId().'/agencies',
      RequestInterface::METHOD_DELETE,
      $params);
  }
}
