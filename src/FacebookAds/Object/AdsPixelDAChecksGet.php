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
use FacebookAds\Object\Fields\AdsPixelDAChecksGetFields;
use FacebookAds\Object\Values\AdsPixelDAChecksGetActionSourceValues;
use FacebookAds\Object\Values\AdsPixelDAChecksGetCapabilitiesValues;
use FacebookAds\Object\Values\AdsPixelDAChecksGetCategoriesValues;
use FacebookAds\Object\Values\AdsPixelDAChecksGetConnectionMethodValues;
use FacebookAds\Object\Values\AdsPixelDAChecksGetFeaturesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsPixelDAChecksGet extends AbstractObject {

  /**
   * @return AdsPixelDAChecksGetFields
   */
  public static function getFieldsEnum() {
    return AdsPixelDAChecksGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ActionSource'] = AdsPixelDAChecksGetActionSourceValues::getInstance()->getValues();
    $ref_enums['Capabilities'] = AdsPixelDAChecksGetCapabilitiesValues::getInstance()->getValues();
    $ref_enums['Categories'] = AdsPixelDAChecksGetCategoriesValues::getInstance()->getValues();
    $ref_enums['ConnectionMethod'] = AdsPixelDAChecksGetConnectionMethodValues::getInstance()->getValues();
    $ref_enums['Features'] = AdsPixelDAChecksGetFeaturesValues::getInstance()->getValues();
    return $ref_enums;
  }


}
