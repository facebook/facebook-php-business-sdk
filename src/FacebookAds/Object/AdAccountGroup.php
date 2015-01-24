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
use FacebookAds\Cursor;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Object\Fields\AdAccountGroupFields;
use FacebookAds\Object\Traits\FieldValidation;

class AdAccountGroup extends AbstractCrudObject {
  use FieldValidation;

  /**
   * @var string[]
   */
  protected static $fields = array(
    AdAccountGroupFields::ID,
    AdAccountGroupFields::ACCOUNT_GROUP_ID,
    AdAccountGroupFields::NAME,
    AdAccountGroupFields::STATUS,
    AdAccountGroupFields::USERS,
    AdAccountGroupFields::ACCOUNTS,
  );

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
    if(!empty($response_data)) {
      foreach (array_shift($response_data) as $data) {
        /** @var AbstractObject $object */
        $object = new $prototype_class(null, null, $this->getApi());
        $object->setData((array) $data);
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
}
