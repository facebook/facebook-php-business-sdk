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
use FacebookAds\Object\Fields\ProductCatalogProductsPostFields;
use FacebookAds\Object\Values\ProductCatalogProductsPostAgeGroupValues;
use FacebookAds\Object\Values\ProductCatalogProductsPostAvailabilityValues;
use FacebookAds\Object\Values\ProductCatalogProductsPostConditionValues;
use FacebookAds\Object\Values\ProductCatalogProductsPostGenderValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogProductsPost extends AbstractCrudObject {

  /**
   * @return ProductCatalogProductsPostFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogProductsPostFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AgeGroup'] = ProductCatalogProductsPostAgeGroupValues::getInstance()->getValues();
    $ref_enums['Availability'] = ProductCatalogProductsPostAvailabilityValues::getInstance()->getValues();
    $ref_enums['Condition'] = ProductCatalogProductsPostConditionValues::getInstance()->getValues();
    $ref_enums['Gender'] = ProductCatalogProductsPostGenderValues::getInstance()->getValues();
    return $ref_enums;
  }


}
