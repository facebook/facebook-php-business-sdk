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

class AdsPixelFields extends AbstractEnum {

  const AUTOMATIC_MATCHING_FIELDS = 'automatic_matching_fields';
  const CAN_PROXY = 'can_proxy';
  const CODE = 'code';
  const CONFIG = 'config';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const DATA_USE_SETTING = 'data_use_setting';
  const DESCRIPTION = 'description';
  const DUPLICATE_ENTRIES = 'duplicate_entries';
  const ENABLE_AUTO_ASSIGN_TO_ACCOUNTS = 'enable_auto_assign_to_accounts';
  const ENABLE_AUTOMATIC_MATCHING = 'enable_automatic_matching';
  const EVENT_STATS = 'event_stats';
  const EVENT_TIME_MAX = 'event_time_max';
  const EVENT_TIME_MIN = 'event_time_min';
  const FIRST_PARTY_COOKIE_STATUS = 'first_party_cookie_status';
  const ID = 'id';
  const IS_CONSOLIDATED_CONTAINER = 'is_consolidated_container';
  const IS_CREATED_BY_BUSINESS = 'is_created_by_business';
  const IS_CRM = 'is_crm';
  const IS_MTA_USE = 'is_mta_use';
  const IS_RESTRICTED_USE = 'is_restricted_use';
  const IS_UNAVAILABLE = 'is_unavailable';
  const LAST_FIRED_TIME = 'last_fired_time';
  const LAST_UPLOAD_APP = 'last_upload_app';
  const LAST_UPLOAD_APP_CHANGED_TIME = 'last_upload_app_changed_time';
  const MATCH_RATE_APPROX = 'match_rate_approx';
  const MATCHED_ENTRIES = 'matched_entries';
  const NAME = 'name';
  const OWNER_AD_ACCOUNT = 'owner_ad_account';
  const OWNER_BUSINESS = 'owner_business';
  const USAGE = 'usage';
  const USER_ACCESS_EXPIRE_TIME = 'user_access_expire_time';
  const VALID_ENTRIES = 'valid_entries';

  public function getFieldTypes() {
    return array(
      'automatic_matching_fields' => 'list<string>',
      'can_proxy' => 'bool',
      'code' => 'string',
      'config' => 'string',
      'creation_time' => 'datetime',
      'creator' => 'User',
      'data_use_setting' => 'string',
      'description' => 'string',
      'duplicate_entries' => 'int',
      'enable_auto_assign_to_accounts' => 'bool',
      'enable_automatic_matching' => 'bool',
      'event_stats' => 'string',
      'event_time_max' => 'int',
      'event_time_min' => 'int',
      'first_party_cookie_status' => 'string',
      'id' => 'string',
      'is_consolidated_container' => 'bool',
      'is_created_by_business' => 'bool',
      'is_crm' => 'bool',
      'is_mta_use' => 'bool',
      'is_restricted_use' => 'bool',
      'is_unavailable' => 'bool',
      'last_fired_time' => 'datetime',
      'last_upload_app' => 'string',
      'last_upload_app_changed_time' => 'int',
      'match_rate_approx' => 'int',
      'matched_entries' => 'int',
      'name' => 'string',
      'owner_ad_account' => 'AdAccount',
      'owner_business' => 'Business',
      'usage' => 'OfflineConversionDataSetUsage',
      'user_access_expire_time' => 'datetime',
      'valid_entries' => 'int',
    );
  }
}
