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

class LiveVideoAdBreakConfigFields extends AbstractEnum {

  const DEFAULT_AD_BREAK_DURATION = 'default_ad_break_duration';
  const FAILURE_REASON_POLLING_INTERVAL = 'failure_reason_polling_interval';
  const FIRST_BREAK_ELIGIBLE_SECS = 'first_break_eligible_secs';
  const GUIDE_URL = 'guide_url';
  const IS_ELIGIBLE_TO_ONBOARD = 'is_eligible_to_onboard';
  const IS_ENABLED = 'is_enabled';
  const ONBOARDING_URL = 'onboarding_url';
  const PREPARING_DURATION = 'preparing_duration';
  const TIME_BETWEEN_AD_BREAKS_SECS = 'time_between_ad_breaks_secs';
  const VIEWER_COUNT_THRESHOLD = 'viewer_count_threshold';

  public function getFieldTypes() {
    return array(
      'default_ad_break_duration' => 'unsigned int',
      'failure_reason_polling_interval' => 'unsigned int',
      'first_break_eligible_secs' => 'unsigned int',
      'guide_url' => 'string',
      'is_eligible_to_onboard' => 'bool',
      'is_enabled' => 'bool',
      'onboarding_url' => 'string',
      'preparing_duration' => 'unsigned int',
      'time_between_ad_breaks_secs' => 'unsigned int',
      'viewer_count_threshold' => 'unsigned int',
    );
  }
}
