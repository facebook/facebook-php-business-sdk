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

class InstagramUserFields extends AbstractEnum {

  const FOLLOW_COUNT = 'follow_count';
  const FOLLOWED_BY_COUNT = 'followed_by_count';
  const HAS_PROFILE_PICTURE = 'has_profile_picture';
  const ID = 'id';
  const IS_PRIVATE = 'is_private';
  const IS_PUBLISHED = 'is_published';
  const MEDIA_COUNT = 'media_count';
  const MINI_SHOP_STOREFRONT = 'mini_shop_storefront';
  const OWNER_BUSINESS = 'owner_business';
  const PROFILE_PIC = 'profile_pic';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'follow_count' => 'int',
      'followed_by_count' => 'int',
      'has_profile_picture' => 'bool',
      'id' => 'string',
      'is_private' => 'bool',
      'is_published' => 'bool',
      'media_count' => 'int',
      'mini_shop_storefront' => 'Shop',
      'owner_business' => 'Business',
      'profile_pic' => 'string',
      'username' => 'string',
    );
  }
}
