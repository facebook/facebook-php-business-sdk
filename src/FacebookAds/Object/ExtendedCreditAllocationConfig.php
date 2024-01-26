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
use FacebookAds\Object\Fields\ExtendedCreditAllocationConfigFields;
use FacebookAds\Object\Values\ExtendedCreditAllocationConfigLiabilityTypeValues;
use FacebookAds\Object\Values\ExtendedCreditAllocationConfigPartitionTypeValues;
use FacebookAds\Object\Values\ExtendedCreditAllocationConfigSendBillToValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ExtendedCreditAllocationConfig extends AbstractCrudObject {

  /**
   * @return ExtendedCreditAllocationConfigFields
   */
  public static function getFieldsEnum() {
    return ExtendedCreditAllocationConfigFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['LiabilityType'] = ExtendedCreditAllocationConfigLiabilityTypeValues::getInstance()->getValues();
    $ref_enums['PartitionType'] = ExtendedCreditAllocationConfigPartitionTypeValues::getInstance()->getValues();
    $ref_enums['SendBillTo'] = ExtendedCreditAllocationConfigSendBillToValues::getInstance()->getValues();
    return $ref_enums;
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
      new ExtendedCreditAllocationConfig(),
      'NODE',
      ExtendedCreditAllocationConfig::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'amount' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new ExtendedCreditAllocationConfig(),
      'NODE',
      ExtendedCreditAllocationConfig::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
