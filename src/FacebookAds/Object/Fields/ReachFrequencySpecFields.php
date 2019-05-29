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

class ReachFrequencySpecFields extends AbstractEnum {

  const COUNTRIES = 'countries';
  const DEFAULT_CREATION_DATA = 'default_creation_data';
  const GLOBAL_IO_MAX_CAMPAIGN_DURATION = 'global_io_max_campaign_duration';
  const MAX_CAMPAIGN_DURATION = 'max_campaign_duration';
  const MAX_DAYS_TO_FINISH = 'max_days_to_finish';
  const MAX_PAUSE_WITHOUT_PREDICTION_RERUN = 'max_pause_without_prediction_rerun';
  const MIN_CAMPAIGN_DURATION = 'min_campaign_duration';
  const MIN_REACH_LIMITS = 'min_reach_limits';

  public function getFieldTypes() {
    return array(
      'countries' => 'list<string>',
      'default_creation_data' => 'Object',
      'global_io_max_campaign_duration' => 'unsigned int',
      'max_campaign_duration' => 'Object',
      'max_days_to_finish' => 'Object',
      'max_pause_without_prediction_rerun' => 'Object',
      'min_campaign_duration' => 'Object',
      'min_reach_limits' => 'Object',
    );
  }
}
