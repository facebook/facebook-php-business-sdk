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
use FacebookAds\Object\Fields\AdCreativeLinkDataCustomOverlaySpecFields;
use FacebookAds\Object\Values\AdCreativeLinkDataCustomOverlaySpecBackgroundColorValues;
use FacebookAds\Object\Values\AdCreativeLinkDataCustomOverlaySpecFontValues;
use FacebookAds\Object\Values\AdCreativeLinkDataCustomOverlaySpecOptionValues;
use FacebookAds\Object\Values\AdCreativeLinkDataCustomOverlaySpecPositionValues;
use FacebookAds\Object\Values\AdCreativeLinkDataCustomOverlaySpecTemplateValues;
use FacebookAds\Object\Values\AdCreativeLinkDataCustomOverlaySpecTextColorValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeLinkDataCustomOverlaySpec extends AbstractObject {

  /**
   * @return AdCreativeLinkDataCustomOverlaySpecFields
   */
  public static function getFieldsEnum() {
    return AdCreativeLinkDataCustomOverlaySpecFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BackgroundColor'] = AdCreativeLinkDataCustomOverlaySpecBackgroundColorValues::getInstance()->getValues();
    $ref_enums['Font'] = AdCreativeLinkDataCustomOverlaySpecFontValues::getInstance()->getValues();
    $ref_enums['Option'] = AdCreativeLinkDataCustomOverlaySpecOptionValues::getInstance()->getValues();
    $ref_enums['Position'] = AdCreativeLinkDataCustomOverlaySpecPositionValues::getInstance()->getValues();
    $ref_enums['Template'] = AdCreativeLinkDataCustomOverlaySpecTemplateValues::getInstance()->getValues();
    $ref_enums['TextColor'] = AdCreativeLinkDataCustomOverlaySpecTextColorValues::getInstance()->getValues();
    return $ref_enums;
  }


}
