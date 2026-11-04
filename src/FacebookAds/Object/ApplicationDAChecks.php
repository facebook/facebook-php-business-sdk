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
use FacebookAds\Object\Fields\ApplicationDAChecksFields;
use FacebookAds\Object\Values\ApplicationDAChecksGetCapabilitiesValues;
use FacebookAds\Object\Values\ApplicationDAChecksGetCategoriesValues;
use FacebookAds\Object\Values\ApplicationDAChecksGetConnectionMethodValues;
use FacebookAds\Object\Values\ApplicationDAChecksGetFeaturesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ApplicationDAChecks extends AbstractCrudObject {

  /**
   * @return ApplicationDAChecksFields
   */
  public static function getFieldsEnum() {
    return ApplicationDAChecksFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'capabilities' => 'list<capabilities_enum>',
      'catalog_id' => 'int',
      'categories' => 'list<categories_enum>',
      'checks' => 'list<string>',
      'connection_method' => 'connection_method_enum',
      'features' => 'list<features_enum>',
      'fields' => 'string',
      'with_issue_only' => 'bool',
    );
    $enums = array(
      'capabilities_enum' => ApplicationDAChecksGetCapabilitiesValues::getInstance()->getValues(),
      'categories_enum' => ApplicationDAChecksGetCategoriesValues::getInstance()->getValues(),
      'connection_method_enum' => ApplicationDAChecksGetConnectionMethodValues::getInstance()->getValues(),
      'features_enum' => ApplicationDAChecksGetFeaturesValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/da_checks',
      new ApplicationDAChecksGet(),
      'EDGE',
      ApplicationDAChecksGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
