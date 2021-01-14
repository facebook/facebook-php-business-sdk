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

class UserFields extends AbstractEnum {

  const ABOUT = 'about';
  const AGE_RANGE = 'age_range';
  const BIRTHDAY = 'birthday';
  const COVER = 'cover';
  const CURRENCY = 'currency';
  const EDUCATION = 'education';
  const EMAIL = 'email';
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
  const IS_GUEST_USER = 'is_guest_user';
  const IS_VERIFIED = 'is_verified';
  const LANGUAGES = 'languages';
  const LAST_NAME = 'last_name';
  const LINK = 'link';
  const LOCAL_NEWS_MEGAPHONE_DISMISS_STATUS = 'local_news_megaphone_dismiss_status';
  const LOCAL_NEWS_SUBSCRIPTION_STATUS = 'local_news_subscription_status';
  const LOCALE = 'locale';
  const LOCATION = 'location';
  const MEETING_FOR = 'meeting_for';
  const MIDDLE_NAME = 'middle_name';
  const NAME = 'name';
  const NAME_FORMAT = 'name_format';
  const PAYMENT_PRICEPOINTS = 'payment_pricepoints';
  const POLITICAL = 'political';
  const PROFILE_PIC = 'profile_pic';
  const QUOTES = 'quotes';
  const RELATIONSHIP_STATUS = 'relationship_status';
  const RELIGION = 'religion';
  const SHARED_LOGIN_UPGRADE_REQUIRED_BY = 'shared_login_upgrade_required_by';
  const SHORT_NAME = 'short_name';
  const SIGNIFICANT_OTHER = 'significant_other';
  const SPORTS = 'sports';
  const SUPPORTS_DONATE_BUTTON_IN_LIVE_VIDEO = 'supports_donate_button_in_live_video';
  const THIRD_PARTY_ID = 'third_party_id';
  const TIMEZONE = 'timezone';
  const TOKEN_FOR_BUSINESS = 'token_for_business';
  const UPDATED_TIME = 'updated_time';
  const VERIFIED = 'verified';
  const VIDEO_UPLOAD_LIMITS = 'video_upload_limits';
  const WEBSITE = 'website';

  public function getFieldTypes() {
    return array(
      'about' => 'string',
      'age_range' => 'AgeRange',
      'birthday' => 'string',
      'cover' => 'UserCoverPhoto',
      'currency' => 'Currency',
      'education' => 'list<Object>',
      'email' => 'string',
      'favorite_athletes' => 'list<Experience>',
      'favorite_teams' => 'list<Experience>',
      'first_name' => 'string',
      'gender' => 'string',
      'hometown' => 'Page',
      'id' => 'string',
      'inspirational_people' => 'list<Experience>',
      'install_type' => 'string',
      'installed' => 'bool',
      'interested_in' => 'list<string>',
      'is_guest_user' => 'bool',
      'is_verified' => 'bool',
      'languages' => 'list<Experience>',
      'last_name' => 'string',
      'link' => 'string',
      'local_news_megaphone_dismiss_status' => 'bool',
      'local_news_subscription_status' => 'bool',
      'locale' => 'string',
      'location' => 'Page',
      'meeting_for' => 'list<string>',
      'middle_name' => 'string',
      'name' => 'string',
      'name_format' => 'string',
      'payment_pricepoints' => 'PaymentPricepoints',
      'political' => 'string',
      'profile_pic' => 'string',
      'quotes' => 'string',
      'relationship_status' => 'string',
      'religion' => 'string',
      'shared_login_upgrade_required_by' => 'datetime',
      'short_name' => 'string',
      'significant_other' => 'User',
      'sports' => 'list<Experience>',
      'supports_donate_button_in_live_video' => 'bool',
      'third_party_id' => 'string',
      'timezone' => 'float',
      'token_for_business' => 'string',
      'updated_time' => 'datetime',
      'verified' => 'bool',
      'video_upload_limits' => 'VideoUploadLimits',
      'website' => 'string',
    );
  }
}
