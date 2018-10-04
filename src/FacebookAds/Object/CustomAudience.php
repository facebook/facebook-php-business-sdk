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
use FacebookAds\Object\Fields\CustomAudienceFields;
use FacebookAds\Object\Values\CustomAudienceClaimObjectiveValues;
use FacebookAds\Object\Values\CustomAudienceContentTypeValues;
use FacebookAds\Object\Values\CustomAudienceCustomerFileSourceValues;
use FacebookAds\Object\Values\CustomAudienceSubtypeValues;
use FacebookAds\Object\Values\CustomAudienceTypes;
use FacebookAds\Object\CustomAudienceNormalizers\EmailNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\HashNormalizer;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class CustomAudience extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'customaudiences';
  }

  /**
   * @return CustomAudienceFields
   */
  public static function getFieldsEnum() {
    return CustomAudienceFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ClaimObjective'] = CustomAudienceClaimObjectiveValues::getInstance()->getValues();
    $ref_enums['ContentType'] = CustomAudienceContentTypeValues::getInstance()->getValues();
    $ref_enums['CustomerFileSource'] = CustomAudienceCustomerFileSourceValues::getInstance()->getValues();
    $ref_enums['Subtype'] = CustomAudienceSubtypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function deleteAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adaccounts' => 'list<string>',
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
      'permissions' => 'string',
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
      'adaccounts' => 'list<string>',
      'permissions' => 'string',
      'replace' => 'bool',
      'relationship_type' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adaccounts',
      new CustomAudience(),
      'EDGE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAds(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'effective_status' => 'list<string>',
      'status' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads',
      new Ad(),
      'EDGE',
      Ad::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteCapabilities(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adaccounts' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/capabilities',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCapability(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'accounts_capabilities' => 'string',
      'relationship_type' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/capabilities',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createDatum(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action_type' => 'action_type_enum',
      'encoding' => 'encoding_enum',
      'entry_type' => 'entry_type_enum',
      'entries' => 'list<string>',
      'session_id' => 'unsigned int',
      'batch_seq' => 'unsigned int',
      'last_batch_flag' => 'bool',
    );
    $enums = array(
      'action_type_enum' => array(
        'add',
        'remove',
        'match',
        'optout',
      ),
      'encoding_enum' => array(
        'md5',
        'sha256',
        'plain',
      ),
      'entry_type_enum' => array(
        '0',
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/data',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPrefills(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/prefills',
      new CustomAudiencePrefillState(),
      'EDGE',
      CustomAudiencePrefillState::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSessions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'session_id' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/sessions',
      new CustomAudienceSession(),
      'EDGE',
      CustomAudienceSession::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getShareDAccountInfo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/shared_account_info',
      new CustomAudiencesharedAccountInfo(),
      'EDGE',
      CustomAudiencesharedAccountInfo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUpload(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'session' => 'Object',
      'payload' => 'Object',
      'namespace' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/upload',
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
      'session' => 'Object',
      'payload' => 'Object',
      'namespace' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/upload',
      new CustomAudience(),
      'EDGE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'session' => 'Object',
      'payload' => 'Object',
      'namespace' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/users',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'session' => 'Object',
      'payload' => 'Object',
      'namespace' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/users',
      new CustomAudience(),
      'EDGE',
      CustomAudience::getFieldsEnum()->getValues(),
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
      'ad_account_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new CustomAudience(),
      'NODE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'description' => 'string',
      'name' => 'string',
      'opt_out_link' => 'string',
      'parent_audience_id' => 'unsigned int',
      'seed_audience' => 'unsigned int',
      'tags' => 'list<string>',
      'is_household' => 'bool',
      'is_household_exclusion' => 'bool',
      'allowed_domains' => 'list<string>',
      'lookalike_spec' => 'string',
      'retention_days' => 'unsigned int',
      'customer_file_source' => 'customer_file_source_enum',
      'rule' => 'string',
      'rule_aggregation' => 'string',
      'inclusions' => 'list<Object>',
      'exclusions' => 'list<Object>',
      'countries' => 'string',
      'details' => 'string',
      'source' => 'string',
      'isPrivate' => 'bool',
      'additionalMetadata' => 'string',
      'minAge' => 'unsigned int',
      'maxAge' => 'unsigned int',
      'expectedSize' => 'unsigned int',
      'gender' => 'string',
      'partnerID' => 'string',
      'accountID' => 'string',
      'rev_share_policy_id' => 'unsigned int',
      'partner_reference_key' => 'string',
      'claim_objective' => 'claim_objective_enum',
      'content_type' => 'content_type_enum',
      'event_source_group' => 'string',
      'product_set_id' => 'string',
      'event_sources' => 'list<map>',
      'study_spec' => 'Object',
    );
    $enums = array(
      'customer_file_source_enum' => CustomAudienceCustomerFileSourceValues::getInstance()->getValues(),
      'claim_objective_enum' => CustomAudienceClaimObjectiveValues::getInstance()->getValues(),
      'content_type_enum' => CustomAudienceContentTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new CustomAudience(),
      'NODE',
      CustomAudience::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function addUsers(
    array $users,
    $type,
    array $app_ids = array(),
    $is_hashed = false,
    $pending = false) {

    $params = $this->formatParams($users, $type, $app_ids, $is_hashed);
    return $this->createUser(array(), $params, $pending);
  }

  public function removeUsers(
    array $users,
    $type,
    array $app_ids = array(),
    $is_hashed = false,
    $pending = false) {

    $params = $this->formatParams($users, $type, $app_ids, $is_hashed);
    return $this->deleteUsers(array(), $params, $pending);
  }


  /**
   * Take users and format them correctly for the request
   *
   * @param array $users
   * @param string $type
   * @param array $app_ids
   * @param bool $is_hashed
   * @return array
   */
  protected function formatParams(
    array $users,
    $type,
    array $app_ids = array(),
    $is_hashed = false) {

    if ($type == CustomAudienceTypes::EMAIL
      || $type == CustomAudienceTypes::PHONE) {
      $normalizer = new EmailNormalizer();
      $hash_normalizer = new HashNormalizer();
      foreach ($users as &$user) {
        if ($type == CustomAudienceTypes::EMAIL) {
          $user = $normalizer->normalize(CustomAudienceTypes::EMAIL, $user);
        }
        if (!$is_hashed) {
          $user = $hash_normalizer->normalize(
            CustomAudienceTypes::EMAIL, $user);
        }
      }
    }

    $payload = array(
      'schema' => $type,
      'data' => $users,
    );

    if ($type === CustomAudienceTypes::ID) {
      if (empty($app_ids)) {
        throw new \InvalidArgumentException(
          "Custom audiences with type ".CustomAudienceTypes::ID." require"
          ."at least one app_id");
      }

      $payload['app_ids'] = $app_ids;
    }

    return array('payload' => $payload);
  }
}
