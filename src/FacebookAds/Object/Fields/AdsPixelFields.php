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

class AdsPixelFields extends AbstractEnum {

  const AUTOMATIC_MATCHING_FIELDS = 'automatic_matching_fields';
  const CAN_PROXY = 'can_proxy';
  const CODE = 'code';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const DATA_USE_SETTING = 'data_use_setting';
  const ENABLE_AUTOMATIC_MATCHING = 'enable_automatic_matching';
  const FIRST_PARTY_COOKIE_STATUS = 'first_party_cookie_status';
  const ID = 'id';
  const IS_CREATED_BY_BUSINESS = 'is_created_by_business';
  const IS_UNAVAILABLE = 'is_unavailable';
  const LAST_FIRED_TIME = 'last_fired_time';
  const NAME = 'name';
  const OWNER_AD_ACCOUNT = 'owner_ad_account';
  const OWNER_BUSINESS = 'owner_business';

  public function getFieldTypes() {
    return array(
      'automatic_matching_fields' => 'list<string>',
      'can_proxy' => 'bool',
      'code' => 'string',
      'creation_time' => 'datetime',
      'creator' => 'User',
      'data_use_setting' => 'string',
      'enable_automatic_matching' => 'bool',
      'first_party_cookie_status' => 'string',
      'id' => 'string',
      'is_created_by_business' => 'bool',
      'is_unavailable' => 'bool',
      'last_fired_time' => 'datetime',
      'name' => 'string',
      'owner_ad_account' => 'AdAccount',
      'owner_business' => 'Business',
    );
  }
}
