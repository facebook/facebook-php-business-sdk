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

  const BRAINTREE_MERCHANT_ID = 'braintree_merchant_id';
  const CHECKOUT_MESSAGE = 'checkout_message';
  const CONTACT_EMAIL = 'contact_email';
  const CTA = 'cta';
  const DISABLE_CHECKOUT_URLS = 'disable_checkout_urls';
  const DISPLAY_NAME = 'display_name';
  const EXTERNAL_MERCHANT_ID = 'external_merchant_id';
  const FACEBOOK_CHANNEL = 'facebook_channel';
  const FEATURE_ELIGIBILITY = 'feature_eligibility';
  const HAS_DISCOUNT_CODE = 'has_discount_code';
  const HAS_ONSITE_INTENT = 'has_onsite_intent';
  const ID = 'id';
  const INSTAGRAM_CHANNEL = 'instagram_channel';
  const MERCHANT_ALERT_EMAIL = 'merchant_alert_email';
  const MERCHANT_PAGE = 'merchant_page';
  const MERCHANT_STATUS = 'merchant_status';
  const ONSITE_COMMERCE_MERCHANT = 'onsite_commerce_merchant';
  const PAYMENT_PROVIDER = 'payment_provider';
  const PRIVACY_URL_BY_LOCALE = 'privacy_url_by_locale';
  const REVIEW_REJECTION_MESSAGES = 'review_rejection_messages';
  const REVIEW_REJECTION_REASONS = 'review_rejection_reasons';
  const SUPPORTED_CARD_TYPES = 'supported_card_types';
  const TERMS = 'terms';
  const TERMS_URL_BY_LOCALE = 'terms_url_by_locale';

  public function getFieldTypes() {
    return array(
      'braintree_merchant_id' => 'string',
      'checkout_message' => 'string',
      'contact_email' => 'string',
      'cta' => 'string',
      'disable_checkout_urls' => 'bool',
      'display_name' => 'string',
      'external_merchant_id' => 'string',
      'facebook_channel' => 'Object',
      'feature_eligibility' => 'Object',
      'has_discount_code' => 'bool',
      'has_onsite_intent' => 'bool',
      'id' => 'string',
      'instagram_channel' => 'Object',
      'merchant_alert_email' => 'string',
      'merchant_page' => 'Profile',
      'merchant_status' => 'string',
      'onsite_commerce_merchant' => 'Object',
      'payment_provider' => 'string',
      'privacy_url_by_locale' => 'list<map<string, string>>',
      'review_rejection_messages' => 'list<string>',
      'review_rejection_reasons' => 'list<string>',
      'supported_card_types' => 'list<string>',
      'terms' => 'string',
      'terms_url_by_locale' => 'list<map<string, string>>',
    );
  }
}
