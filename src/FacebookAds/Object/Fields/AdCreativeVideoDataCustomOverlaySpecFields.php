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

class AdCreativeVideoDataCustomOverlaySpecFields extends AbstractEnum {

  const BACKGROUND_COLOR = 'background_color';
  const BACKGROUND_OPACITY = 'background_opacity';
  const DURATION = 'duration';
  const FLOAT_WITH_MARGIN = 'float_with_margin';
  const FULL_WIDTH = 'full_width';
  const OPTION = 'option';
  const POSITION = 'position';
  const START = 'start';
  const TEMPLATE = 'template';
  const TEXT_COLOR = 'text_color';

  public function getFieldTypes() {
    return array(
      'background_color' => 'string',
      'background_opacity' => 'BackgroundOpacity',
      'duration' => 'int',
      'float_with_margin' => 'bool',
      'full_width' => 'bool',
      'option' => 'Option',
      'position' => 'Position',
      'start' => 'int',
      'template' => 'Template',
      'text_color' => 'string',
    );
  }
}
