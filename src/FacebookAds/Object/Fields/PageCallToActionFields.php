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

class PageCallToActionFields extends AbstractEnum {

  const ANDROID_APP = 'android_app';
  const ANDROID_DEEPLINK = 'android_deeplink';
  const ANDROID_DESTINATION_TYPE = 'android_destination_type';
  const ANDROID_PACKAGE_NAME = 'android_package_name';
  const ANDROID_URL = 'android_url';
  const CREATED_TIME = 'created_time';
  const EMAIL_ADDRESS = 'email_address';
  const FROM = 'from';
  const ID = 'id';
  const INTL_NUMBER_WITH_PLUS = 'intl_number_with_plus';
  const IPHONE_APP = 'iphone_app';
  const IPHONE_DEEPLINK = 'iphone_deeplink';
  const IPHONE_DESTINATION_TYPE = 'iphone_destination_type';
  const IPHONE_URL = 'iphone_url';
  const STATUS = 'status';
  const TYPE = 'type';
  const UPDATED_TIME = 'updated_time';
  const WEB_DESTINATION_TYPE = 'web_destination_type';
  const WEB_URL = 'web_url';

  public function getFieldTypes() {
    return array(
      'android_app' => 'Application',
      'android_deeplink' => 'string',
      'android_destination_type' => 'string',
      'android_package_name' => 'string',
      'android_url' => 'string',
      'created_time' => 'datetime',
      'email_address' => 'string',
      'from' => 'Page',
      'id' => 'string',
      'intl_number_with_plus' => 'string',
      'iphone_app' => 'Application',
      'iphone_deeplink' => 'string',
      'iphone_destination_type' => 'string',
      'iphone_url' => 'string',
      'status' => 'string',
      'type' => 'string',
      'updated_time' => 'datetime',
      'web_destination_type' => 'string',
      'web_url' => 'string',
    );
  }
}
