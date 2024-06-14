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

class AdAccountCustomAudienceLimitsFields extends AbstractEnum {

  const AUDIENCE_UPDATE_QUOTA_IN_TOTAL = 'audience_update_quota_in_total';
  const AUDIENCE_UPDATE_QUOTA_LEFT = 'audience_update_quota_left';
  const HAS_HIT_AUDIENCE_UPDATE_LIMIT = 'has_hit_audience_update_limit';
  const NEXT_AUDIENCE_UPDATE_AVAILABLE_TIME = 'next_audience_update_available_time';
  const RATE_LIMIT_RESET_TIME = 'rate_limit_reset_time';

  public function getFieldTypes() {
    return array(
      'audience_update_quota_in_total' => 'int',
      'audience_update_quota_left' => 'float',
      'has_hit_audience_update_limit' => 'bool',
      'next_audience_update_available_time' => 'string',
      'rate_limit_reset_time' => 'string',
    );
  }
}
