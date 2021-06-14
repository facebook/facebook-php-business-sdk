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

class MessengerProfileFields extends AbstractEnum {

  const ACCOUNT_LINKING_URL = 'account_linking_url';
  const GET_STARTED = 'get_started';
  const GREETING = 'greeting';
  const ICE_BREAKERS = 'ice_breakers';
  const PAYMENT_SETTINGS = 'payment_settings';
  const PERSISTENT_MENU = 'persistent_menu';
  const SUBJECT_TO_NEW_EU_PRIVACY_RULES = 'subject_to_new_eu_privacy_rules';
  const TARGET_AUDIENCE = 'target_audience';
  const WHITELISTED_DOMAINS = 'whitelisted_domains';

  public function getFieldTypes() {
    return array(
      'account_linking_url' => 'string',
      'get_started' => 'Object',
      'greeting' => 'list<Object>',
      'ice_breakers' => 'list<Object>',
      'payment_settings' => 'Object',
      'persistent_menu' => 'list<Object>',
      'subject_to_new_eu_privacy_rules' => 'bool',
      'target_audience' => 'Object',
      'whitelisted_domains' => 'list<string>',
    );
  }
}
