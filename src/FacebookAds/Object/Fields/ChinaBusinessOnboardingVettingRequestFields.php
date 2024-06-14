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

class ChinaBusinessOnboardingVettingRequestFields extends AbstractEnum {

  const AD_ACCOUNT_CREATION_REQUEST_STATUS = 'ad_account_creation_request_status';
  const AD_ACCOUNT_LIMIT = 'ad_account_limit';
  const AD_ACCOUNT_NUMBER = 'ad_account_number';
  const AD_ACCOUNTS_INFO = 'ad_accounts_info';
  const BUSINESS_MANAGER_ID = 'business_manager_id';
  const BUSINESS_REGISTRATION = 'business_registration';
  const BUSINESS_REGISTRATION_ID = 'business_registration_id';
  const CHINESE_ADDRESS = 'chinese_address';
  const CHINESE_LEGAL_ENTITY_NAME = 'chinese_legal_entity_name';
  const CITY = 'city';
  const CONTACT = 'contact';
  const COUPON_CODE = 'coupon_code';
  const DISAPPROVE_REASON = 'disapprove_reason';
  const ENGLISH_BUSINESS_NAME = 'english_business_name';
  const ID = 'id';
  const OFFICIAL_WEBSITE_URL = 'official_website_url';
  const ORG_AD_ACCOUNT_COUNT = 'org_ad_account_count';
  const PAYMENT_TYPE = 'payment_type';
  const PLANNING_AGENCY_ID = 'planning_agency_id';
  const PLANNING_AGENCY_NAME = 'planning_agency_name';
  const PROMOTABLE_APP_IDS = 'promotable_app_ids';
  const PROMOTABLE_PAGE_IDS = 'promotable_page_ids';
  const PROMOTABLE_PAGES = 'promotable_pages';
  const PROMOTABLE_URLS = 'promotable_urls';
  const REQUEST_CHANGES_REASON = 'request_changes_reason';
  const REVIEWED_USER = 'reviewed_user';
  const SPEND_LIMIT = 'spend_limit';
  const STATUS = 'status';
  const SUBVERTICAL = 'subvertical';
  const SUBVERTICAL_V2 = 'subvertical_v2';
  const SUPPORTING_DOCUMENT = 'supporting_document';
  const TIME_CHANGES_REQUESTED = 'time_changes_requested';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';
  const TIME_ZONE = 'time_zone';
  const USED_RESELLER_LINK = 'used_reseller_link';
  const USER_ID = 'user_id';
  const USER_NAME = 'user_name';
  const VERTICAL = 'vertical';
  const VERTICAL_V2 = 'vertical_v2';
  const VIEWED_BY_RESELLER = 'viewed_by_reseller';
  const ZIP_CODE = 'zip_code';

  public function getFieldTypes() {
    return array(
      'ad_account_creation_request_status' => 'string',
      'ad_account_limit' => 'int',
      'ad_account_number' => 'string',
      'ad_accounts_info' => 'list<Object>',
      'business_manager_id' => 'string',
      'business_registration' => 'string',
      'business_registration_id' => 'string',
      'chinese_address' => 'string',
      'chinese_legal_entity_name' => 'string',
      'city' => 'string',
      'contact' => 'string',
      'coupon_code' => 'string',
      'disapprove_reason' => 'string',
      'english_business_name' => 'string',
      'id' => 'string',
      'official_website_url' => 'string',
      'org_ad_account_count' => 'int',
      'payment_type' => 'string',
      'planning_agency_id' => 'string',
      'planning_agency_name' => 'string',
      'promotable_app_ids' => 'list<string>',
      'promotable_page_ids' => 'list<string>',
      'promotable_pages' => 'list<Object>',
      'promotable_urls' => 'list<string>',
      'request_changes_reason' => 'string',
      'reviewed_user' => 'string',
      'spend_limit' => 'int',
      'status' => 'string',
      'subvertical' => 'string',
      'subvertical_v2' => 'string',
      'supporting_document' => 'string',
      'time_changes_requested' => 'datetime',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
      'time_zone' => 'string',
      'used_reseller_link' => 'bool',
      'user_id' => 'string',
      'user_name' => 'string',
      'vertical' => 'string',
      'vertical_v2' => 'string',
      'viewed_by_reseller' => 'bool',
      'zip_code' => 'string',
    );
  }
}
