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
use FacebookAds\Object\Fields\VehicleFields;
use FacebookAds\Object\Values\VehicleAvailabilityValues;
use FacebookAds\Object\Values\VehicleBodyStyleValues;
use FacebookAds\Object\Values\VehicleConditionValues;
use FacebookAds\Object\Values\VehicleDrivetrainValues;
use FacebookAds\Object\Values\VehicleFuelTypeValues;
use FacebookAds\Object\Values\VehicleStateOfVehicleValues;
use FacebookAds\Object\Values\VehicleTransmissionValues;
use FacebookAds\Object\Values\VehicleVehicleTypeValues;

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
      'applinks' => 'Object',
      'transmission' => 'transmission_enum',
      'drivetrain' => 'drivetrain_enum',
      'fuel_type' => 'fuel_type_enum',
      'trim' => 'string',
      'interior_color' => 'string',
      'condition' => 'condition_enum',
      'date_first_on_lot' => 'string',
      'availability' => 'availability_enum',
      'dealer_id' => 'string',
      'dealer_name' => 'string',
      'dealer_phone' => 'string',
      'vehicle_type' => 'vehicle_type_enum',
      'body_style' => 'body_style_enum',
      'description' => 'string',
      'exterior_color' => 'string',
      'make' => 'string',
      'mileage' => 'map',
      'model' => 'string',
      'state_of_vehicle' => 'state_of_vehicle_enum',
      'vin' => 'string',
      'url' => 'string',
      'year' => 'unsigned int',
      'images' => 'list<Object>',
      'address' => 'map',
      'currency' => 'string',
      'price' => 'unsigned int',
      'title' => 'string',
    );
    $enums = array(
      'transmission_enum' => VehicleTransmissionValues::getInstance()->getValues(),
      'drivetrain_enum' => VehicleDrivetrainValues::getInstance()->getValues(),
      'fuel_type_enum' => VehicleFuelTypeValues::getInstance()->getValues(),
      'condition_enum' => VehicleConditionValues::getInstance()->getValues(),
      'availability_enum' => VehicleAvailabilityValues::getInstance()->getValues(),
      'vehicle_type_enum' => VehicleVehicleTypeValues::getInstance()->getValues(),
      'body_style_enum' => VehicleBodyStyleValues::getInstance()->getValues(),
      'state_of_vehicle_enum' => VehicleStateOfVehicleValues::getInstance()->getValues(),
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
