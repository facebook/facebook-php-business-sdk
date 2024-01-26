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

class IGUserFields extends AbstractEnum {

  const BIOGRAPHY = 'biography';
  const BUSINESS_DISCOVERY = 'business_discovery';
  const FOLLOWERS_COUNT = 'followers_count';
  const FOLLOWS_COUNT = 'follows_count';
  const ID = 'id';
  const IG_ID = 'ig_id';
  const MEDIA_COUNT = 'media_count';
  const MENTIONED_COMMENT = 'mentioned_comment';
  const MENTIONED_MEDIA = 'mentioned_media';
  const NAME = 'name';
  const OWNER_BUSINESS = 'owner_business';
  const PROFILE_PICTURE_URL = 'profile_picture_url';
  const SHOPPING_PRODUCT_TAG_ELIGIBILITY = 'shopping_product_tag_eligibility';
  const SHOPPING_REVIEW_STATUS = 'shopping_review_status';
  const USERNAME = 'username';
  const WEBSITE = 'website';

  public function getFieldTypes() {
    return array(
      'biography' => 'string',
      'business_discovery' => 'IGUser',
      'followers_count' => 'int',
      'follows_count' => 'int',
      'id' => 'string',
      'ig_id' => 'int',
      'media_count' => 'int',
      'mentioned_comment' => 'IGComment',
      'mentioned_media' => 'IGMedia',
      'name' => 'string',
      'owner_business' => 'Business',
      'profile_picture_url' => 'string',
      'shopping_product_tag_eligibility' => 'bool',
      'shopping_review_status' => 'string',
      'username' => 'string',
      'website' => 'string',
    );
  }
}
