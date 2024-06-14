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

class PageMessageResponsivenessMetricsFields extends AbstractEnum {

  const IS_VERY_RESPONSIVE = 'is_very_responsive';
  const RESPONSE_RATE = 'response_rate';
  const RESPONSE_TIME = 'response_time';

  public function getFieldTypes() {
    return array(
      'is_very_responsive' => 'bool',
      'response_rate' => 'float',
      'response_time' => 'float',
    );
  }
}
