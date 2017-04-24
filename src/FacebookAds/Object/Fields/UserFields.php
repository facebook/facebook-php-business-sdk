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
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class UserFields extends AbstractEnum {

  const ABOUT = 'about';
  const ADMIN_NOTES = 'admin_notes';
  const AGE_RANGE = 'age_range';
  const BIRTHDAY = 'birthday';
  const CAN_REVIEW_MEASUREMENT_REQUEST = 'can_review_measurement_request';
  const CONTEXT = 'context';
  const COVER = 'cover';
  const CURRENCY = 'currency';
  const DEVICES = 'devices';
  const EDUCATION = 'education';
  const EMAIL = 'email';
  const EMPLOYEE_NUMBER = 'employee_number';
  const FAVORITE_ATHLETES = 'favorite_athletes';
  const FAVORITE_TEAMS = 'favorite_teams';
  const FIRST_NAME = 'first_name';
  const GENDER = 'gender';
  const HOMETOWN = 'hometown';
  const ID = 'id';
  const INSPIRATIONAL_PEOPLE = 'inspirational_people';
  const INSTALL_TYPE = 'install_type';
  const INSTALLED = 'installed';
  const INTERESTED_IN = 'interested_in';
  const IS_SHARED_LOGIN = 'is_shared_login';
  const IS_VERIFIED = 'is_verified';
  const LABELS = 'labels';
  const LANGUAGES = 'languages';
  const LAST_NAME = 'last_name';
  const LINK = 'link';
  const LOCALE = 'locale';
  const LOCATION = 'location';
  const MEETING_FOR = 'meeting_for';
  const MIDDLE_NAME = 'middle_name';
  const NAME = 'name';
  const NAME_FORMAT = 'name_format';
  const PAYMENT_PRICEPOINTS = 'payment_pricepoints';
  const POLITICAL = 'political';
  const PUBLIC_KEY = 'public_key';
  const QUOTES = 'quotes';
  const RELATIONSHIP_STATUS = 'relationship_status';
  const RELIGION = 'religion';
  const SECURITY_SETTINGS = 'security_settings';
  const SHARED_LOGIN_UPGRADE_REQUIRED_BY = 'shared_login_upgrade_required_by';
  const SHORT_NAME = 'short_name';
  const SIGNIFICANT_OTHER = 'significant_other';
  const SPORTS = 'sports';
  const TEST_GROUP = 'test_group';
  const THIRD_PARTY_ID = 'third_party_id';
  const TIMEZONE = 'timezone';
  const TOKEN_FOR_BUSINESS = 'token_for_business';
  const UPDATED_TIME = 'updated_time';
  const VERIFIED = 'verified';
  const VIDEO_UPLOAD_LIMITS = 'video_upload_limits';
  const VIEWER_CAN_SEND_GIFT = 'viewer_can_send_gift';
  const WEBSITE = 'website';
  const WORK = 'work';

  public function getFieldTypes() {
    return array(
      'about' => 'string',
      'admin_notes' => 'list<Object>',
      'age_range' => 'Object',
      'birthday' => 'string',
      'can_review_measurement_request' => 'bool',
      'context' => 'Object',
      'cover' => 'Object',
      'currency' => 'Object',
      'devices' => 'list<Object>',
      'education' => 'list<Object>',
      'email' => 'string',
      'employee_number' => 'string',
      'favorite_athletes' => 'list<Object>',
      'favorite_teams' => 'list<Object>',
      'first_name' => 'string',
      'gender' => 'string',
      'hometown' => 'Object',
      'id' => 'string',
      'inspirational_people' => 'list<Object>',
      'install_type' => 'string',
      'installed' => 'bool',
      'interested_in' => 'list<string>',
      'is_shared_login' => 'bool',
      'is_verified' => 'bool',
      'labels' => 'list<Object>',
      'languages' => 'list<Object>',
      'last_name' => 'string',
      'link' => 'string',
      'locale' => 'string',
      'location' => 'Object',
      'meeting_for' => 'list<string>',
      'middle_name' => 'string',
      'name' => 'string',
      'name_format' => 'string',
      'payment_pricepoints' => 'Object',
      'political' => 'string',
      'public_key' => 'string',
      'quotes' => 'string',
      'relationship_status' => 'string',
      'religion' => 'string',
      'security_settings' => 'Object',
      'shared_login_upgrade_required_by' => 'datetime',
      'short_name' => 'string',
      'significant_other' => 'User',
      'sports' => 'list<Object>',
      'test_group' => 'unsigned int',
      'third_party_id' => 'string',
      'timezone' => 'float',
      'token_for_business' => 'string',
      'updated_time' => 'datetime',
      'verified' => 'bool',
      'video_upload_limits' => 'Object',
      'viewer_can_send_gift' => 'bool',
      'website' => 'string',
      'work' => 'list<Object>',
    );
  }
}
