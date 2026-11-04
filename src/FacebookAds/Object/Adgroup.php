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
use FacebookAds\Object\Fields\AdgroupFields;
use FacebookAds\Object\Values\AdgroupGetDatePresetValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Adgroup extends AbstractCrudObject {

  /**
   * @return AdgroupFields
   */
  public static function getFieldsEnum() {
    return AdgroupFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'am_call_tags' => 'map<string, string>',
      'date_preset' => 'date_preset_enum',
      'fields' => 'string',
      'from_adtable' => 'bool',
      'review_feedback_breakdown' => 'bool',
      'time_range' => 'map<string, string>',
    );
    $enums = array(
      'date_preset_enum' => AdgroupGetDatePresetValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new AdgroupGet(),
      'EDGE',
      AdgroupGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
