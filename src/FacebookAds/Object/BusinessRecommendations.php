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
use FacebookAds\Object\Fields\BusinessRecommendationsFields;
use FacebookAds\Object\Values\BusinessRecommendationsGetLocaleValues;
use FacebookAds\Object\Values\BusinessRecommendationsGetScopesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class BusinessRecommendations extends AbstractCrudObject {

  /**
   * @return BusinessRecommendationsFields
   */
  public static function getFieldsEnum() {
    return BusinessRecommendationsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_ids' => 'string',
      'after' => 'string',
      'before' => 'string',
      'fields' => 'string',
      'limit' => 'int',
      'locale' => 'locale_enum',
      'recommendation_names' => 'string',
      'recommendation_stages' => 'string',
      'scopes' => 'list<scopes_enum>',
    );
    $enums = array(
      'locale_enum' => BusinessRecommendationsGetLocaleValues::getInstance()->getValues(),
      'scopes_enum' => BusinessRecommendationsGetScopesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/recommendations',
      new BusinessRecommendationsGet(),
      'EDGE',
      BusinessRecommendationsGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
