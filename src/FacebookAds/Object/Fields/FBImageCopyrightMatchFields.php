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

class FBImageCopyrightMatchFields extends AbstractEnum {

  const ADDED_TO_DASHBOARD_TIME = 'added_to_dashboard_time';
  const APPLIED_ACTIONS = 'applied_actions';
  const AUDIT_LOG = 'audit_log';
  const AVAILABLE_UI_ACTIONS = 'available_ui_actions';
  const EXPIRATION_DAYS = 'expiration_days';
  const GENERIC_MATCH_DATA = 'generic_match_data';
  const ID = 'id';
  const IS_BUSINESS_PAGE_MATCH = 'is_business_page_match';
  const LAST_MODIFIED_TIME = 'last_modified_time';
  const MATCH_DATA = 'match_data';
  const MATCH_STATUS = 'match_status';
  const OWNERSHIP_COUNTRIES = 'ownership_countries';
  const REFERENCE_OWNER = 'reference_owner';
  const TIME_TO_APPEAL = 'time_to_appeal';

  public function getFieldTypes() {
    return array(
      'added_to_dashboard_time' => 'datetime',
      'applied_actions' => 'list<map<string, Object>>',
      'audit_log' => 'list<Object>',
      'available_ui_actions' => 'list<string>',
      'expiration_days' => 'int',
      'generic_match_data' => 'list<Object>',
      'id' => 'string',
      'is_business_page_match' => 'bool',
      'last_modified_time' => 'datetime',
      'match_data' => 'list<Object>',
      'match_status' => 'string',
      'ownership_countries' => 'VideoCopyrightGeoGate',
      'reference_owner' => 'Profile',
      'time_to_appeal' => 'int',
    );
  }
}
