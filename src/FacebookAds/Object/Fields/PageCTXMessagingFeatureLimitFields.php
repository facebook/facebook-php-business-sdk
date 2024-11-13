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

class PageCTXMessagingFeatureLimitFields extends AbstractEnum {

  const MESSAGING_FEATURE_LIMIT_DURATION = 'messaging_feature_limit_duration';
  const MESSAGING_FEATURE_LIMIT_TYPE = 'messaging_feature_limit_type';
  const MESSAGING_VIOLATION_TYPE = 'messaging_violation_type';

  public function getFieldTypes() {
    return array(
      'messaging_feature_limit_duration' => 'int',
      'messaging_feature_limit_type' => 'string',
      'messaging_violation_type' => 'string',
    );
  }
}
