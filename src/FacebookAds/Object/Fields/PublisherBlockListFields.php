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

class PublisherBlockListFields extends AbstractEnum {

  const APP_PUBLISHERS = 'app_publishers';
  const BUSINESS_OWNER_ID = 'business_owner_id';
  const ID = 'id';
  const IS_AUTO_BLOCKING_ON = 'is_auto_blocking_on';
  const IS_ELIGIBLE_AT_CAMPAIGN_LEVEL = 'is_eligible_at_campaign_level';
  const LAST_UPDATE_TIME = 'last_update_time';
  const LAST_UPDATE_USER = 'last_update_user';
  const NAME = 'name';
  const OWNER_AD_ACCOUNT_ID = 'owner_ad_account_id';
  const WEB_PUBLISHERS = 'web_publishers';

  public function getFieldTypes() {
    return array(
      'app_publishers' => 'list<Object>',
      'business_owner_id' => 'string',
      'id' => 'string',
      'is_auto_blocking_on' => 'bool',
      'is_eligible_at_campaign_level' => 'bool',
      'last_update_time' => 'datetime',
      'last_update_user' => 'string',
      'name' => 'string',
      'owner_ad_account_id' => 'string',
      'web_publishers' => 'list<Object>',
    );
  }
}
