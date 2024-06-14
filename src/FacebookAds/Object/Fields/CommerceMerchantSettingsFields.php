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

  const CHECKOUT_MESSAGE = 'checkout_message';
  const CONTACT_EMAIL = 'contact_email';
  const CTA = 'cta';
  const DISPLAY_NAME = 'display_name';
  const FACEBOOK_CHANNEL = 'facebook_channel';
  const ID = 'id';
  const INSTAGRAM_CHANNEL = 'instagram_channel';
  const MERCHANT_PAGE = 'merchant_page';
  const MERCHANT_STATUS = 'merchant_status';
  const ONSITE_COMMERCE_MERCHANT = 'onsite_commerce_merchant';
  const PAYMENT_PROVIDER = 'payment_provider';
  const REVIEW_REJECTION_MESSAGES = 'review_rejection_messages';
  const REVIEW_REJECTION_REASONS = 'review_rejection_reasons';
  const TERMS = 'terms';

  public function getFieldTypes() {
    return array(
      'checkout_message' => 'string',
      'contact_email' => 'string',
      'cta' => 'string',
      'display_name' => 'string',
      'facebook_channel' => 'Object',
      'id' => 'string',
      'instagram_channel' => 'Object',
      'merchant_page' => 'Profile',
      'merchant_status' => 'string',
      'onsite_commerce_merchant' => 'Object',
      'payment_provider' => 'string',
      'review_rejection_messages' => 'list<string>',
      'review_rejection_reasons' => 'list<string>',
      'terms' => 'string',
    );
  }
}
