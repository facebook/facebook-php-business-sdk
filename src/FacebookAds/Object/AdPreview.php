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
use FacebookAds\Object\Fields\AdPreviewFields;
use FacebookAds\Object\Values\AdPreviewAdFormatValues;
use FacebookAds\Object\Values\AdPreviewCreativeFeatureValues;
use FacebookAds\Object\Values\AdPreviewRenderTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdPreview extends AbstractObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'previews';
  }

  /**
   * @return AdPreviewFields
   */
  public static function getFieldsEnum() {
    return AdPreviewFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AdFormat'] = AdPreviewAdFormatValues::getInstance()->getValues();
    $ref_enums['CreativeFeature'] = AdPreviewCreativeFeatureValues::getInstance()->getValues();
    $ref_enums['RenderType'] = AdPreviewRenderTypeValues::getInstance()->getValues();
    return $ref_enums;
  }


}
