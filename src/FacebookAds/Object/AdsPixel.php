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
use FacebookAds\Object\Fields\AdsPixelsFields;
use FacebookAds\Object\Traits\CannotDelete;
use FacebookAds\Object\Traits\FieldValidation;

class AdsPixel extends AbstractCrudObject {
  use CannotDelete;
  use FieldValidation;

  /**
   * @return AdsPixelsFields
   */
  public static function getFieldsEnum() {
    return AdsPixelsFields::getInstance();
  }

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adspixels';
  }

  /**
   * @param int $business_id
   * @param string $account_id
   */
  public function sharePixelWithAdAccount($business_id, $account_id) {
    $this->getApi()->call(
      '/'.$this->assureId().'/shared_accounts',
      RequestInterface::METHOD_POST,
      array(
        'business' => $business_id,
        'account_id' => $account_id,
      ));
  }

  /**
   * @param $business_id
   * @param $account_id
   */
  public function unsharePixelWithAdAccount($business_id, $account_id) {
    $this->getApi()->call(
      '/'.$this->assureId().'/shared_accounts',
      RequestInterface::METHOD_DELETE,
      array(
        'business' => $business_id,
        'account_id' => $account_id,
      ));
  }

  /**
   * @param int $business_id
   * @param int $agency_id
   */
  public function sharePixelWithAgency($business_id, $agency_id) {
    $this->getApi()->call(
      '/'.$this->assureId().'/shared_agencies',
      RequestInterface::METHOD_POST,
      array(
        'business' => $business_id,
        'agency_id' => $agency_id,
      ));
  }

  /**
   * @param int $business_id
   * @param int $agency_id
   */
  public function unsharePixelWithAgency($business_id, $agency_id) {
    $this->getApi()->call(
      '/'.$this->assureId().'/shared_agencies',
      RequestInterface::METHOD_DELETE,
      array(
        'business' => $business_id,
        'agency_id' => $agency_id,
      ));
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAdAccounts(
    array $fields = array(), array $params = array()) {

    return $this->getManyByConnection(
      AdAccount::className(), $fields, $params, 'shared_accounts');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getAgencies(
    array $fields = array(), array $params = array()) {

    return $this->getManyByConnection(
      Business::className(), $fields, $params, 'shared_agencies');
  }

  /**
   * @param array $fields
   * @param array $params
   * @return Cursor
   */
  public function getStats(
    array $fields = array(), array $params = array()) {

    return $this->getManyByConnection(
      AdsPixelStat::className(), $fields, $params, 'stats');
  }
}
