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
use FacebookAds\Object\Fields\OmegaCustomerTrxFields;
use FacebookAds\Object\Values\OmegaCustomerTrxProductTypesValues;
use FacebookAds\Object\Values\OmegaCustomerTrxTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class OmegaCustomerTrx extends AbstractCrudObject {

  /**
   * @return OmegaCustomerTrxFields
   */
  public static function getFieldsEnum() {
    return OmegaCustomerTrxFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ProductTypes'] = OmegaCustomerTrxProductTypesValues::getInstance()->getValues();
    $ref_enums['Type'] = OmegaCustomerTrxTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getCampaigns(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/campaigns',
      new AbstractCrudObject(),
      'EDGE',
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
      new OmegaCustomerTrx(),
      'NODE',
      OmegaCustomerTrx::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
