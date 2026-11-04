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
use FacebookAds\Object\Fields\AdsPixelActivitiesFields;
use FacebookAds\Object\Values\AdsPixelActivitiesHeadEventTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsPixelActivities extends AbstractCrudObject {

  /**
   * @return AdsPixelActivitiesFields
   */
  public static function getFieldsEnum() {
    return AdsPixelActivitiesFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genhead(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'int',
      'date_format' => 'string',
      'end_time' => 'string',
      'event_type' => 'event_type_enum',
      'fields' => 'string',
      'start_time' => 'string',
    );
    $enums = array(
      'event_type_enum' => AdsPixelActivitiesHeadEventTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_HEAD,
      '/activities',
      new AdsPixelActivitiesHead(),
      'EDGE',
      AdsPixelActivitiesHead::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
