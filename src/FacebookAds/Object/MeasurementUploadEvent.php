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
use FacebookAds\Object\Fields\MeasurementUploadEventFields;
use FacebookAds\Object\Values\MeasurementUploadEventAggregationLevelValues;
use FacebookAds\Object\Values\MeasurementUploadEventEventStatusValues;
use FacebookAds\Object\Values\MeasurementUploadEventLookbackWindowValues;
use FacebookAds\Object\Values\MeasurementUploadEventMatchUniverseValues;
use FacebookAds\Object\Values\MeasurementUploadEventTimezoneValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class MeasurementUploadEvent extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'upload_event';
  }

  /**
   * @return MeasurementUploadEventFields
   */
  public static function getFieldsEnum() {
    return MeasurementUploadEventFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AggregationLevel'] = MeasurementUploadEventAggregationLevelValues::getInstance()->getValues();
    $ref_enums['EventStatus'] = MeasurementUploadEventEventStatusValues::getInstance()->getValues();
    $ref_enums['LookbackWindow'] = MeasurementUploadEventLookbackWindowValues::getInstance()->getValues();
    $ref_enums['MatchUniverse'] = MeasurementUploadEventMatchUniverseValues::getInstance()->getValues();
    $ref_enums['Timezone'] = MeasurementUploadEventTimezoneValues::getInstance()->getValues();
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
      new MeasurementUploadEvent(),
      'NODE',
      MeasurementUploadEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aggregation_level' => 'aggregation_level_enum',
      'conversion_end_date' => 'string',
      'conversion_start_date' => 'string',
      'event_status' => 'event_status_enum',
      'lookback_window' => 'lookback_window_enum',
      'match_universe' => 'match_universe_enum',
      'partner' => 'string',
      'timezone' => 'timezone_enum',
      'upload_tag' => 'string',
    );
    $enums = array(
      'aggregation_level_enum' => MeasurementUploadEventAggregationLevelValues::getInstance()->getValues(),
      'event_status_enum' => MeasurementUploadEventEventStatusValues::getInstance()->getValues(),
      'lookback_window_enum' => MeasurementUploadEventLookbackWindowValues::getInstance()->getValues(),
      'match_universe_enum' => MeasurementUploadEventMatchUniverseValues::getInstance()->getValues(),
      'timezone_enum' => MeasurementUploadEventTimezoneValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new MeasurementUploadEvent(),
      'NODE',
      MeasurementUploadEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
