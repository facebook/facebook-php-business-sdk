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

class AdsReportBuilderSavedReportFields extends AbstractEnum {

  const ACTION_REPORT_TIME = 'action_report_time';
  const AD_ACCOUNT_ID = 'ad_account_id';
  const ATTRIBUTION_WINDOWS = 'attribution_windows';
  const COMPARISON_DATE_INTERVAL = 'comparison_date_interval';
  const CREATION_SOURCE = 'creation_source';
  const CREATION_TIME = 'creation_time';
  const CURRENCY = 'currency';
  const DATE_INTERVAL = 'date_interval';
  const DATE_PRESET = 'date_preset';
  const DEFAULT_ATTRIBUTION_WINDOWS = 'default_attribution_windows';
  const DIMENSION_GROUPS = 'dimension_groups';
  const DIMENSIONS = 'dimensions';
  const FILTERING = 'filtering';
  const FORMATTING = 'formatting';
  const ID = 'id';
  const LAST_ACCESS_BY = 'last_access_by';
  const LAST_ACCESS_TIME = 'last_access_time';
  const LAST_REPORT_SNAPSHOT_ID = 'last_report_snapshot_id';
  const LAST_REPORT_SNAPSHOT_TIME = 'last_report_snapshot_time';
  const LAST_SHARED_REPORT_EXPIRATION = 'last_shared_report_expiration';
  const LIMIT = 'limit';
  const LOCKED_DIMENSIONS = 'locked_dimensions';
  const METRICS = 'metrics';
  const REPORT_NAME = 'report_name';
  const REPORT_SNAPSHOT_ASYNC_PERCENT_COMPLETION = 'report_snapshot_async_percent_completion';
  const REPORT_SNAPSHOT_ASYNC_STATUS = 'report_snapshot_async_status';
  const SCHEDULE_FREQUENCY = 'schedule_frequency';
  const SCOPE = 'scope';
  const SHOW_DEPRECATE_AW_BANNER = 'show_deprecate_aw_banner';
  const SORTING = 'sorting';
  const START_DATE = 'start_date';
  const STATUS = 'status';
  const SUBSCRIBERS = 'subscribers';
  const UPDATE_BY = 'update_by';
  const UPDATE_TIME = 'update_time';
  const USER = 'user';
  const USER_DIMENSIONS = 'user_dimensions';
  const USER_METRICS = 'user_metrics';
  const VIEW_TYPE = 'view_type';

  public function getFieldTypes() {
    return array(
      'action_report_time' => 'string',
      'ad_account_id' => 'string',
      'attribution_windows' => 'list<string>',
      'comparison_date_interval' => 'Object',
      'creation_source' => 'string',
      'creation_time' => 'datetime',
      'currency' => 'string',
      'date_interval' => 'Object',
      'date_preset' => 'string',
      'default_attribution_windows' => 'list<string>',
      'dimension_groups' => 'list<list<string>>',
      'dimensions' => 'list<string>',
      'filtering' => 'list',
      'formatting' => 'list<map<string, list<Object>>>',
      'id' => 'string',
      'last_access_by' => 'Profile',
      'last_access_time' => 'datetime',
      'last_report_snapshot_id' => 'string',
      'last_report_snapshot_time' => 'datetime',
      'last_shared_report_expiration' => 'datetime',
      'limit' => 'int',
      'locked_dimensions' => 'int',
      'metrics' => 'list<string>',
      'report_name' => 'string',
      'report_snapshot_async_percent_completion' => 'int',
      'report_snapshot_async_status' => 'string',
      'schedule_frequency' => 'string',
      'scope' => 'string',
      'show_deprecate_aw_banner' => 'bool',
      'sorting' => 'list<Object>',
      'start_date' => 'string',
      'status' => 'string',
      'subscribers' => 'list<string>',
      'update_by' => 'Profile',
      'update_time' => 'datetime',
      'user' => 'Profile',
      'user_dimensions' => 'list<string>',
      'user_metrics' => 'list<string>',
      'view_type' => 'string',
    );
  }
}
