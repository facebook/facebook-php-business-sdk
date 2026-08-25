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
use FacebookAds\Object\Fields\AdAccountGetFields;
use FacebookAds\Object\Values\AdAccountGetAuthFlowForTrustTierStateValues;
use FacebookAds\Object\Values\AdAccountGetAuthorizedCountryForPoliticalAdsValues;
use FacebookAds\Object\Values\AdAccountGetBrandSafetyExcludedTopicsValues;
use FacebookAds\Object\Values\AdAccountGetBusinessRestrictionReasonValues;
use FacebookAds\Object\Values\AdAccountGetBusinessVerificationStatusValues;
use FacebookAds\Object\Values\AdAccountGetFlexSingleObjectiveValues;
use FacebookAds\Object\Values\AdAccountGetMarketingMessageEnablementStatusValues;
use FacebookAds\Object\Values\AdAccountGetModeledReportingTypeValues;
use FacebookAds\Object\Values\AdAccountGetSegmentValues;
use FacebookAds\Object\Values\AdAccountGetStoredBalanceStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdAccountGet extends AbstractCrudObject {

  /**
   * @return AdAccountGetFields
   */
  public static function getFieldsEnum() {
    return AdAccountGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AuthFlowForTrustTierState'] = AdAccountGetAuthFlowForTrustTierStateValues::getInstance()->getValues();
    $ref_enums['AuthorizedCountryForPoliticalAds'] = AdAccountGetAuthorizedCountryForPoliticalAdsValues::getInstance()->getValues();
    $ref_enums['BrandSafetyExcludedTopics'] = AdAccountGetBrandSafetyExcludedTopicsValues::getInstance()->getValues();
    $ref_enums['BusinessRestrictionReason'] = AdAccountGetBusinessRestrictionReasonValues::getInstance()->getValues();
    $ref_enums['BusinessVerificationStatus'] = AdAccountGetBusinessVerificationStatusValues::getInstance()->getValues();
    $ref_enums['FlexSingleObjective'] = AdAccountGetFlexSingleObjectiveValues::getInstance()->getValues();
    $ref_enums['MarketingMessageEnablementStatus'] = AdAccountGetMarketingMessageEnablementStatusValues::getInstance()->getValues();
    $ref_enums['ModeledReportingType'] = AdAccountGetModeledReportingTypeValues::getInstance()->getValues();
    $ref_enums['Segment'] = AdAccountGetSegmentValues::getInstance()->getValues();
    $ref_enums['StoredBalanceStatus'] = AdAccountGetStoredBalanceStatusValues::getInstance()->getValues();
    return $ref_enums;
  }


}
