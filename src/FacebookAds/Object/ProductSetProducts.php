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
use FacebookAds\Object\Fields\ProductSetProductsFields;
use FacebookAds\Object\Values\ProductSetProductsGetDisplayFormatValues;
use FacebookAds\Object\Values\ProductSetProductsGetErrorPriorityValues;
use FacebookAds\Object\Values\ProductSetProductsGetErrorTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductSetProducts extends AbstractCrudObject {

  /**
   * @return ProductSetProductsFields
   */
  public static function getFieldsEnum() {
    return ProductSetProductsFields::getInstance();
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
      'dedupe_by_group_id_for_small_catalogs' => 'string',
      'dedupe_items_by_group' => 'string',
      'display_format' => 'display_format_enum',
      'enable_typeahead' => 'string',
      'error_priority' => 'error_priority_enum',
      'error_type' => 'error_type_enum',
      'fields' => 'string',
      'filter' => 'string',
      'limit' => 'int',
      'sort' => 'string',
      'summary' => 'string',
    );
    $enums = array(
      'display_format_enum' => ProductSetProductsGetDisplayFormatValues::getInstance()->getValues(),
      'error_priority_enum' => ProductSetProductsGetErrorPriorityValues::getInstance()->getValues(),
      'error_type_enum' => ProductSetProductsGetErrorTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/products',
      new ProductSetProductsGet(),
      'EDGE',
      ProductSetProductsGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
