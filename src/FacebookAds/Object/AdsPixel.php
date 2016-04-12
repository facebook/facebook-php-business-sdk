<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
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

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\AdsPixelFields;
use FacebookAds\Object\Values\AdsPixelStatsResultAggregationValues;

/**
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsPixel extends AbstractCrudObject {

  protected function getEndpoint() {
    return 'adspixels';
  }

  /**
   * @return AdsPixelFields
   */
  public static function getFieldsEnum() {
    return AdsPixelFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function getAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/audiences',
      new CustomAudience(),
      'EDGE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSharedAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/shared_accounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSharedAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/shared_agencies',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getStats(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aggregation' => 'aggregation_enum',
      'end_time' => 'datetime',
      'event' => 'string',
      'start_time' => 'datetime',
    );
    $enums = array(
      'aggregation_enum' => AdsPixelStatsResultAggregationValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/stats',
      new AdsPixelStatsResult(),
      'EDGE',
      AdsPixelStatsResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new AdsPixel(),
      'NODE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new AbstractCrudObject(),
      'NODE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
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
      'POST',
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
      'DELETE',
      array(
        'business' => $business_id,
        'agency_id' => $agency_id,
      ));
  }

  /**
   * @deprecated use getSharedAccounts instead
   */
  public function getAdAccounts(
    array $fields = array(), array $params = array(), $pending = false) {

    return $this->getSharedAccounts($fields, $params, $pending);
  }

  /**
   * @deprecated use getSharedAgencies instead
   */
  public function getAgencies(
    array $fields = array(), array $params = array(), $pending = false) {

    return $this->getSharedAgencies($fields, $params, $pending);
  }
}
