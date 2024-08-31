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
use FacebookAds\Object\Fields\ThirdPartyPartnerViewabilityRequestFields;
use FacebookAds\Object\Values\ThirdPartyPartnerViewabilityRequestMetricValues;
use FacebookAds\Object\Values\ThirdPartyPartnerViewabilityRequestPlatformValues;
use FacebookAds\Object\Values\ThirdPartyPartnerViewabilityRequestStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ThirdPartyPartnerViewabilityRequest extends AbstractCrudObject {

  /**
   * @return ThirdPartyPartnerViewabilityRequestFields
   */
  public static function getFieldsEnum() {
    return ThirdPartyPartnerViewabilityRequestFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Metric'] = ThirdPartyPartnerViewabilityRequestMetricValues::getInstance()->getValues();
    $ref_enums['Platform'] = ThirdPartyPartnerViewabilityRequestPlatformValues::getInstance()->getValues();
    $ref_enums['Status'] = ThirdPartyPartnerViewabilityRequestStatusValues::getInstance()->getValues();
    return $ref_enums;
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
      new ThirdPartyPartnerViewabilityRequest(),
      'NODE',
      ThirdPartyPartnerViewabilityRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
