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

class AdCreativeLinkDataCustomOverlaySpecFields extends AbstractEnum {

  const BACKGROUND_COLOR = 'background_color';
  const FLOAT_WITH_MARGIN = 'float_with_margin';
  const FONT = 'font';
  const OPTION = 'option';
  const POSITION = 'position';
  const RENDER_WITH_ICON = 'render_with_icon';
  const TEMPLATE = 'template';
  const TEXT_COLOR = 'text_color';

  public function getFieldTypes() {
    return array(
      'background_color' => 'BackgroundColor',
      'float_with_margin' => 'bool',
      'font' => 'Font',
      'option' => 'Option',
      'position' => 'Position',
      'render_with_icon' => 'bool',
      'template' => 'Template',
      'text_color' => 'TextColor',
    );
  }
}
