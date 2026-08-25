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
use FacebookAds\Object\Fields\ProductFeedProfessionalServicesGetFields;
use FacebookAds\Object\Values\ProductFeedProfessionalServicesGetDisplayFormatValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductFeedProfessionalServicesGet extends AbstractObject {

  /**
   * @return ProductFeedProfessionalServicesGetFields
   */
  public static function getFieldsEnum() {
    return ProductFeedProfessionalServicesGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['DisplayFormat'] = ProductFeedProfessionalServicesGetDisplayFormatValues::getInstance()->getValues();
    return $ref_enums;
  }


}
