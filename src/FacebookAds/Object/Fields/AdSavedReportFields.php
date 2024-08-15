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
