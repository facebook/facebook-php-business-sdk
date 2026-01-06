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
use FacebookAds\Object\Fields\ManagedPartnerBusinessFields;
use FacebookAds\Object\Values\ManagedPartnerBusinessPartitionTypeValues;
use FacebookAds\Object\Values\ManagedPartnerBusinessSurveyBusinessTypeValues;
use FacebookAds\Object\Values\ManagedPartnerBusinessTimezoneIdValues;
use FacebookAds\Object\Values\ManagedPartnerBusinessVerticalValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ManagedPartnerBusiness extends AbstractObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'managed_partner_businesses';
  }

  /**
   * @return ManagedPartnerBusinessFields
   */
  public static function getFieldsEnum() {
    return ManagedPartnerBusinessFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['PartitionType'] = ManagedPartnerBusinessPartitionTypeValues::getInstance()->getValues();
    $ref_enums['SurveyBusinessType'] = ManagedPartnerBusinessSurveyBusinessTypeValues::getInstance()->getValues();
    $ref_enums['TimezoneId'] = ManagedPartnerBusinessTimezoneIdValues::getInstance()->getValues();
    $ref_enums['Vertical'] = ManagedPartnerBusinessVerticalValues::getInstance()->getValues();
    return $ref_enums;
  }


}
