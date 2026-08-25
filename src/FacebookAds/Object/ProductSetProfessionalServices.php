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
use FacebookAds\Object\Fields\ProductSetProfessionalServicesFields;
use FacebookAds\Object\Values\ProductSetProfessionalServicesGetDisplayFormatValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductSetProfessionalServices extends AbstractCrudObject {

  /**
   * @return ProductSetProfessionalServicesFields
   */
  public static function getFieldsEnum() {
    return ProductSetProfessionalServicesFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'after' => 'string',
      'before' => 'string',
      'display_format' => 'display_format_enum',
      'limit' => 'int',
      'summary' => 'bool',
    );
    $enums = array(
      'display_format_enum' => ProductSetProfessionalServicesGetDisplayFormatValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/professional_services',
      new ProductSetProfessionalServicesGet(),
      'EDGE',
      ProductSetProfessionalServicesGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
