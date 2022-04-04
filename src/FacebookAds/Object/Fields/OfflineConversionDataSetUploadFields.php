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

class OfflineConversionDataSetUploadFields extends AbstractEnum {

  const API_CALLS = 'api_calls';
  const CREATION_TIME = 'creation_time';
  const DUPLICATE_ENTRIES = 'duplicate_entries';
  const EVENT_STATS = 'event_stats';
  const EVENT_TIME_MAX = 'event_time_max';
  const EVENT_TIME_MIN = 'event_time_min';
  const FIRST_UPLOAD_TIME = 'first_upload_time';
  const ID = 'id';
  const IS_EXCLUDED_FOR_LIFT = 'is_excluded_for_lift';
  const LAST_UPLOAD_TIME = 'last_upload_time';
  const MATCH_RATE_APPROX = 'match_rate_approx';
  const MATCHED_ENTRIES = 'matched_entries';
  const UPLOAD_TAG = 'upload_tag';
  const VALID_ENTRIES = 'valid_entries';

  public function getFieldTypes() {
    return array(
      'api_calls' => 'int',
      'creation_time' => 'int',
      'duplicate_entries' => 'int',
      'event_stats' => 'string',
      'event_time_max' => 'int',
      'event_time_min' => 'int',
      'first_upload_time' => 'int',
      'id' => 'string',
      'is_excluded_for_lift' => 'bool',
      'last_upload_time' => 'int',
      'match_rate_approx' => 'int',
      'matched_entries' => 'int',
      'upload_tag' => 'string',
      'valid_entries' => 'int',
    );
  }
}
