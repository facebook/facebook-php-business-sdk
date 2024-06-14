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

class AnalyticsConfigFields extends AbstractEnum {

  const ANALYTICS_ACCESS_FOR_AUTHORIZED_AD_ACCOUNT = 'analytics_access_for_authorized_ad_account';
  const BREAKDOWNS_CONFIG = 'breakdowns_config';
  const BUILTIN_FIELDS_CONFIG = 'builtin_fields_config';
  const DEPRECATED_EVENTS_CONFIG = 'deprecated_events_config';
  const EVENTS_CONFIG = 'events_config';
  const IOS_PURCHASE_VALIDATION_SECRET = 'ios_purchase_validation_secret';
  const IS_ANY_ROLE_ABLE_TO_SEE_RESTRICTED_INSIGHTS = 'is_any_role_able_to_see_restricted_insights';
  const IS_IMPLICIT_PURCHASE_LOGGING_ON_ANDROID_SUPPORTED = 'is_implicit_purchase_logging_on_android_supported';
  const IS_IMPLICIT_PURCHASE_LOGGING_ON_IOS_SUPPORTED = 'is_implicit_purchase_logging_on_ios_supported';
  const IS_TRACK_IOS_APP_UNINSTALL_SUPPORTED = 'is_track_ios_app_uninstall_supported';
  const JOURNEY_BACKFILL_STATUS = 'journey_backfill_status';
  const JOURNEY_CONVERSION_EVENTS = 'journey_conversion_events';
  const JOURNEY_ENABLED = 'journey_enabled';
  const JOURNEY_IMPACTING_CHANGE_TIME = 'journey_impacting_change_time';
  const JOURNEY_TIMEOUT = 'journey_timeout';
  const LATEST_SDK_VERSIONS = 'latest_sdk_versions';
  const LOG_ANDROID_IMPLICIT_PURCHASE_EVENTS = 'log_android_implicit_purchase_events';
  const LOG_AUTOMATIC_ANALYTICS_EVENTS = 'log_automatic_analytics_events';
  const LOG_IMPLICIT_PURCHASE_EVENTS = 'log_implicit_purchase_events';
  const PREV_JOURNEY_CONVERSION_EVENTS = 'prev_journey_conversion_events';
  const QUERY_APPROXIMATION_ACCURACY_LEVEL = 'query_approximation_accuracy_level';
  const QUERY_CURRENCY = 'query_currency';
  const QUERY_TIMEZONE = 'query_timezone';
  const RECENT_EVENTS_UPDATE_TIME = 'recent_events_update_time';
  const SESSION_TIMEOUT_INTERVAL = 'session_timeout_interval';
  const TRACK_IOS_APP_UNINSTALL = 'track_ios_app_uninstall';

  public function getFieldTypes() {
    return array(
      'analytics_access_for_authorized_ad_account' => 'bool',
      'breakdowns_config' => 'list<Object>',
      'builtin_fields_config' => 'list<Object>',
      'deprecated_events_config' => 'list<Object>',
      'events_config' => 'list<Object>',
      'ios_purchase_validation_secret' => 'string',
      'is_any_role_able_to_see_restricted_insights' => 'bool',
      'is_implicit_purchase_logging_on_android_supported' => 'bool',
      'is_implicit_purchase_logging_on_ios_supported' => 'bool',
      'is_track_ios_app_uninstall_supported' => 'bool',
      'journey_backfill_status' => 'string',
      'journey_conversion_events' => 'list<string>',
      'journey_enabled' => 'bool',
      'journey_impacting_change_time' => 'datetime',
      'journey_timeout' => 'string',
      'latest_sdk_versions' => 'map<string, string>',
      'log_android_implicit_purchase_events' => 'bool',
      'log_automatic_analytics_events' => 'bool',
      'log_implicit_purchase_events' => 'bool',
      'prev_journey_conversion_events' => 'list<string>',
      'query_approximation_accuracy_level' => 'string',
      'query_currency' => 'string',
      'query_timezone' => 'string',
      'recent_events_update_time' => 'datetime',
      'session_timeout_interval' => 'unsigned int',
      'track_ios_app_uninstall' => 'bool',
    );
  }
}
