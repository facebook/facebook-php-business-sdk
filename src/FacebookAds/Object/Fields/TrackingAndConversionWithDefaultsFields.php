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

class TrackingAndConversionWithDefaultsFields extends AbstractEnum {

  const CUSTOM_CONVERSION = 'custom_conversion';
  const CUSTOM_TRACKING = 'custom_tracking';
  const DEFAULT_CONVERSION = 'default_conversion';
  const DEFAULT_TRACKING = 'default_tracking';

  public function getFieldTypes() {
    return array(
      'custom_conversion' => 'list<Object>',
      'custom_tracking' => 'list<Object>',
      'default_conversion' => 'list<Object>',
      'default_tracking' => 'list<Object>',
    );
  }
}
