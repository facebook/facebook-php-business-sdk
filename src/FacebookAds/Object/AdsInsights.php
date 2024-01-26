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
use FacebookAds\Object\Fields\AdsInsightsFields;
use FacebookAds\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAds\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAds\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAds\Object\Values\AdsInsightsDatePresetValues;
use FacebookAds\Object\Values\AdsInsightsLevelValues;
use FacebookAds\Object\Values\AdsInsightsSummaryActionBreakdownsValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsInsights extends AbstractObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'insights';
  }

  /**
   * @return AdsInsightsFields
   */
  public static function getFieldsEnum() {
    return AdsInsightsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ActionAttributionWindows'] = AdsInsightsActionAttributionWindowsValues::getInstance()->getValues();
    $ref_enums['ActionBreakdowns'] = AdsInsightsActionBreakdownsValues::getInstance()->getValues();
    $ref_enums['ActionReportTime'] = AdsInsightsActionReportTimeValues::getInstance()->getValues();
    $ref_enums['Breakdowns'] = AdsInsightsBreakdownsValues::getInstance()->getValues();
    $ref_enums['DatePreset'] = AdsInsightsDatePresetValues::getInstance()->getValues();
    $ref_enums['Level'] = AdsInsightsLevelValues::getInstance()->getValues();
    $ref_enums['SummaryActionBreakdowns'] = AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues();
    return $ref_enums;
  }


}
