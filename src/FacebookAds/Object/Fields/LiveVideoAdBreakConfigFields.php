<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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
