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
use FacebookAds\Object\Fields\AdCampaignPlacementGetFields;
use FacebookAds\Object\Values\AdCampaignPlacementGetEffectiveAudienceNetworkPositionsValues;
use FacebookAds\Object\Values\AdCampaignPlacementGetEffectiveDevicePlatformsValues;
use FacebookAds\Object\Values\AdCampaignPlacementGetEffectiveFacebookPositionsValues;
use FacebookAds\Object\Values\AdCampaignPlacementGetEffectiveInstagramPositionsValues;
use FacebookAds\Object\Values\AdCampaignPlacementGetEffectiveMessengerPositionsValues;
use FacebookAds\Object\Values\AdCampaignPlacementGetEffectiveOculusPositionsValues;
use FacebookAds\Object\Values\AdCampaignPlacementGetEffectivePublisherPlatformsValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCampaignPlacementGet extends AbstractObject {

  /**
   * @return AdCampaignPlacementGetFields
   */
  public static function getFieldsEnum() {
    return AdCampaignPlacementGetFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['EffectiveAudienceNetworkPositions'] = AdCampaignPlacementGetEffectiveAudienceNetworkPositionsValues::getInstance()->getValues();
    $ref_enums['EffectiveDevicePlatforms'] = AdCampaignPlacementGetEffectiveDevicePlatformsValues::getInstance()->getValues();
    $ref_enums['EffectiveFacebookPositions'] = AdCampaignPlacementGetEffectiveFacebookPositionsValues::getInstance()->getValues();
    $ref_enums['EffectiveInstagramPositions'] = AdCampaignPlacementGetEffectiveInstagramPositionsValues::getInstance()->getValues();
    $ref_enums['EffectiveMessengerPositions'] = AdCampaignPlacementGetEffectiveMessengerPositionsValues::getInstance()->getValues();
    $ref_enums['EffectiveOculusPositions'] = AdCampaignPlacementGetEffectiveOculusPositionsValues::getInstance()->getValues();
    $ref_enums['EffectivePublisherPlatforms'] = AdCampaignPlacementGetEffectivePublisherPlatformsValues::getInstance()->getValues();
    return $ref_enums;
  }


}
