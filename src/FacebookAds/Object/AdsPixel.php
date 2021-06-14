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
use FacebookAds\Object\Values\AdsPixelAutomaticMatchingFieldsValues;
use FacebookAds\Object\Values\AdsPixelDataUseSettingValues;
use FacebookAds\Object\Values\AdsPixelFirstPartyCookieStatusValues;
use FacebookAds\Object\Values\AdsPixelSortByValues;
use FacebookAds\Object\Values\AdsPixelStatsResultAggregationValues;
use FacebookAds\Object\Values\AdsPixelTasksValues;
use FacebookAds\Object\Values\DACheckConnectionMethodValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsPixel extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
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
    $ref_enums['SortBy'] = AdsPixelSortByValues::getInstance()->getValues();
    $ref_enums['AutomaticMatchingFields'] = AdsPixelAutomaticMatchingFieldsValues::getInstance()->getValues();
    $ref_enums['DataUseSetting'] = AdsPixelDataUseSettingValues::getInstance()->getValues();
    $ref_enums['FirstPartyCookieStatus'] = AdsPixelFirstPartyCookieStatusValues::getInstance()->getValues();
    $ref_enums['Tasks'] = AdsPixelTasksValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getAssignedUsers(array $fields = array(), array $params = array(), $pending = false) {
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
      '/assigned_users',
      new AssignedUser(),
      'EDGE',
      AssignedUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAssignedUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tasks' => 'list<tasks_enum>',
      'user' => 'int',
    );
    $enums = array(
      'tasks_enum' => AdsPixelTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/assigned_users',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getDaChecks(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'checks' => 'list<string>',
      'connection_method' => 'connection_method_enum',
    );
    $enums = array(
      'connection_method_enum' => DACheckConnectionMethodValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/da_checks',
      new DACheck(),
      'EDGE',
      DACheck::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createEvent(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'data' => 'list<string>',
      'namespace_id' => 'string',
      'partner_agent' => 'string',
      'test_event_code' => 'string',
      'trace' => 'unsigned int',
      'upload_id' => 'string',
      'upload_source' => 'string',
      'upload_tag' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/events',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createShadowTrafficHelper(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/shadowtraffichelper',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSharedAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/shared_accounts',
      new AbstractCrudObject(),
      'EDGE',
      array(),
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

  public function createSharedAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/shared_accounts',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
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
      'event_source' => 'string',
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
      'automatic_matching_fields' => 'list<automatic_matching_fields_enum>',
      'data_use_setting' => 'data_use_setting_enum',
      'enable_automatic_matching' => 'bool',
      'first_party_cookie_status' => 'first_party_cookie_status_enum',
      'name' => 'string',
      'server_events_business_ids' => 'list<string>',
    );
    $enums = array(
      'automatic_matching_fields_enum' => AdsPixelAutomaticMatchingFieldsValues::getInstance()->getValues(),
      'data_use_setting_enum' => AdsPixelDataUseSettingValues::getInstance()->getValues(),
      'first_party_cookie_status_enum' => AdsPixelFirstPartyCookieStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
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
}
