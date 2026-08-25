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
use FacebookAds\Object\Fields\ProductCatalogHotelsItemFields;
use FacebookAds\Object\Values\ProductCatalogHotelsItemGetDisplayFormatValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogHotelsItem extends AbstractCrudObject {

  /**
   * @return ProductCatalogHotelsItemFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogHotelsItemFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'display_format' => 'display_format_enum',
    );
    $enums = array(
      'display_format_enum' => ProductCatalogHotelsItemGetDisplayFormatValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new ProductCatalogHotelsItemGet(),
      'EDGE',
      ProductCatalogHotelsItemGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
