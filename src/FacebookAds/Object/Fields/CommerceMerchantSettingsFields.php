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
  const REVIEW_STATUS = 'review_status';
  const SUPPORTED_CARD_TYPES = 'supported_card_types';
  const TERMS = 'terms';
  const TERMS_URL_BY_LOCALE = 'terms_url_by_locale';
  const WHATSAPP_CHANNEL = 'whatsapp_channel';

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
      'privacy_url_by_locale' => 'map<string, string>',
      'review_rejection_messages' => 'list<string>',
      'review_rejection_reasons' => 'list<string>',
      'review_status' => 'string',
      'supported_card_types' => 'list<string>',
      'terms' => 'string',
      'terms_url_by_locale' => 'map<string, string>',
      'whatsapp_channel' => 'Object',
    );
  }
}
