<?php
/**
 * Copyright 2014 Facebook, Inc.
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

abstract class AdAccountFields {

  const ACCOUNT_GROUPS = 'account_groups';
  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_STATUS = 'account_status';
  const AGE = 'age';
  const AGENCY_CLIENT_DECLARATION = 'agency_client_declaration';
  const AMOUNT_SPENT = 'amount_spent';
  const BALANCE = 'balance';
  const BUSINESS_CITY = 'business_city';
  const BUSINESS_COUNTRY_CODE = 'business_country_code';
  const BUSINESS_NAME = 'business_name';
  const BUSINESS_STATE = 'business_state';
  const BUSINESS_STREET2 = 'business_street2';
  const BUSINESS_STREET = 'business_street';
  const BUSINESS_ZIP = 'business_zip';
  const CREATED_TIME = 'created_time';
  const END_ADVERTISER = 'end_advertiser';
  const MEDIA_AGENCY = 'media_agency';
  const PARTNER = 'partner';
  const CAPABILITIES = 'capabilities';
  const CURRENCY = 'currency';
  const DAILY_SPEND_LIMIT = 'daily_spend_limit';
  const ID = 'id';
  const IS_PERSONAL = 'is_personal';
  const NAME = 'name';
  const OFFSITE_PIXELS_TOS_ACCEPTED = 'offsite_pixels_tos_accepted';
  const SPEND_CAP = 'spend_cap';
  const SPEND_CAP_ACTION = 'spend_cap_action';
  const FUNDING_SOURCE = 'funding_source';
  const FUNDING_SOURCE_DETAILS = 'funding_source_details';
  const TIMEZONE_ID = 'timezone_id';
  const TIMEZONE_NAME = 'timezone_name';
  const TIMEZONE_OFFSET_HOURS_UTC = 'timezone_offset_hours_utc';
  const TOS_ACCEPTED = 'tos_accepted';
  const USERS = 'users';
  // Deprecated field
  const VAT_STATUS = 'tax_id_status';
  const TAX_ID_STATUS = 'tax_id_status';
}
