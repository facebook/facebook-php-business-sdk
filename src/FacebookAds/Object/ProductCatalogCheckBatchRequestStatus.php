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
use FacebookAds\Object\Fields\ProductCatalogCheckBatchRequestStatusFields;
use FacebookAds\Object\Values\ProductCatalogCheckBatchRequestStatusGetErrorPriorityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogCheckBatchRequestStatus extends AbstractCrudObject {

  /**
   * @return ProductCatalogCheckBatchRequestStatusFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogCheckBatchRequestStatusFields::getInstance();
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
      'error_priority' => 'error_priority_enum',
      'fields' => 'string',
      'handle' => 'string',
      'limit' => 'int',
      'load_ids_of_invalid_requests' => 'bool',
    );
    $enums = array(
      'error_priority_enum' => ProductCatalogCheckBatchRequestStatusGetErrorPriorityValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/check_batch_request_status',
      new ProductCatalogCheckBatchRequestStatusGet(),
      'EDGE',
      ProductCatalogCheckBatchRequestStatusGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
