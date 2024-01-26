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

class UserFields extends AbstractEnum {

  const ABOUT = 'about';
  const AGE_RANGE = 'age_range';
  const AVATAR_2D_PROFILE_PICTURE = 'avatar_2d_profile_picture';
  const BIRTHDAY = 'birthday';
  const COMMUNITY = 'community';
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
  const ID_FOR_AVATARS = 'id_for_avatars';
  const INSPIRATIONAL_PEOPLE = 'inspirational_people';
  const INSTALL_TYPE = 'install_type';
  const INSTALLED = 'installed';
  const IS_GUEST_USER = 'is_guest_user';
  const IS_WORK_ACCOUNT = 'is_work_account';
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
      'avatar_2d_profile_picture' => 'AvatarProfilePicture',
      'birthday' => 'string',
      'community' => 'Group',
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
      'id_for_avatars' => 'string',
      'inspirational_people' => 'list<Experience>',
      'install_type' => 'string',
      'installed' => 'bool',
      'is_guest_user' => 'bool',
      'is_work_account' => 'bool',
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
