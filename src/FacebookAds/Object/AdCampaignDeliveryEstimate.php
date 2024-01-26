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
use FacebookAds\Object\Fields\AdCampaignDeliveryEstimateFields;
use FacebookAds\Object\Values\AdCampaignDeliveryEstimateOptimizationGoalValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCampaignDeliveryEstimate extends AbstractObject {

  /**
   * @return AdCampaignDeliveryEstimateFields
   */
  public static function getFieldsEnum() {
    return AdCampaignDeliveryEstimateFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['OptimizationGoal'] = AdCampaignDeliveryEstimateOptimizationGoalValues::getInstance()->getValues();
    return $ref_enums;
  }


}
