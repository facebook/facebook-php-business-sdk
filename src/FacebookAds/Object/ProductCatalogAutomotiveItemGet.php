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
use FacebookAds\Object\Fields\ProductCatalogAutomotiveItemGetFields;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetAvailabilityCircleRadiusUnitValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetAvailabilityValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetBodyStyleValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetCapabilitiesDisabledByUserValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetCapabilitiesRenderingCatalogManagerValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetCapabilitiesValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetConditionValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetDealerCommunicationChannelValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetDisplayFormatValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetDrivetrainValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetFinanceTypeValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetFuelTypeValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetImageFetchStatusValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetOfferTypeValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetStateOfVehicleValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetTransmissionValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetVehicleTypeValues;
use FacebookAds\Object\Values\ProductCatalogAutomotiveItemGetVisibilityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogAutomotiveItemGet extends AbstractCrudObject {

  /**
   * @return ProductCatalogAutomotiveItemGetFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogAutomotiveItemGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Availability'] = ProductCatalogAutomotiveItemGetAvailabilityValues::getInstance()->getValues();
    $ref_enums['AvailabilityCircleRadiusUnit'] = ProductCatalogAutomotiveItemGetAvailabilityCircleRadiusUnitValues::getInstance()->getValues();
    $ref_enums['BodyStyle'] = ProductCatalogAutomotiveItemGetBodyStyleValues::getInstance()->getValues();
    $ref_enums['Capabilities'] = ProductCatalogAutomotiveItemGetCapabilitiesValues::getInstance()->getValues();
    $ref_enums['CapabilitiesDisabledByUser'] = ProductCatalogAutomotiveItemGetCapabilitiesDisabledByUserValues::getInstance()->getValues();
    $ref_enums['CapabilitiesRenderingCatalogManager'] = ProductCatalogAutomotiveItemGetCapabilitiesRenderingCatalogManagerValues::getInstance()->getValues();
    $ref_enums['Condition'] = ProductCatalogAutomotiveItemGetConditionValues::getInstance()->getValues();
    $ref_enums['DealerCommunicationChannel'] = ProductCatalogAutomotiveItemGetDealerCommunicationChannelValues::getInstance()->getValues();
    $ref_enums['DisplayFormat'] = ProductCatalogAutomotiveItemGetDisplayFormatValues::getInstance()->getValues();
    $ref_enums['Drivetrain'] = ProductCatalogAutomotiveItemGetDrivetrainValues::getInstance()->getValues();
    $ref_enums['FinanceType'] = ProductCatalogAutomotiveItemGetFinanceTypeValues::getInstance()->getValues();
    $ref_enums['FuelType'] = ProductCatalogAutomotiveItemGetFuelTypeValues::getInstance()->getValues();
    $ref_enums['ImageFetchStatus'] = ProductCatalogAutomotiveItemGetImageFetchStatusValues::getInstance()->getValues();
    $ref_enums['OfferType'] = ProductCatalogAutomotiveItemGetOfferTypeValues::getInstance()->getValues();
    $ref_enums['StateOfVehicle'] = ProductCatalogAutomotiveItemGetStateOfVehicleValues::getInstance()->getValues();
    $ref_enums['Transmission'] = ProductCatalogAutomotiveItemGetTransmissionValues::getInstance()->getValues();
    $ref_enums['VehicleType'] = ProductCatalogAutomotiveItemGetVehicleTypeValues::getInstance()->getValues();
    $ref_enums['Visibility'] = ProductCatalogAutomotiveItemGetVisibilityValues::getInstance()->getValues();
    return $ref_enums;
  }


}
