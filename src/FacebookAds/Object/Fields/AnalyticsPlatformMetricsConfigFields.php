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

class AnalyticsPlatformMetricsConfigFields extends AbstractEnum {

  const HAS_A2U = 'has_a2u';
  const HAS_API_CALLS = 'has_api_calls';
  const HAS_APP_INVITES = 'has_app_invites';
  const HAS_FB_LOGIN = 'has_fb_login';
  const HAS_GAME_REQUESTS = 'has_game_requests';
  const HAS_PAYMENTS = 'has_payments';
  const HAS_REFERRALS = 'has_referrals';
  const HAS_STORIES = 'has_stories';
  const HAS_STRUCTURED_REQUESTS = 'has_structured_requests';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'has_a2u' => 'bool',
      'has_api_calls' => 'bool',
      'has_app_invites' => 'bool',
      'has_fb_login' => 'bool',
      'has_game_requests' => 'bool',
      'has_payments' => 'bool',
      'has_referrals' => 'bool',
      'has_stories' => 'bool',
      'has_structured_requests' => 'bool',
      'id' => 'string',
    );
  }
}
