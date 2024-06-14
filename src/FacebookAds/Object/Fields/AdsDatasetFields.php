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

class AdsDatasetFields extends AbstractEnum {

  const CAN_PROXY = 'can_proxy';
  const COLLECTION_RATE = 'collection_rate';
  const CONFIG = 'config';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const DATASET_ID = 'dataset_id';
  const DESCRIPTION = 'description';
  const DUPLICATE_ENTRIES = 'duplicate_entries';
  const ENABLE_AUTO_ASSIGN_TO_ACCOUNTS = 'enable_auto_assign_to_accounts';
  const ENABLE_AUTOMATIC_EVENTS = 'enable_automatic_events';
  const ENABLE_AUTOMATIC_MATCHING = 'enable_automatic_matching';
  const ENABLE_REAL_TIME_EVENT_LOG = 'enable_real_time_event_log';
  const EVENT_STATS = 'event_stats';
  const EVENT_TIME_MAX = 'event_time_max';
  const EVENT_TIME_MIN = 'event_time_min';
  const FIRST_PARTY_COOKIE_STATUS = 'first_party_cookie_status';
  const HAS_BAPI_DOMAINS = 'has_bapi_domains';
  const HAS_CATALOG_MICRODATA_ACTIVITY = 'has_catalog_microdata_activity';
  const HAS_OFA_REDACTED_KEYS = 'has_ofa_redacted_keys';
  const HAS_SENT_PII = 'has_sent_pii';
  const ID = 'id';
  const IS_CONSOLIDATED_CONTAINER = 'is_consolidated_container';
  const IS_CREATED_BY_BUSINESS = 'is_created_by_business';
  const IS_CRM = 'is_crm';
  const IS_ELIGIBLE_FOR_SHARING_TO_AD_ACCOUNT = 'is_eligible_for_sharing_to_ad_account';
  const IS_ELIGIBLE_FOR_SHARING_TO_BUSINESS = 'is_eligible_for_sharing_to_business';
  const IS_ELIGIBLE_FOR_VALUE_OPTIMIZATION = 'is_eligible_for_value_optimization';
  const IS_MTA_USE = 'is_mta_use';
  const IS_RESTRICTED_USE = 'is_restricted_use';
  const IS_UNAVAILABLE = 'is_unavailable';
  const LAST_FIRED_TIME = 'last_fired_time';
  const LAST_UPLOAD_APP = 'last_upload_app';
  const LAST_UPLOAD_APP_CHANGED_TIME = 'last_upload_app_changed_time';
  const LAST_UPLOAD_TIME = 'last_upload_time';
  const LATE_UPLOAD_REMINDER_ELIGIBILITY = 'late_upload_reminder_eligibility';
  const MATCH_RATE_APPROX = 'match_rate_approx';
  const MATCHED_ENTRIES = 'matched_entries';
  const NAME = 'name';
  const NO_ADS_TRACKED_FOR_WEEKLY_UPLOADED_EVENTS_REMINDER_ELIGIBILITY = 'no_ads_tracked_for_weekly_uploaded_events_reminder_eligibility';
  const NUM_ACTIVE_AD_SET_TRACKED = 'num_active_ad_set_tracked';
  const NUM_RECENT_OFFLINE_CONVERSIONS_UPLOADED = 'num_recent_offline_conversions_uploaded';
  const NUM_UPLOADS = 'num_uploads';
  const OWNER_AD_ACCOUNT = 'owner_ad_account';
  const OWNER_BUSINESS = 'owner_business';
  const PERCENTAGE_OF_LATE_UPLOADS_IN_EXTERNAL_SUBOPTIMAL_WINDOW = 'percentage_of_late_uploads_in_external_suboptimal_window';
  const PERMISSIONS = 'permissions';
  const SERVER_LAST_FIRED_TIME = 'server_last_fired_time';
  const SHOW_AUTOMATIC_EVENTS = 'show_automatic_events';
  const UPLOAD_RATE = 'upload_rate';
  const UPLOAD_REMINDER_ELIGIBILITY = 'upload_reminder_eligibility';
  const USAGE = 'usage';
  const VALID_ENTRIES = 'valid_entries';

  public function getFieldTypes() {
    return array(
      'can_proxy' => 'bool',
      'collection_rate' => 'float',
      'config' => 'string',
      'creation_time' => 'datetime',
      'creator' => 'User',
      'dataset_id' => 'string',
      'description' => 'string',
      'duplicate_entries' => 'int',
      'enable_auto_assign_to_accounts' => 'bool',
      'enable_automatic_events' => 'bool',
      'enable_automatic_matching' => 'bool',
      'enable_real_time_event_log' => 'bool',
      'event_stats' => 'string',
      'event_time_max' => 'int',
      'event_time_min' => 'int',
      'first_party_cookie_status' => 'string',
      'has_bapi_domains' => 'bool',
      'has_catalog_microdata_activity' => 'bool',
      'has_ofa_redacted_keys' => 'bool',
      'has_sent_pii' => 'bool',
      'id' => 'string',
      'is_consolidated_container' => 'bool',
      'is_created_by_business' => 'bool',
      'is_crm' => 'bool',
      'is_eligible_for_sharing_to_ad_account' => 'bool',
      'is_eligible_for_sharing_to_business' => 'bool',
      'is_eligible_for_value_optimization' => 'bool',
      'is_mta_use' => 'bool',
      'is_restricted_use' => 'bool',
      'is_unavailable' => 'bool',
      'last_fired_time' => 'datetime',
      'last_upload_app' => 'string',
      'last_upload_app_changed_time' => 'int',
      'last_upload_time' => 'int',
      'late_upload_reminder_eligibility' => 'bool',
      'match_rate_approx' => 'int',
      'matched_entries' => 'int',
      'name' => 'string',
      'no_ads_tracked_for_weekly_uploaded_events_reminder_eligibility' => 'bool',
      'num_active_ad_set_tracked' => 'int',
      'num_recent_offline_conversions_uploaded' => 'int',
      'num_uploads' => 'int',
      'owner_ad_account' => 'AdAccount',
      'owner_business' => 'Business',
      'percentage_of_late_uploads_in_external_suboptimal_window' => 'int',
      'permissions' => 'OfflineConversionDataSetPermissions',
      'server_last_fired_time' => 'datetime',
      'show_automatic_events' => 'bool',
      'upload_rate' => 'float',
      'upload_reminder_eligibility' => 'bool',
      'usage' => 'OfflineConversionDataSetUsage',
      'valid_entries' => 'int',
    );
  }
}
