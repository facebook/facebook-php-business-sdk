<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeLinkDataImageOverlaySpecFields extends AbstractEnum {

  const CUSTOM_TEXT_TYPE = 'custom_text_type';
  const FLOAT_WITH_MARGIN = 'float_with_margin';
  const OVERLAY_TEMPLATE = 'overlay_template';
  const POSITION = 'position';
  const TEXT_FONT = 'text_font';
  const TEXT_TEMPLATE_TAGS = 'text_template_tags';
  const TEXT_TYPE = 'text_type';
  const THEME_COLOR = 'theme_color';

  public function getFieldTypes() {
    return array(
      'custom_text_type' => 'CustomTextType',
      'float_with_margin' => 'bool',
      'overlay_template' => 'OverlayTemplate',
      'position' => 'Position',
      'text_font' => 'TextFont',
      'text_template_tags' => 'list<string>',
      'text_type' => 'TextType',
      'theme_color' => 'ThemeColor',
    );
  }
}
