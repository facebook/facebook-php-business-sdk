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

class AdsPixelSignalsIWLNuxFields extends AbstractEnum {

  const BACKGROUND_COLOR = 'background_color';
  const CONTENT = 'content';
  const CONTENT_COLOR = 'content_color';
  const CONTENT_SIZE = 'content_size';
  const IMG_URL = 'img_url';

  public function getFieldTypes() {
    return array(
      'background_color' => 'string',
      'content' => 'string',
      'content_color' => 'string',
      'content_size' => 'string',
      'img_url' => 'string',
    );
  }
}
