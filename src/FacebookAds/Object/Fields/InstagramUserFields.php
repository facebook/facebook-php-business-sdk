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
