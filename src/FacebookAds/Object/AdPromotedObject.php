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
use FacebookAds\Object\Fields\AdPromotedObjectFields;
use FacebookAds\Object\Values\AdPromotedObjectCustomEventTypeValues;
use FacebookAds\Object\Values\AdPromotedObjectLeadAdsCustomEventTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdPromotedObject extends AbstractObject {

  /**
   * @return AdPromotedObjectFields
   */
  public static function getFieldsEnum() {
    return AdPromotedObjectFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CustomEventType'] = AdPromotedObjectCustomEventTypeValues::getInstance()->getValues();
    $ref_enums['LeadAdsCustomEventType'] = AdPromotedObjectLeadAdsCustomEventTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


}
