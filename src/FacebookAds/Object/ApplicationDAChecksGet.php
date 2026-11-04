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
use FacebookAds\Object\Fields\ApplicationDAChecksGetFields;
use FacebookAds\Object\Values\ApplicationDAChecksGetCapabilitiesValues;
use FacebookAds\Object\Values\ApplicationDAChecksGetCategoriesValues;
use FacebookAds\Object\Values\ApplicationDAChecksGetConnectionMethodValues;
use FacebookAds\Object\Values\ApplicationDAChecksGetFeaturesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ApplicationDAChecksGet extends AbstractObject {

  /**
   * @return ApplicationDAChecksGetFields
   */
  public static function getFieldsEnum() {
    return ApplicationDAChecksGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Capabilities'] = ApplicationDAChecksGetCapabilitiesValues::getInstance()->getValues();
    $ref_enums['Categories'] = ApplicationDAChecksGetCategoriesValues::getInstance()->getValues();
    $ref_enums['ConnectionMethod'] = ApplicationDAChecksGetConnectionMethodValues::getInstance()->getValues();
    $ref_enums['Features'] = ApplicationDAChecksGetFeaturesValues::getInstance()->getValues();
    return $ref_enums;
  }


}
