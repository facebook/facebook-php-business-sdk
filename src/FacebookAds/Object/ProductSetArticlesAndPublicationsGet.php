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
use FacebookAds\Object\Fields\ProductSetArticlesAndPublicationsGetFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductSetArticlesAndPublicationsGet extends AbstractObject {

  /**
   * @return ProductSetArticlesAndPublicationsGetFields
   */
  public static function getFieldsEnum() {
    return ProductSetArticlesAndPublicationsGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


}
