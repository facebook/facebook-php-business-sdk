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
