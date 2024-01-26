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

class ProfilePictureSourceFields extends AbstractEnum {

  const BOTTOM = 'bottom';
  const CACHE_KEY = 'cache_key';
  const HEIGHT = 'height';
  const IS_SILHOUETTE = 'is_silhouette';
  const LEFT = 'left';
  const RIGHT = 'right';
  const TOP = 'top';
  const URL = 'url';
  const WIDTH = 'width';

  public function getFieldTypes() {
    return array(
      'bottom' => 'unsigned int',
      'cache_key' => 'string',
      'height' => 'unsigned int',
      'is_silhouette' => 'bool',
      'left' => 'unsigned int',
      'right' => 'unsigned int',
      'top' => 'unsigned int',
      'url' => 'string',
      'width' => 'unsigned int',
    );
  }
}
