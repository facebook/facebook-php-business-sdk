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

class AdAccountCreationRequestFields extends AbstractEnum {

  const AD_ACCOUNTS_CURRENCY = 'ad_accounts_currency';
  const AD_ACCOUNTS_INFO = 'ad_accounts_info';
  const ADDITIONAL_COMMENT = 'additional_comment';
  const ADDRESS_IN_CHINESE = 'address_in_chinese';
  const ADDRESS_IN_ENGLISH = 'address_in_english';
  const ADDRESS_IN_LOCAL_LANGUAGE = 'address_in_local_language';
  const ADVERTISER_BUSINESS = 'advertiser_business';
  const APPEAL_REASON = 'appeal_reason';
  const BUSINESS = 'business';
  const BUSINESS_REGISTRATION_ID = 'business_registration_id';
  const CHINESE_LEGAL_ENTITY_NAME = 'chinese_legal_entity_name';
  const CONTACT = 'contact';
  const CREATOR = 'creator';
  const CREDIT_CARD_ID = 'credit_card_id';
  const DISAPPROVAL_REASONS = 'disapproval_reasons';
  const ENGLISH_LEGAL_ENTITY_NAME = 'english_legal_entity_name';
  const EXTENDED_CREDIT_ID = 'extended_credit_id';
  const ID = 'id';
  const IS_SMB = 'is_smb';
  const IS_TEST = 'is_test';
  const IS_UNDER_AUTHORIZATION = 'is_under_authorization';
  const LEGAL_ENTITY_NAME_IN_LOCAL_LANGUAGE = 'legal_entity_name_in_local_language';
  const OE_REQUEST_ID = 'oe_request_id';
  const OFFICIAL_WEBSITE_URL = 'official_website_url';
  const PLANNING_AGENCY_BUSINESS = 'planning_agency_business';
  const PLANNING_AGENCY_BUSINESS_ID = 'planning_agency_business_id';
  const PROMOTABLE_APP_IDS = 'promotable_app_ids';
  const PROMOTABLE_PAGE_IDS = 'promotable_page_ids';
  const PROMOTABLE_URLS = 'promotable_urls';
  const REQUEST_CHANGE_REASONS = 'request_change_reasons';
  const STATUS = 'status';
  const SUBVERTICAL = 'subvertical';
  const TIME_CREATED = 'time_created';
  const VERTICAL = 'vertical';
  const ADVERTISER_BUSINESS_ID = 'advertiser_business_id';
  const BUSINESS_REGISTRATION = 'business_registration';
  const PROMOTABLE_PAGE_URLS = 'promotable_page_urls';

  public function getFieldTypes() {
    return array(
      'ad_accounts_currency' => 'string',
      'ad_accounts_info' => 'list<Object>',
      'additional_comment' => 'string',
      'address_in_chinese' => 'string',
      'address_in_english' => 'Object',
      'address_in_local_language' => 'string',
      'advertiser_business' => 'Business',
      'appeal_reason' => 'Object',
      'business' => 'Business',
      'business_registration_id' => 'string',
      'chinese_legal_entity_name' => 'string',
      'contact' => 'Object',
      'creator' => 'User',
      'credit_card_id' => 'string',
      'disapproval_reasons' => 'list<Object>',
      'english_legal_entity_name' => 'string',
      'extended_credit_id' => 'string',
      'id' => 'string',
      'is_smb' => 'bool',
      'is_test' => 'bool',
      'is_under_authorization' => 'bool',
      'legal_entity_name_in_local_language' => 'string',
      'oe_request_id' => 'string',
      'official_website_url' => 'string',
      'planning_agency_business' => 'Business',
      'planning_agency_business_id' => 'string',
      'promotable_app_ids' => 'list<string>',
      'promotable_page_ids' => 'list<string>',
      'promotable_urls' => 'list<string>',
      'request_change_reasons' => 'list<Object>',
      'status' => 'string',
      'subvertical' => 'string',
      'time_created' => 'datetime',
      'vertical' => 'string',
      'advertiser_business_id' => 'string',
      'business_registration' => 'file',
      'promotable_page_urls' => 'list<string>',
    );
  }
}
