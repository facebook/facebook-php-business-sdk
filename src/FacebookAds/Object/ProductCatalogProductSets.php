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
use FacebookAds\Object\Fields\ProductCatalogProductSetsFields;
use FacebookAds\Object\Values\ProductCatalogProductSetsGetIntegratedCheckoutEligibilityValues;
use FacebookAds\Object\Values\ProductCatalogProductSetsGetIntegratedCheckoutPartnerValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogProductSets extends AbstractCrudObject {

  /**
   * @return ProductCatalogProductSetsFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogProductSetsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function genget(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_url' => 'string',
      'after' => 'string',
      'ancestor_id' => 'int',
      'before' => 'string',
      'fields' => 'string',
      'filtering' => 'string',
      'has_children' => 'bool',
      'integrated_checkout_eligibility' => 'integrated_checkout_eligibility_enum',
      'integrated_checkout_partner' => 'integrated_checkout_partner_enum',
      'limit' => 'int',
      'parent_id' => 'string',
      'product_set_usages' => 'string',
      'retailer_id' => 'string',
      'sort' => 'string',
      'summary' => 'string',
    );
    $enums = array(
      'integrated_checkout_eligibility_enum' => ProductCatalogProductSetsGetIntegratedCheckoutEligibilityValues::getInstance()->getValues(),
      'integrated_checkout_partner_enum' => ProductCatalogProductSetsGetIntegratedCheckoutPartnerValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/product_sets',
      new ProductCatalogProductSetsGet(),
      'EDGE',
      ProductCatalogProductSetsGet::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
