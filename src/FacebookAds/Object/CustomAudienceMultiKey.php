<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\Values\CustomAudienceTypes;
use FacebookAds\Object\Fields\CustomAudienceFields;
use FacebookAds\Object\CustomAudienceNormalizers\HashNormalizer;
use FacebookAds\Object\Fields\CustomAudienceMultikeySchemaFields;

/**
 * @deprecated
 * Please use class `CustomAudience` instead
 **/
class CustomAudienceMultiKey extends AbstractCrudObject {

  /**
   * @var string
   */
  const HASH_TYPE_SHA256 = 'sha256';

  /**
  * @var \ArrayObject
  */
  protected $normalizers;

  /**
   * @deprecated getEndpoint function is deprecated
   * @return string
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
   * @deprecated
   * Add users to the AdCustomAudiences. There is no max on the total number of
   * users that can be added to an audience, but up to 10000 users can be added
   * at a given time.
   *
   * @param array $users
   * @param array $types
   * @param bool $is_hashed
   * @param bool $is_normalized
   * @return array
   */
  public function addUsers(
    array $users,
    array $types,
    $is_hashed = false,
    $is_normalized = false) {
    $warning_message = 'CustomAudienceMultiKey is being deprecated, please use'.
      '`new CustomAudience(...)->addUsers(..)` instead';
    trigger_error($warning_message, E_USER_DEPRECATED);

    $params = $this->formatParams($users, $types, $is_hashed, $is_normalized);
    return $this->getApi()->call(
      '/'.$this->assureId().'/users',
      RequestInterface::METHOD_POST,
      $params)->getContent();
  }

  /**
   * @deprecated
   * Delete users from AdCustomAudiences
   *
   * @param array $users
   * @param array $types
   * @param bool $is_hashed
   * @param bool $is_normalized
   * @return array
   */
  public function removeUsers(
    array $users,
    array $types,
    $is_hashed = false,
    $is_normalized = false) {
    $warning_message = 'CustomAudienceMultiKey is being deprecated, please use'.
      '`new CustomAudience(...)->removeUsers(..)` instead';
    trigger_error($warning_message, E_USER_DEPRECATED);
    $params = $this->formatParams($users, $types, $is_hashed, $is_normalized);
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
  protected function formatParams(
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
