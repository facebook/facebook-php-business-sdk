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
use FacebookAds\Object\Fields\OfflineConversionDataSetFields;
use FacebookAds\Object\Values\OfflineConversionDataSetDataOriginValues;
use FacebookAds\Object\Values\OfflineConversionDataSetPermittedRolesValues;
use FacebookAds\Object\Values\OfflineConversionDataSetRelationshipTypeValues;
use FacebookAds\Object\Values\OfflineConversionDataSetRoleValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class OfflineConversionDataSet extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'offline_conversion_data_sets';
  }

  /**
   * @return OfflineConversionDataSetFields
   */
  public static function getFieldsEnum() {
    return OfflineConversionDataSetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['DataOrigin'] = OfflineConversionDataSetDataOriginValues::getInstance()->getValues();
    $ref_enums['PermittedRoles'] = OfflineConversionDataSetPermittedRolesValues::getInstance()->getValues();
    $ref_enums['RelationshipType'] = OfflineConversionDataSetRelationshipTypeValues::getInstance()->getValues();
    $ref_enums['Role'] = OfflineConversionDataSetRoleValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getActivities(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_id' => 'string',
      'start_time' => 'datetime',
      'end_time' => 'datetime',
      'event_type' => 'event_type_enum',
    );
    $enums = array(
      'event_type_enum' => array(
        'dataset_assign_to_adacct',
        'dataset_autotrack_on_adacct',
        'dataset_disable_autotrack_on_adacct',
        'dataset_unassign_from_adacct',
        'add_dataset_to_business',
        'add_user_to_dataset',
        'remove_user_from_dataset',
        'update_user_role_on_dataset',
        'create_custom_conversion',
        'update_custom_conversion',
        'create_custom_audience',
        'share_custom_audience',
        'unshare_custom_audience',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/activities',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
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
      '/adaccounts',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
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
      '/adaccounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'string',
      'business' => 'string',
      'auto_track_for_ads' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adaccounts',
      new OfflineConversionDataSet(),
      'EDGE',
      OfflineConversionDataSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/agencies',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/agencies',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAgency(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
      'permitted_roles' => 'list<permitted_roles_enum>',
      'relationship_type' => 'list<relationship_type_enum>',
      'other_relationship' => 'string',
    );
    $enums = array(
      'permitted_roles_enum' => OfflineConversionDataSetPermittedRolesValues::getInstance()->getValues(),
      'relationship_type_enum' => OfflineConversionDataSetRelationshipTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/agencies',
      new OfflineConversionDataSet(),
      'EDGE',
      OfflineConversionDataSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAudiences(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account' => 'string',
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

  public function getCustomConversions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/customconversions',
      new CustomConversion(),
      'EDGE',
      CustomConversion::getFieldsEnum()->getValues(),
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
    );
    $enums = array(
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
      'upload_tag' => 'string',
      'upload_id' => 'string',
      'upload_source' => 'string',
      'data' => 'list<string>',
      'namespace_id' => 'string',
      'progress' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/events',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getStats(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'start' => 'int',
      'end' => 'int',
      'skip_empty_values' => 'bool',
      'aggr_time' => 'aggr_time_enum',
      'user_timezone_id' => 'unsigned int',
      'granularity' => 'granularity_enum',
    );
    $enums = array(
      'aggr_time_enum' => array(
        'upload_time',
        'event_time',
      ),
      'granularity_enum' => array(
        'daily',
        'hourly',
        'six_hourly',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/stats',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getUploads(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'upload_tag' => 'string',
      'start_time' => 'Object',
      'end_time' => 'Object',
      'sort_by' => 'sort_by_enum',
      'order' => 'order_enum',
    );
    $enums = array(
      'sort_by_enum' => array(
        'CREATION_TIME',
        'FIRST_UPLOAD_TIME',
        'LAST_UPLOAD_TIME',
        'API_CALLS',
        'EVENT_TIME_MIN',
        'EVENT_TIME_MAX',
        'IS_EXCLUDED_FOR_LIFT',
      ),
      'order_enum' => array(
        'ASCENDING',
        'DESCENDING',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/uploads',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUpload(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'upload_tag' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/uploads',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUserPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
      'email' => 'string',
      'business' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/userpermissions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getUserPermissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/userpermissions',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUserPermission(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'user' => 'int',
      'role' => 'role_enum',
      'business' => 'Object',
    );
    $enums = array(
      'role_enum' => OfflineConversionDataSetRoleValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/userpermissions',
      new OfflineConversionDataSet(),
      'EDGE',
      OfflineConversionDataSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createValidate(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'data' => 'list<string>',
      'namespace_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/validate',
      new OfflineConversionDataSet(),
      'EDGE',
      OfflineConversionDataSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
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
      new OfflineConversionDataSet(),
      'NODE',
      OfflineConversionDataSet::getFieldsEnum()->getValues(),
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
      'description' => 'string',
      'data_origin' => 'data_origin_enum',
      'enable_auto_assign_to_accounts' => 'bool',
      'auto_assign_to_new_accounts_only' => 'bool',
    );
    $enums = array(
      'data_origin_enum' => OfflineConversionDataSetDataOriginValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new OfflineConversionDataSet(),
      'NODE',
      OfflineConversionDataSet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
