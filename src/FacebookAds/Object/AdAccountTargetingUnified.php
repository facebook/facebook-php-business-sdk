<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
