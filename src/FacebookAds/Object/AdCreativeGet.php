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
use FacebookAds\Object\Fields\AdCreativeGetFields;
use FacebookAds\Object\Values\AdCreativeGetActorTypeValues;
use FacebookAds\Object\Values\AdCreativeGetApplinkTreatmentValues;
use FacebookAds\Object\Values\AdCreativeGetAuthorizationCategoryValues;
use FacebookAds\Object\Values\AdCreativeGetBrandedContentBoostingTypeValues;
use FacebookAds\Object\Values\AdCreativeGetCallToActionTypeValues;
use FacebookAds\Object\Values\AdCreativeGetCategorizationCriteriaValues;
use FacebookAds\Object\Values\AdCreativeGetCategoryMediaSourceValues;
use FacebookAds\Object\Values\AdCreativeGetEffectiveAuthorizationCategoryValues;
use FacebookAds\Object\Values\AdCreativeGetMediaTypeValues;
use FacebookAds\Object\Values\AdCreativeGetObjectTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeGet extends AbstractCrudObject {

  /**
   * @return AdCreativeGetFields
   */
  public static function getFieldsEnum() {
    return AdCreativeGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ActorType'] = AdCreativeGetActorTypeValues::getInstance()->getValues();
    $ref_enums['ApplinkTreatment'] = AdCreativeGetApplinkTreatmentValues::getInstance()->getValues();
    $ref_enums['AuthorizationCategory'] = AdCreativeGetAuthorizationCategoryValues::getInstance()->getValues();
    $ref_enums['BrandedContentBoostingType'] = AdCreativeGetBrandedContentBoostingTypeValues::getInstance()->getValues();
    $ref_enums['CallToActionType'] = AdCreativeGetCallToActionTypeValues::getInstance()->getValues();
    $ref_enums['CategorizationCriteria'] = AdCreativeGetCategorizationCriteriaValues::getInstance()->getValues();
    $ref_enums['CategoryMediaSource'] = AdCreativeGetCategoryMediaSourceValues::getInstance()->getValues();
    $ref_enums['EffectiveAuthorizationCategory'] = AdCreativeGetEffectiveAuthorizationCategoryValues::getInstance()->getValues();
    $ref_enums['MediaType'] = AdCreativeGetMediaTypeValues::getInstance()->getValues();
    $ref_enums['ObjectType'] = AdCreativeGetObjectTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


}
