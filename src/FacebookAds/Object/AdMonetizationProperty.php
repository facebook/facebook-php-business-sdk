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
use FacebookAds\Object\Fields\AdMonetizationPropertyFields;
use FacebookAds\Object\Values\AdMonetizationPropertyAggregationPeriodValues;
use FacebookAds\Object\Values\AdMonetizationPropertyBreakdownsValues;
use FacebookAds\Object\Values\AdMonetizationPropertyMetricsValues;
use FacebookAds\Object\Values\AdMonetizationPropertyOrderingColumnValues;
use FacebookAds\Object\Values\AdMonetizationPropertyOrderingTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdMonetizationProperty extends AbstractCrudObject {

  /**
   * @return AdMonetizationPropertyFields
   */
  public static function getFieldsEnum() {
    return AdMonetizationPropertyFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AggregationPeriod'] = AdMonetizationPropertyAggregationPeriodValues::getInstance()->getValues();
    $ref_enums['Breakdowns'] = AdMonetizationPropertyBreakdownsValues::getInstance()->getValues();
    $ref_enums['Metrics'] = AdMonetizationPropertyMetricsValues::getInstance()->getValues();
    $ref_enums['OrderingColumn'] = AdMonetizationPropertyOrderingColumnValues::getInstance()->getValues();
    $ref_enums['OrderingType'] = AdMonetizationPropertyOrderingTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getAdNetworkAnalytics(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aggregation_period' => 'aggregation_period_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'filters' => 'list<map>',
      'limit' => 'unsigned int',
      'metrics' => 'list<metrics_enum>',
      'ordering_column' => 'ordering_column_enum',
      'ordering_type' => 'ordering_type_enum',
      'since' => 'Object',
      'until' => 'Object',
    );
    $enums = array(
      'aggregation_period_enum' => AdMonetizationPropertyAggregationPeriodValues::getInstance()->getValues(),
      'breakdowns_enum' => AdMonetizationPropertyBreakdownsValues::getInstance()->getValues(),
      'metrics_enum' => AdMonetizationPropertyMetricsValues::getInstance()->getValues(),
      'ordering_column_enum' => AdMonetizationPropertyOrderingColumnValues::getInstance()->getValues(),
      'ordering_type_enum' => AdMonetizationPropertyOrderingTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adnetworkanalytics',
      new AdNetworkAnalyticsSyncQueryResult(),
      'EDGE',
      AdNetworkAnalyticsSyncQueryResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdNetworkAnalytic(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aggregation_period' => 'aggregation_period_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'metrics' => 'list<metrics_enum>',
      'filters' => 'list<Object>',
      'limit' => 'int',
      'ordering_column' => 'ordering_column_enum',
      'ordering_type' => 'ordering_type_enum',
      'since' => 'Object',
      'until' => 'Object',
    );
    $enums = array(
      'aggregation_period_enum' => AdMonetizationPropertyAggregationPeriodValues::getInstance()->getValues(),
      'breakdowns_enum' => AdMonetizationPropertyBreakdownsValues::getInstance()->getValues(),
      'metrics_enum' => AdMonetizationPropertyMetricsValues::getInstance()->getValues(),
      'ordering_column_enum' => AdMonetizationPropertyOrderingColumnValues::getInstance()->getValues(),
      'ordering_type_enum' => AdMonetizationPropertyOrderingTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adnetworkanalytics',
      new AdMonetizationProperty(),
      'EDGE',
      AdMonetizationProperty::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdNetworkAnalyticsResults(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'query_ids' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adnetworkanalytics_results',
      new AdNetworkAnalyticsAsyncQueryResult(),
      'EDGE',
      AdNetworkAnalyticsAsyncQueryResult::getFieldsEnum()->getValues(),
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
      new AdMonetizationProperty(),
      'NODE',
      AdMonetizationProperty::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
