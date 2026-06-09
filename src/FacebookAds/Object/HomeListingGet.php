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
use FacebookAds\Object\Fields\HomeListingGetFields;
use FacebookAds\Object\Values\HomeListingGetAcTypeValues;
use FacebookAds\Object\Values\HomeListingGetAreaUnitValues;
use FacebookAds\Object\Values\HomeListingGetAvailabilityValues;
use FacebookAds\Object\Values\HomeListingGetCapabilitiesRenderingCatalogManagerValues;
use FacebookAds\Object\Values\HomeListingGetCapabilitiesValues;
use FacebookAds\Object\Values\HomeListingGetFurnishTypeValues;
use FacebookAds\Object\Values\HomeListingGetHeatingTypeValues;
use FacebookAds\Object\Values\HomeListingGetImageFetchStatusValues;
use FacebookAds\Object\Values\HomeListingGetLaundryTypeValues;
use FacebookAds\Object\Values\HomeListingGetListingTypeValues;
use FacebookAds\Object\Values\HomeListingGetParkingTypeValues;
use FacebookAds\Object\Values\HomeListingGetPartnerVerificationValues;
use FacebookAds\Object\Values\HomeListingGetPropertyTypeValues;
use FacebookAds\Object\Values\HomeListingGetVisibilityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class HomeListingGet extends AbstractCrudObject {

  /**
   * @return HomeListingGetFields
   */
  public static function getFieldsEnum() {
    return HomeListingGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AcType'] = HomeListingGetAcTypeValues::getInstance()->getValues();
    $ref_enums['AreaUnit'] = HomeListingGetAreaUnitValues::getInstance()->getValues();
    $ref_enums['Availability'] = HomeListingGetAvailabilityValues::getInstance()->getValues();
    $ref_enums['Capabilities'] = HomeListingGetCapabilitiesValues::getInstance()->getValues();
    $ref_enums['CapabilitiesRenderingCatalogManager'] = HomeListingGetCapabilitiesRenderingCatalogManagerValues::getInstance()->getValues();
    $ref_enums['FurnishType'] = HomeListingGetFurnishTypeValues::getInstance()->getValues();
    $ref_enums['HeatingType'] = HomeListingGetHeatingTypeValues::getInstance()->getValues();
    $ref_enums['ImageFetchStatus'] = HomeListingGetImageFetchStatusValues::getInstance()->getValues();
    $ref_enums['LaundryType'] = HomeListingGetLaundryTypeValues::getInstance()->getValues();
    $ref_enums['ListingType'] = HomeListingGetListingTypeValues::getInstance()->getValues();
    $ref_enums['ParkingType'] = HomeListingGetParkingTypeValues::getInstance()->getValues();
    $ref_enums['PartnerVerification'] = HomeListingGetPartnerVerificationValues::getInstance()->getValues();
    $ref_enums['PropertyType'] = HomeListingGetPropertyTypeValues::getInstance()->getValues();
    $ref_enums['Visibility'] = HomeListingGetVisibilityValues::getInstance()->getValues();
    return $ref_enums;
  }


}
