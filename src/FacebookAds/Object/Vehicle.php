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
use FacebookAds\Object\Fields\VehicleFields;
use FacebookAds\Object\Values\VehicleAvailabilityValues;
use FacebookAds\Object\Values\VehicleBodyStyleValues;
use FacebookAds\Object\Values\VehicleConditionValues;
use FacebookAds\Object\Values\VehicleDrivetrainValues;
use FacebookAds\Object\Values\VehicleFuelTypeValues;
use FacebookAds\Object\Values\VehicleImageFetchStatusValues;
use FacebookAds\Object\Values\VehicleStateOfVehicleValues;
use FacebookAds\Object\Values\VehicleTransmissionValues;
use FacebookAds\Object\Values\VehicleVehicleTypeValues;
use FacebookAds\Object\Values\VehicleVisibilityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Vehicle extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'vehicles';
  }

  /**
   * @return VehicleFields
   */
  public static function getFieldsEnum() {
    return VehicleFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ImageFetchStatus'] = VehicleImageFetchStatusValues::getInstance()->getValues();
    $ref_enums['Visibility'] = VehicleVisibilityValues::getInstance()->getValues();
    $ref_enums['Availability'] = VehicleAvailabilityValues::getInstance()->getValues();
    $ref_enums['BodyStyle'] = VehicleBodyStyleValues::getInstance()->getValues();
    $ref_enums['Condition'] = VehicleConditionValues::getInstance()->getValues();
    $ref_enums['Drivetrain'] = VehicleDrivetrainValues::getInstance()->getValues();
    $ref_enums['FuelType'] = VehicleFuelTypeValues::getInstance()->getValues();
    $ref_enums['StateOfVehicle'] = VehicleStateOfVehicleValues::getInstance()->getValues();
    $ref_enums['Transmission'] = VehicleTransmissionValues::getInstance()->getValues();
    $ref_enums['VehicleType'] = VehicleVehicleTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getAugmentedRealitiesMetadata(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/augmented_realities_metadata',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getChannelsToIntegrityStatus(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/channels_to_integrity_status',
      new CatalogItemChannelsToIntegrityStatus(),
      'EDGE',
      CatalogItemChannelsToIntegrityStatus::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getVideosMetadata(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/videos_metadata',
      new DynamicVideoMetadata(),
      'EDGE',
      DynamicVideoMetadata::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Vehicle(),
      'NODE',
      Vehicle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'address' => 'map',
      'applinks' => 'Object',
      'availability' => 'availability_enum',
      'body_style' => 'body_style_enum',
      'condition' => 'condition_enum',
      'currency' => 'string',
      'date_first_on_lot' => 'string',
      'dealer_id' => 'string',
      'dealer_name' => 'string',
      'dealer_phone' => 'string',
      'description' => 'string',
      'drivetrain' => 'drivetrain_enum',
      'exterior_color' => 'string',
      'fb_page_id' => 'string',
      'fuel_type' => 'fuel_type_enum',
      'images' => 'list<Object>',
      'interior_color' => 'string',
      'make' => 'string',
      'mileage' => 'map',
      'model' => 'string',
      'price' => 'unsigned int',
      'state_of_vehicle' => 'state_of_vehicle_enum',
      'title' => 'string',
      'transmission' => 'transmission_enum',
      'trim' => 'string',
      'url' => 'string',
      'vehicle_type' => 'vehicle_type_enum',
      'vin' => 'string',
      'year' => 'unsigned int',
    );
    $enums = array(
      'availability_enum' => VehicleAvailabilityValues::getInstance()->getValues(),
      'body_style_enum' => VehicleBodyStyleValues::getInstance()->getValues(),
      'condition_enum' => VehicleConditionValues::getInstance()->getValues(),
      'drivetrain_enum' => VehicleDrivetrainValues::getInstance()->getValues(),
      'fuel_type_enum' => VehicleFuelTypeValues::getInstance()->getValues(),
      'state_of_vehicle_enum' => VehicleStateOfVehicleValues::getInstance()->getValues(),
      'transmission_enum' => VehicleTransmissionValues::getInstance()->getValues(),
      'vehicle_type_enum' => VehicleVehicleTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Vehicle(),
      'NODE',
      Vehicle::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
