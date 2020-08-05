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

class AdReportSpecFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACTIONS_GROUP_BY = 'actions_group_by';
  const CREATION_SOURCE = 'creation_source';
  const DATA_COLUMNS = 'data_columns';
  const DATE_PRESET = 'date_preset';
  const EXPORT_COLUMNS = 'export_columns';
  const FILTERS = 'filters';
  const FORMAT_VERSION = 'format_version';
  const ID = 'id';
  const INSIGHTS_SECTION = 'insights_section';
  const NAME = 'name';
  const REPORT_SCHEDULE_ID = 'report_schedule_id';
  const SORT_BY = 'sort_by';
  const SORT_DIR = 'sort_dir';
  const TIME_INCREMENT = 'time_increment';
  const TIME_INTERVAL = 'time_interval';
  const TIME_RANGES = 'time_ranges';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'actions_group_by' => 'list<string>',
      'creation_source' => 'string',
      'data_columns' => 'list<string>',
      'date_preset' => 'string',
      'export_columns' => 'list<string>',
      'filters' => 'list<Object>',
      'format_version' => 'int',
      'id' => 'string',
      'insights_section' => 'Object',
      'name' => 'string',
      'report_schedule_id' => 'string',
      'sort_by' => 'string',
      'sort_dir' => 'string',
      'time_increment' => 'string',
      'time_interval' => 'Object',
      'time_ranges' => 'list<Object>',
    );
  }
}
