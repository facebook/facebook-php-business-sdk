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
use FacebookAds\Object\Fields\AdAccountTargetingUnifiedFields;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedAppStoreValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedLimitTypeValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedModeValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedObjectiveValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedRegulatedCategoriesValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedRegulatedCountriesValues;
use FacebookAds\Object\Values\AdAccountTargetingUnifiedWhitelistedTypesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAccountTargetingUnified extends AbstractCrudObject {

  /**
   * @return AdAccountTargetingUnifiedFields
   */
  public static function getFieldsEnum() {
    return AdAccountTargetingUnifiedFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['LimitType'] = AdAccountTargetingUnifiedLimitTypeValues::getInstance()->getValues();
    $ref_enums['RegulatedCategories'] = AdAccountTargetingUnifiedRegulatedCategoriesValues::getInstance()->getValues();
    $ref_enums['RegulatedCountries'] = AdAccountTargetingUnifiedRegulatedCountriesValues::getInstance()->getValues();
    $ref_enums['WhitelistedTypes'] = AdAccountTargetingUnifiedWhitelistedTypesValues::getInstance()->getValues();
    $ref_enums['AppStore'] = AdAccountTargetingUnifiedAppStoreValues::getInstance()->getValues();
    $ref_enums['Objective'] = AdAccountTargetingUnifiedObjectiveValues::getInstance()->getValues();
    $ref_enums['Mode'] = AdAccountTargetingUnifiedModeValues::getInstance()->getValues();
    return $ref_enums;
  }


}
