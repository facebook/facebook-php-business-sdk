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
use FacebookAds\Object\Fields\ProductFeedProductsGetFields;
use FacebookAds\Object\Values\ProductFeedProductsGetDisplayFormatValues;
use FacebookAds\Object\Values\ProductFeedProductsGetErrorPriorityValues;
use FacebookAds\Object\Values\ProductFeedProductsGetErrorTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductFeedProductsGet extends AbstractObject {

  /**
   * @return ProductFeedProductsGetFields
   */
  public static function getFieldsEnum() {
    return ProductFeedProductsGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['DisplayFormat'] = ProductFeedProductsGetDisplayFormatValues::getInstance()->getValues();
    $ref_enums['ErrorPriority'] = ProductFeedProductsGetErrorPriorityValues::getInstance()->getValues();
    $ref_enums['ErrorType'] = ProductFeedProductsGetErrorTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


}
