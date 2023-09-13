<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\CustomAudienceFields;
use FacebookAds\Object\Values\CustomAudienceActionSourceValues;
use FacebookAds\Object\Values\CustomAudienceClaimObjectiveValues;
use FacebookAds\Object\Values\CustomAudienceContentTypeValues;
use FacebookAds\Object\Values\CustomAudienceCustomerFileSourceValues;
use FacebookAds\Object\Values\CustomAudienceSubtypeValues;
use FacebookAds\Object\Values\CustomAudienceTypes;
use FacebookAds\Object\Fields\CustomAudienceMultikeySchemaFields;
use FacebookAds\Object\CustomAudienceNormalizers\EmailNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\PhoneNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\MadidNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\GenderNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\BirthYearNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\DateNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\FirstNameNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\LastNameNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\FirstNameInitialNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\StateNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\CityNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\ZipNormalizer;
use FacebookAds\Object\CustomAudienceNormalizers\CountryNormalizer;
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
    $ref_enums['ActionSource'] = CustomAudienceActionSourceValues::getInstance()->getValues();
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
      'relationship_type' => 'list<string>',
      'replace' => 'bool',
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

  public function getSharedAccountInfo(array $fields = array(), array $params = array(), $pending = false) {
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

  public function deleteUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'namespace' => 'string',
      'payload' => 'Object',
      'session' => 'Object',
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
      'namespace' => 'string',
      'payload' => 'Object',
      'session' => 'Object',
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

  public function createUsersReplace(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'namespace' => 'string',
      'payload' => 'Object',
      'session' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/usersreplace',
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
      'target_countries' => 'list<string>',
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
      'allowed_domains' => 'list<string>',
      'claim_objective' => 'claim_objective_enum',
      'content_type' => 'content_type_enum',
      'countries' => 'string',
      'customer_file_source' => 'customer_file_source_enum',
      'description' => 'string',
      'enable_fetch_or_create' => 'bool',
      'event_source_group' => 'string',
      'event_sources' => 'list<map>',
      'exclusions' => 'list<Object>',
      'inclusions' => 'list<Object>',
      'lookalike_spec' => 'string',
      'name' => 'string',
      'opt_out_link' => 'string',
      'parent_audience_id' => 'unsigned int',
      'product_set_id' => 'string',
      'retention_days' => 'unsigned int',
      'rev_share_policy_id' => 'unsigned int',
      'rule' => 'string',
      'rule_aggregation' => 'string',
      'tags' => 'list<string>',
      'use_in_campaigns' => 'bool',
    );
    $enums = array(
      'claim_objective_enum' => CustomAudienceClaimObjectiveValues::getInstance()->getValues(),
      'content_type_enum' => CustomAudienceContentTypeValues::getInstance()->getValues(),
      'customer_file_source_enum' => CustomAudienceCustomerFileSourceValues::getInstance()->getValues(),
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

  /**
  * @var \ArrayObject
  */
  protected $normalizers;

  /**
   * @return \ArrayObject
   */
  public function getNormalizers() {
    if ($this->normalizers === null) {
      $this->normalizers = new \ArrayObject(array(
        new CustomAudienceNormalizers\EmailNormalizer(),
        new CustomAudienceNormalizers\PhoneNormalizer(),
        new CustomAudienceNormalizers\MadidNormalizer(),
        new CustomAudienceNormalizers\GenderNormalizer(),
        new CustomAudienceNormalizers\BirthYearNormalizer(),
        new CustomAudienceNormalizers\DateNormalizer(),
        new CustomAudienceNormalizers\FirstNameNormalizer(),
        new CustomAudienceNormalizers\LastNameNormalizer(),
        new CustomAudienceNormalizers\FirstNameInitialNormalizer(),
        new CustomAudienceNormalizers\StateNormalizer(),
        new CustomAudienceNormalizers\CityNormalizer(),
        new CustomAudienceNormalizers\ZipNormalizer(),
        new CustomAudienceNormalizers\CountryNormalizer(),
      ));
    }
    return $this->normalizers;
  }

  /**
   * Add users to the CustomAudiences with multiple keys. There is no max on the
   * total number of users that can be added to an audience, but up to 10000
   * users can be added at a given time.
   *
   * @param array $users
   * @param array $types
   * @param bool $is_hashed
   * @param bool $is_normalized
   * @return array
   */
  public function addUsersMultiKey(
    array $users,
    array $types,
    $is_hashed = false,
    $is_normalized = false) {
    $params = $this->formatParamsMultiKey($users, $types, $is_hashed, $is_normalized);
    return $this->getApi()->call(
      '/'.$this->assureId().'/users',
      RequestInterface::METHOD_POST,
      $params)->getContent();
  }


  /**
   * Delete users from AdCustomAudiences with multiple keys
   *
   * @param array $users
   * @param array $types
   * @param bool $is_hashed
   * @param bool $is_normalized
   * @return array
   */
  public function removeUsersMultiKey(
    array $users,
    array $types,
    $is_hashed = false,
    $is_normalized = false) {
    $params = $this->formatParamsMultiKey($users, $types, $is_hashed, $is_normalized);
    return $this->getApi()->call(
      '/'.$this->assureId().'/users',
      RequestInterface::METHOD_DELETE,
      $params)->getContent();
  }

  /**
   * Take users and format them correctly for the request
   *
   * @param array $users
   * @param array $types
   * @param bool $is_hashed
   * @param bool $is_normalized
   * @return array
   */
  protected function formatParamsMultiKey(
    array $users,
    array $types,
    $is_hashed = false,
    $is_normalized = false) {

    if (!$is_hashed) {
      if ($is_normalized) {
        $normalizers = new \ArrayObject(array(
          new HashNormalizer()
        ));
      }
      else {
        $normalizers = clone $this->getNormalizers();
        $normalizers->append(new HashNormalizer());
      }
      foreach ($users as &$user) {
        if (count($types) != count($user)) {
          throw new \InvalidArgumentException(
            "Number of keys in each list in the data should ".
            "match the number of keys specified in scheme");
          break;
        }
        foreach ($user as $index => &$key_value) {
          $key = $types[$index];
          foreach ($normalizers as $normalizer) {
            if ($key_value &&
                $key !== CustomAudienceMultikeySchemaFields::EXTERN_ID &&
                $normalizer->shouldNormalize($key, $key_value)) {
              $key_value = $normalizer->normalize($key, $key_value);
            }
          }
        }
      }
    }

    $payload = array(
      'schema' => $types,
      'data' => $users,
    );

    return array('payload' => $payload);
  }
}
