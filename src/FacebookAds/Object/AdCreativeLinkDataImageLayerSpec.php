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
use FacebookAds\Object\Fields\AdCreativeLinkDataImageLayerSpecFields;
use FacebookAds\Object\Values\AdCreativeLinkDataImageLayerSpecBlendingModeValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageLayerSpecFrameSourceValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageLayerSpecImageSourceValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageLayerSpecLayerTypeValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageLayerSpecOverlayPositionValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageLayerSpecOverlayShapeValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageLayerSpecTextFontValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeLinkDataImageLayerSpec extends AbstractObject {

  /**
   * @return AdCreativeLinkDataImageLayerSpecFields
   */
  public static function getFieldsEnum() {
    return AdCreativeLinkDataImageLayerSpecFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BlendingMode'] = AdCreativeLinkDataImageLayerSpecBlendingModeValues::getInstance()->getValues();
    $ref_enums['FrameSource'] = AdCreativeLinkDataImageLayerSpecFrameSourceValues::getInstance()->getValues();
    $ref_enums['ImageSource'] = AdCreativeLinkDataImageLayerSpecImageSourceValues::getInstance()->getValues();
    $ref_enums['LayerType'] = AdCreativeLinkDataImageLayerSpecLayerTypeValues::getInstance()->getValues();
    $ref_enums['OverlayPosition'] = AdCreativeLinkDataImageLayerSpecOverlayPositionValues::getInstance()->getValues();
    $ref_enums['OverlayShape'] = AdCreativeLinkDataImageLayerSpecOverlayShapeValues::getInstance()->getValues();
    $ref_enums['TextFont'] = AdCreativeLinkDataImageLayerSpecTextFontValues::getInstance()->getValues();
    return $ref_enums;
  }


}
