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
use FacebookAds\Object\Fields\ProductSetDAChecksGetFields;
use FacebookAds\Object\Values\ProductSetDAChecksGetCapabilitiesValues;
use FacebookAds\Object\Values\ProductSetDAChecksGetCategoriesValues;
use FacebookAds\Object\Values\ProductSetDAChecksGetConnectionMethodValues;
use FacebookAds\Object\Values\ProductSetDAChecksGetFeaturesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductSetDAChecksGet extends AbstractObject {

  /**
   * @return ProductSetDAChecksGetFields
   */
  public static function getFieldsEnum() {
    return ProductSetDAChecksGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Capabilities'] = ProductSetDAChecksGetCapabilitiesValues::getInstance()->getValues();
    $ref_enums['Categories'] = ProductSetDAChecksGetCategoriesValues::getInstance()->getValues();
    $ref_enums['ConnectionMethod'] = ProductSetDAChecksGetConnectionMethodValues::getInstance()->getValues();
    $ref_enums['Features'] = ProductSetDAChecksGetFeaturesValues::getInstance()->getValues();
    return $ref_enums;
  }


}
