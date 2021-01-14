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

class AdReportRunFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ASYNC_PERCENT_COMPLETION = 'async_percent_completion';
  const ASYNC_STATUS = 'async_status';
  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const EMAILS = 'emails';
  const FRIENDLY_NAME = 'friendly_name';
  const ID = 'id';
  const IS_BOOKMARKED = 'is_bookmarked';
  const IS_RUNNING = 'is_running';
  const SCHEDULE_ID = 'schedule_id';
  const TIME_COMPLETED = 'time_completed';
  const TIME_REF = 'time_ref';
  const ACTION_ATTRIBUTION_WINDOWS = 'action_attribution_windows';
  const ACTION_BREAKDOWNS = 'action_breakdowns';
  const ACTION_REPORT_TIME = 'action_report_time';
  const BREAKDOWNS = 'breakdowns';
  const DATE_PRESET = 'date_preset';
  const DEFAULT_SUMMARY = 'default_summary';
  const EXPORT_COLUMNS = 'export_columns';
  const EXPORT_FORMAT = 'export_format';
  const EXPORT_NAME = 'export_name';
  const FIELDS = 'fields';
  const FILTERING = 'filtering';
  const LEVEL = 'level';
  const PRODUCT_ID_LIMIT = 'product_id_limit';
  const SORT = 'sort';
  const SUMMARY = 'summary';
  const SUMMARY_ACTION_BREAKDOWNS = 'summary_action_breakdowns';
  const TIME_INCREMENT = 'time_increment';
  const TIME_RANGE = 'time_range';
  const TIME_RANGES = 'time_ranges';
  const USE_ACCOUNT_ATTRIBUTION_SETTING = 'use_account_attribution_setting';
  const USE_UNIFIED_ATTRIBUTION_SETTING = 'use_unified_attribution_setting';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'async_percent_completion' => 'unsigned int',
      'async_status' => 'string',
      'date_start' => 'string',
      'date_stop' => 'string',
      'emails' => 'list<string>',
      'friendly_name' => 'string',
      'id' => 'string',
      'is_bookmarked' => 'bool',
      'is_running' => 'bool',
      'schedule_id' => 'string',
      'time_completed' => 'unsigned int',
      'time_ref' => 'unsigned int',
      'action_attribution_windows' => 'list<ActionAttributionWindows>',
      'action_breakdowns' => 'list<ActionBreakdowns>',
      'action_report_time' => 'ActionReportTime',
      'breakdowns' => 'list<Breakdowns>',
      'date_preset' => 'DatePreset',
      'default_summary' => 'bool',
      'export_columns' => 'list<string>',
      'export_format' => 'string',
      'export_name' => 'string',
      'fields' => 'list<string>',
      'filtering' => 'list<Object>',
      'level' => 'Level',
      'product_id_limit' => 'int',
      'sort' => 'list<string>',
      'summary' => 'list<string>',
      'summary_action_breakdowns' => 'list<SummaryActionBreakdowns>',
      'time_increment' => 'string',
      'time_range' => 'Object',
      'time_ranges' => 'list<Object>',
      'use_account_attribution_setting' => 'bool',
      'use_unified_attribution_setting' => 'bool',
    );
  }
}
