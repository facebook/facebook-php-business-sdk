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

use FacebookAds\Api;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\Fields\AdAccountGroupUserFields;
use FacebookAds\Object\Traits\FieldValidation;

class AdAccountGroupUser extends AbstractObject {
  use FieldValidation;

  /**
   * @var string
   */
  const ROLE_ADMINISTRATOR = 1001;

  /**
   * @var string
   */
  const ROLE_GENERAL_USER = 1002;

  /**
   * @var string
   */
  const ROLE_REPORTS_ONLY = 1003;

  /**
   * @var string[]
   */
  protected static $fields = array(
    AdAccountGroupUserFields::UID,
    AdAccountGroupUserFields::ROLE,
  );

  /**
   * @var Api
   */
  protected $api;

  /**
   * @var string
   */
  protected $adAccountGroupId;

  /**
   * @param string $ad_account_group_id
   * @param Api $api
   */
  public function __construct($ad_account_group_id, Api $api = null) {
    $this->adAccountGroupId = $ad_account_group_id;
    $this->api = $api;
  }

  /**
   * @return Api
   */
  public function getApi() {
    return $this->api;
  }

  /**
   * @return string
   */
  public function getParentId() {
    return $this->adAccountGroupId;
  }

  /**
   * @param array $params
   * @return $this
   */
  public function create(array $params = array()) {
    return $this->save($params);
  }

  /**
   * @param array $params
   * @return $this
   */
  public function update(array $params = array()) {
    return $this->save($params);
  }

  /**
   * @return string
   * @throws \Exception
   */
  protected function assureId() {
    if (!$this->data[AdAccountGroupUserFields::UID]) {
      throw new \Exception(AdAccountGroupUserFields::UID.' field must be set');
    }

    return $this->data[AdAccountGroupUserFields::UID];
  }

  /**
   * @param array $params
   * @return $this
   */
  public function save(array $params = array()) {
    $this->assureId();

    $this->getApi()->call(
      '/'.$this->adAccountGroupId.'/users',
      RequestInterface::METHOD_POST,
      array_merge(array('account_group_roles' => $this->data), $params));

    return $this;
  }

  /**
   * @param array $params
   * @throws \Exception
   */
  public function delete(array $params = array()) {
    if (!$this->data[AdAccountGroupUserFields::UID]) {
      throw new \Exception("UID field must be set");
    }

    $this->getApi()->call(
      '/'.$this->adAccountGroupId.'/users/'.$this->assureId(),
      RequestInterface::METHOD_DELETE,
      $params);

    $this->data = array();
  }

  /**
   * @return AdUser
   */
  public function getAdUser() {
    return new AdUser($this->{AdAccountGroupUserFields::UID});
  }

}
