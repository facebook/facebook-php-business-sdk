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

class OfflineConversionDataSetFields extends AbstractEnum {

  const BUSINESS = 'business';
  const CONFIG = 'config';
  const CREATION_TIME = 'creation_time';
  const DESCRIPTION = 'description';
  const DUPLICATE_ENTRIES = 'duplicate_entries';
  const ENABLE_AUTO_ASSIGN_TO_ACCOUNTS = 'enable_auto_assign_to_accounts';
  const EVENT_STATS = 'event_stats';
  const EVENT_TIME_MAX = 'event_time_max';
  const EVENT_TIME_MIN = 'event_time_min';
  const ID = 'id';
  const IS_MTA_USE = 'is_mta_use';
  const IS_RESTRICTED_USE = 'is_restricted_use';
  const IS_UNAVAILABLE = 'is_unavailable';
  const LAST_UPLOAD_APP = 'last_upload_app';
  const LAST_UPLOAD_APP_CHANGED_TIME = 'last_upload_app_changed_time';
  const MATCH_RATE_APPROX = 'match_rate_approx';
  const MATCHED_ENTRIES = 'matched_entries';
  const NAME = 'name';
  const USAGE = 'usage';
  const VALID_ENTRIES = 'valid_entries';
  const AUTO_ASSIGN_TO_NEW_ACCOUNTS_ONLY = 'auto_assign_to_new_accounts_only';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'config' => 'string',
      'creation_time' => 'datetime',
      'description' => 'string',
      'duplicate_entries' => 'int',
      'enable_auto_assign_to_accounts' => 'bool',
      'event_stats' => 'string',
      'event_time_max' => 'int',
      'event_time_min' => 'int',
      'id' => 'string',
      'is_mta_use' => 'bool',
      'is_restricted_use' => 'bool',
      'is_unavailable' => 'bool',
      'last_upload_app' => 'string',
      'last_upload_app_changed_time' => 'int',
      'match_rate_approx' => 'int',
      'matched_entries' => 'int',
      'name' => 'string',
      'usage' => 'Object',
      'valid_entries' => 'int',
      'auto_assign_to_new_accounts_only' => 'bool',
    );
  }
}
