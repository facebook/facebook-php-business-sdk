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
use FacebookAds\Object\Fields\ProductCatalogVersionItemsBatchFields;
use FacebookAds\Object\Values\ProductCatalogVersionItemsBatchPostItemSubTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogVersionItemsBatch extends AbstractCrudObject {

  /**
   * @return ProductCatalogVersionItemsBatchFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogVersionItemsBatchFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genpost(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'allow_upsert' => 'bool',
      'item_sub_type' => 'item_sub_type_enum',
      'item_type' => 'string',
      'item_version' => 'string',
      'requests' => 'string',
      'version' => 'int',
    );
    $enums = array(
      'item_sub_type_enum' => ProductCatalogVersionItemsBatchPostItemSubTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/version_items_batch',
      new ProductCatalogVersionItemsBatchPost(),
      'EDGE',
      ProductCatalogVersionItemsBatchPost::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
