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

class StonehengeSubscriptionPublisherFields extends AbstractEnum {

  const APPLICATION_ID = 'application_id';
  const ARTICLE_URL_PATTERNS = 'article_url_patterns';
  const CONTENT_TIER_BREAKDOWN = 'content_tier_breakdown';
  const DEFAULT_CONTENT_TIER = 'default_content_tier';
  const ID = 'id';
  const IS_TEST = 'is_test';
  const METER_TRACKER = 'meter_tracker';
  const OWNER = 'owner';
  const PACKAGES = 'packages';
  const PAYWALL_TRACKER = 'paywall_tracker';
  const SUBSCRIPTION_PIXEL_TRACKING = 'subscription_pixel_tracking';

  public function getFieldTypes() {
    return array(
      'application_id' => 'string',
      'article_url_patterns' => 'list<Object>',
      'content_tier_breakdown' => 'list<Object>',
      'default_content_tier' => 'string',
      'id' => 'string',
      'is_test' => 'bool',
      'meter_tracker' => 'Object',
      'owner' => 'Page',
      'packages' => 'list<Object>',
      'paywall_tracker' => 'Object',
      'subscription_pixel_tracking' => 'Object',
    );
  }
}
