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
use FacebookAds\Object\Fields\AdAssetFeedSpecFields;
use FacebookAds\Object\Values\AdAssetFeedSpecCallToActionTypesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAssetFeedSpec extends AbstractObject {

  /**
   * @return AdAssetFeedSpecFields
   */
  public static function getFieldsEnum() {
    return AdAssetFeedSpecFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CallToActionTypes'] = AdAssetFeedSpecCallToActionTypesValues::getInstance()->getValues();
    return $ref_enums;
  }


}
