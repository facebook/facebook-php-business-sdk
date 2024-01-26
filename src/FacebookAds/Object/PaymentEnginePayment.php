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
use FacebookAds\Object\Fields\PaymentEnginePaymentFields;
use FacebookAds\Object\Values\PaymentEnginePaymentReasonValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class PaymentEnginePayment extends AbstractCrudObject {

  /**
   * @return PaymentEnginePaymentFields
   */
  public static function getFieldsEnum() {
    return PaymentEnginePaymentFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Reason'] = PaymentEnginePaymentReasonValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createDispute(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'reason' => 'reason_enum',
    );
    $enums = array(
      'reason_enum' => PaymentEnginePaymentReasonValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/dispute',
      new PaymentEnginePayment(),
      'EDGE',
      PaymentEnginePayment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createRefund(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'amount' => 'float',
      'currency' => 'string',
      'reason' => 'reason_enum',
    );
    $enums = array(
      'reason_enum' => PaymentEnginePaymentReasonValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/refunds',
      new PaymentEnginePayment(),
      'EDGE',
      PaymentEnginePayment::getFieldsEnum()->getValues(),
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
      new PaymentEnginePayment(),
      'NODE',
      PaymentEnginePayment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
