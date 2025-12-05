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

namespace FacebookAds\Object\ServerSide;

use FacebookAds\Enum\AbstractEnum;

/**
 * Class DeclineReason
 * @package FacebookAds\Object\ServerSide
 */
class DeclineReason extends AbstractEnum {

  const ATTRIBUTE_TO_OTHER_SOURCE = 'attribute_to_other_source';
  const OUT_OF_LOOKBACK_WINDOW = 'out_of_lookback_window';
  const VIEW_THROUGH_DISABLED = 'view_through_disabled';
  const WITHIN_INACTIVE_WINDOW = 'within_inactive_window';
  const INACTIVE = 'inactive';
  const FRAUD_DETECTED = 'fraud_detected';
  const UNKNOWN = 'unknown';
  const REINSTALL_ATTRIBUTION_DISABLED = 'reinstall_attribution_disabled';
  const LOOKBACK = 'lookback';
  const NOT_PMOD_MATCH = 'not_pmod_match';
  const VALIDATION_RULE_DETECTED = 'validation_rule_detected';
  const PRELOAD_INSTALL = 'preload_install';
  const MIN_TIME_BETWEEN_RE_ENGAGEMENTS = 'min_time_between_re_engagements';
  const DUPLICATED = 'duplicated';
  const PMOD_DISABLED = 'pmod_disabled';

  public function getFieldTypes() {
    return array(
      'ATTRIBUTE_TO_OTHER_SOURCE' => 'string',
      'OUT_OF_LOOKBACK_WINDOW' => 'string',
      'VIEW_THROUGH_DISABLED' => 'string',
      'WITHIN_INACTIVE_WINDOW' => 'string',
      'INACTIVE' => 'string',
      'FRAUD_DETECTED' => 'string',
      'UNKNOWN' => 'string',
      'REINSTALL_ATTRIBUTION_DISABLED' => 'string',
      'LOOKBACK' => 'string',
      'NOT_PMOD_MATCH' => 'string',
      'VALIDATION_RULE_DETECTED' => 'string',
      'PRELOAD_INSTALL' => 'string',
      'MIN_TIME_BETWEEN_RE_ENGAGEMENTS' => 'string',
      'DUPLICATED' => 'string',
      'PMOD_DISABLED' => 'string',
    );
  }
}
