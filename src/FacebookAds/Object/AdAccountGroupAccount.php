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
use FacebookAds\Object\Fields\AdAccountGroupAccountFields;
use FacebookAds\Object\Traits\FieldValidation;

class AdAccountGroupAccount extends AbstractObject {
  use FieldValidation;

  /**
   * @var string[]
   */
  protected static $fields = array(
    AdAccountGroupAccountFields::ACCOUNT_ID,
    AdAccountGroupAccountFields::STATUS,
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
   * @param string $id This param is ignored
   * @param string $ad_account_group_id
   * @param Api $api
   */
  public function __construct(
    $id = null,
    $ad_account_group_id,
    Api $api = null) {

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
    if (!$this->data[AdAccountGroupAccountFields::ACCOUNT_ID]) {
      throw new \Exception(
        AdAccountGroupAccountFields::ACCOUNT_ID." field must be set");
    }

    return $this->data[AdAccountGroupAccountFields::ACCOUNT_ID];
  }

  /**
   * @param array $params
   * @return $this
   */
  public function save(array $params = array()) {
    $accountData = array('account_ids' => $this->assureId());

    $this->getApi()->call(
      '/'.$this->adAccountGroupId.'/adaccounts',
      RequestInterface::METHOD_POST,
      array_merge($accountData, $params));

    return $this;
  }

  /**
   * @param array $params
   * @throws \Exception
   */
  public function delete(array $params = array()) {
    $this->getApi()->call(
      '/'.$this->adAccountGroupId.'/adaccounts/'.$this->assureId(),
      RequestInterface::METHOD_DELETE,
      $params);

    $this->data = array();
  }

  /**
   * @return AdAccount
   */
  public function getAdAccount() {
    return new AdAccount(
      'act_'.$this->{AdAccountGroupAccountFields::ACCOUNT_ID});;
  }
}
