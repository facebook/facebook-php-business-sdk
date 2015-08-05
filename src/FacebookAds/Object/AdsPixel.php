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

use FacebookAds\Object\Fields\AdsPixelsFields;
use FacebookAds\Object\Traits\CannotDelete;
use FacebookAds\Object\Traits\FieldValidation;

class AdsPixel extends AbstractCrudObject {
  use CannotDelete;
  use FieldValidation;

  /**
   * @var string[]
   **/
  protected static $fields = array(
    AdsPixelsFields::CODE,
    AdsPixelsFields::CREATION_TIME,
    AdsPixelsFields::ID,
    AdsPixelsFields::LAST_FIRED_TIME,
    AdsPixelsFields::NAME,
    AdsPixelsFields::RULE_VALIDATION,
    AdsPixelsFields::RULES,
  );

  public function sharePixel($business_id, $account_id) {
    return $this->getApi()->call(
      '/'.$this->assureId().'/shared_accounts',
      RequestInterface::METHOD_POST,
      array(
        'business' => $business_id,
        'account_id' => $account_id))->getContent();
  }

  public function sharePixelAgencies($business_id, $agency_id) {
    return $this->getApi()->call(
      '/'.$this->assureId().'/shared_agencies',
      RequestInterface::METHOD_POST,
      array(
        'business' => $business_id,
        'agency_id' => $agency_id))->getContent();
  }

  public function listAdAccounts($business_id) {
    $response = $this->getApi()->call(
      '/'.$this->assureId().'/shared_accounts',
      RequestInterface::METHOD_GET,
      array('business' => $business_id))->getContent();

    return new Cursor($response, new AdAccount());
  }

  public function listSharedAgencies() {
    $response = $this->getApi()->call(
      '/'.$this->assureId().'/shared_agencies',
      RequestInterface::METHOD_GET)->getContent();

    return new Cursor($response, new Business());
  }

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'adspixels';
  }

  /**
   * @return AdsPixelsFields
   */
  public static function getFieldsEnum() {
    return AdsPixelsFields::getInstance();
  }
}
