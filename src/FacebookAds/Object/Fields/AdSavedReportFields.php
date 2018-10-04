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

class AdSavedReportFields extends AbstractEnum {

  const APP_OWNER = 'app_owner';
  const BREAKDOWNS = 'breakdowns';
  const BUILTIN_COLUMN_SET = 'builtin_column_set';
  const CREATION_SOURCE = 'creation_source';
  const DATE_INTERVAL = 'date_interval';
  const DATE_PRESET = 'date_preset';
  const FORMAT_VERSION = 'format_version';
  const ID = 'id';
  const INSIGHTS_SECTION = 'insights_section';
  const IS_SHARED_UNREAD = 'is_shared_unread';
  const LEVEL = 'level';
  const NAME = 'name';
  const NORMALIZED_FILTER = 'normalized_filter';
  const SORT = 'sort';
  const USER_ATTRIBUTION_WINDOWS = 'user_attribution_windows';
  const USER_COLUMNS = 'user_columns';
  const USER_FILTER = 'user_filter';
  const USER_OWNER = 'user_owner';

  public function getFieldTypes() {
    return array(
      'app_owner' => 'Application',
      'breakdowns' => 'list<string>',
      'builtin_column_set' => 'string',
      'creation_source' => 'string',
      'date_interval' => 'Object',
      'date_preset' => 'string',
      'format_version' => 'int',
      'id' => 'string',
      'insights_section' => 'Object',
      'is_shared_unread' => 'bool',
      'level' => 'string',
      'name' => 'string',
      'normalized_filter' => 'list',
      'sort' => 'list<Object>',
      'user_attribution_windows' => 'list<string>',
      'user_columns' => 'list<string>',
      'user_filter' => 'list',
      'user_owner' => 'User',
    );
  }
}
