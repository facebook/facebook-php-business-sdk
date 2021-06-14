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

class ReferralFields extends AbstractEnum {

  const ID = 'id';
  const INVITE_LIMIT = 'invite_limit';
  const MESSENGER_CTA = 'messenger_cta';
  const MESSENGER_PROMOTION_TEXT = 'messenger_promotion_text';
  const NAMESPACE = 'namespace';
  const NEED_PROMO_CODE = 'need_promo_code';
  const OFFER_ORIGIN = 'offer_origin';
  const PRIVACY_POLICY_LINK = 'privacy_policy_link';
  const PROMOTION_TEXT = 'promotion_text';
  const RECEIVER_BENEFITS_TEXT = 'receiver_benefits_text';
  const REFERRAL_LINK_URI = 'referral_link_uri';
  const SENDER_BENEFITS_TEXT = 'sender_benefits_text';
  const TERMS_AND_CONDITION_LINK = 'terms_and_condition_link';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'invite_limit' => 'int',
      'messenger_cta' => 'string',
      'messenger_promotion_text' => 'string',
      'namespace' => 'string',
      'need_promo_code' => 'bool',
      'offer_origin' => 'string',
      'privacy_policy_link' => 'string',
      'promotion_text' => 'string',
      'receiver_benefits_text' => 'string',
      'referral_link_uri' => 'string',
      'sender_benefits_text' => 'string',
      'terms_and_condition_link' => 'string',
    );
  }
}
