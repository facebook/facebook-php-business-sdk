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

class CommerceMerchantSettingsFields extends AbstractEnum {

  const CHECKOUT_CONFIG = 'checkout_config';
  const CHECKOUT_MESSAGE = 'checkout_message';
  const CONTACT_EMAIL = 'contact_email';
  const CTA = 'cta';
  const DISPLAY_NAME = 'display_name';
  const FACEBOOK_CHANNEL = 'facebook_channel';
  const ID = 'id';
  const INSTAGRAM_CHANNEL = 'instagram_channel';
  const KOREA_FTC_LISTING = 'korea_ftc_listing';
  const MERCHANT_PAGE = 'merchant_page';
  const MERCHANT_STATUS = 'merchant_status';
  const OFFSITE_IAB_CHECKOUT_ENABLED_COUNTRIES = 'offsite_iab_checkout_enabled_countries';
  const PAYMENT_PROVIDER = 'payment_provider';
  const PRIVACY_POLICY_LOCALIZED = 'privacy_policy_localized';
  const RETURN_POLICY_LOCALIZED = 'return_policy_localized';
  const SHOPS_ADS_SETUP = 'shops_ads_setup';
  const TERMS = 'terms';

  public function getFieldTypes() {
    return array(
      'checkout_config' => 'string',
      'checkout_message' => 'string',
      'contact_email' => 'string',
      'cta' => 'string',
      'display_name' => 'string',
      'facebook_channel' => 'Object',
      'id' => 'string',
      'instagram_channel' => 'Object',
      'korea_ftc_listing' => 'string',
      'merchant_page' => 'Profile',
      'merchant_status' => 'string',
      'offsite_iab_checkout_enabled_countries' => 'list<string>',
      'payment_provider' => 'string',
      'privacy_policy_localized' => 'string',
      'return_policy_localized' => 'string',
      'shops_ads_setup' => 'Object',
      'terms' => 'string',
    );
  }
}
