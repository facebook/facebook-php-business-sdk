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

class AdsQuickViewsFields extends AbstractEnum {

  const ATTRIBUTION_WINDOWS = 'attribution_windows';
  const BREAKDOWNS = 'breakdowns';
  const COLUMN_FIELDS = 'column_fields';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const IS_ATTRIBUTION_WINDOWS_DISABLED = 'is_attribution_windows_disabled';
  const IS_BREAKDOWNS_DISABLED = 'is_breakdowns_disabled';
  const IS_COLUMNS_AND_SORT_DISABLED = 'is_columns_and_sort_disabled';
  const IS_FILTERS_DISABLED = 'is_filters_disabled';
  const NAME = 'name';
  const OWNER = 'owner';
  const PERMISSION = 'permission';
  const QUICK_VIEW_TYPE = 'quick_view_type';
  const SORT = 'sort';
  const TIME_STAMP_LAST_USED_BY_OWNER = 'time_stamp_last_used_by_owner';

  public function getFieldTypes() {
    return array(
      'attribution_windows' => 'list<string>',
      'breakdowns' => 'list<string>',
      'column_fields' => 'list<string>',
      'description' => 'string',
      'id' => 'string',
      'is_attribution_windows_disabled' => 'bool',
      'is_breakdowns_disabled' => 'bool',
      'is_columns_and_sort_disabled' => 'bool',
      'is_filters_disabled' => 'bool',
      'name' => 'string',
      'owner' => 'Profile',
      'permission' => 'string',
      'quick_view_type' => 'string',
      'sort' => 'list<Object>',
      'time_stamp_last_used_by_owner' => 'datetime',
    );
  }
}
