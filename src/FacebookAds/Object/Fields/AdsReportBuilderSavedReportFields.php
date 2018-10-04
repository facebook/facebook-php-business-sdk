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

class AdsReportBuilderSavedReportFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const ATTRIBUTION_WINDOWS = 'attribution_windows';
  const CREATION_SOURCE = 'creation_source';
  const CREATION_TIME = 'creation_time';
  const DATE_INTERVAL = 'date_interval';
  const DATE_PRESET = 'date_preset';
  const DIMENSION_GROUPS = 'dimension_groups';
  const DIMENSIONS = 'dimensions';
  const FILTERING = 'filtering';
  const ID = 'id';
  const IS_MUTATED = 'is_mutated';
  const LAST_ACCESS_TIME = 'last_access_time';
  const LAST_REPORT_SNAPSHOT_ID = 'last_report_snapshot_id';
  const LAST_REPORT_SNAPSHOT_TIME = 'last_report_snapshot_time';
  const LOCKED_DIMENSIONS = 'locked_dimensions';
  const METRICS = 'metrics';
  const OLD_REPORT_SCHEDULE = 'old_report_schedule';
  const REPORT_NAME = 'report_name';
  const REPORT_SNAPSHOT_ASYNC_PERCENT_COMPLETION = 'report_snapshot_async_percent_completion';
  const REPORT_SNAPSHOT_ASYNC_STATUS = 'report_snapshot_async_status';
  const SCHEDULE_FREQUENCY = 'schedule_frequency';
  const SORTING = 'sorting';
  const START_DATE = 'start_date';
  const STATUS = 'status';
  const SUBSCRIBERS = 'subscribers';
  const UPDATE_TIME = 'update_time';
  const USER = 'user';
  const USER_DIMENSIONS = 'user_dimensions';
  const USER_METRICS = 'user_metrics';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'attribution_windows' => 'list<string>',
      'creation_source' => 'string',
      'creation_time' => 'datetime',
      'date_interval' => 'Object',
      'date_preset' => 'string',
      'dimension_groups' => 'list<list<string>>',
      'dimensions' => 'list<string>',
      'filtering' => 'list',
      'id' => 'string',
      'is_mutated' => 'bool',
      'last_access_time' => 'datetime',
      'last_report_snapshot_id' => 'string',
      'last_report_snapshot_time' => 'datetime',
      'locked_dimensions' => 'int',
      'metrics' => 'list<string>',
      'old_report_schedule' => 'Object',
      'report_name' => 'string',
      'report_snapshot_async_percent_completion' => 'int',
      'report_snapshot_async_status' => 'string',
      'schedule_frequency' => 'string',
      'sorting' => 'list<Object>',
      'start_date' => 'string',
      'status' => 'string',
      'subscribers' => 'list<string>',
      'update_time' => 'datetime',
      'user' => 'Profile',
      'user_dimensions' => 'list<string>',
      'user_metrics' => 'list<string>',
    );
  }
}
