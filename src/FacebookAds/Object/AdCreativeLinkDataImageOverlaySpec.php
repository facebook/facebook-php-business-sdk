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
use FacebookAds\Object\Fields\AdCreativeLinkDataImageOverlaySpecFields;
use FacebookAds\Object\Values\AdCreativeLinkDataImageOverlaySpecCustomTextTypeValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageOverlaySpecOverlayTemplateValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageOverlaySpecPositionValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageOverlaySpecTextFontValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageOverlaySpecTextTypeValues;
use FacebookAds\Object\Values\AdCreativeLinkDataImageOverlaySpecThemeColorValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeLinkDataImageOverlaySpec extends AbstractObject {

  /**
   * @return AdCreativeLinkDataImageOverlaySpecFields
   */
  public static function getFieldsEnum() {
    return AdCreativeLinkDataImageOverlaySpecFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CustomTextType'] = AdCreativeLinkDataImageOverlaySpecCustomTextTypeValues::getInstance()->getValues();
    $ref_enums['OverlayTemplate'] = AdCreativeLinkDataImageOverlaySpecOverlayTemplateValues::getInstance()->getValues();
    $ref_enums['Position'] = AdCreativeLinkDataImageOverlaySpecPositionValues::getInstance()->getValues();
    $ref_enums['TextFont'] = AdCreativeLinkDataImageOverlaySpecTextFontValues::getInstance()->getValues();
    $ref_enums['TextType'] = AdCreativeLinkDataImageOverlaySpecTextTypeValues::getInstance()->getValues();
    $ref_enums['ThemeColor'] = AdCreativeLinkDataImageOverlaySpecThemeColorValues::getInstance()->getValues();
    return $ref_enums;
  }


}
