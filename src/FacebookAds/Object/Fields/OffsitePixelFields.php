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

class OffsitePixelFields extends AbstractEnum {

  const CREATOR = 'creator';
  const ID = 'id';
  const JS_PIXEL = 'js_pixel';
  const LAST_FIRING_TIME = 'last_firing_time';
  const NAME = 'name';
  const TAG = 'tag';

  public function getFieldTypes() {
    return array(
      'creator' => 'string',
      'id' => 'string',
      'js_pixel' => 'string',
      'last_firing_time' => 'datetime',
      'name' => 'string',
      'tag' => 'string',
    );
  }
}
