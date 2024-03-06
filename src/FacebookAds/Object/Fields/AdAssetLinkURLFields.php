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

class AdAssetLinkURLFields extends AbstractEnum {

  const ANDROID_DEEPLINK_URL = 'android_deeplink_url';
  const CAROUSEL_SEE_MORE_URL = 'carousel_see_more_url';
  const DEEPLINK_URL = 'deeplink_url';
  const DISPLAY_URL = 'display_url';
  const ID = 'id';
  const IPAD_DEEPLINK_URL = 'ipad_deeplink_url';
  const IPHONE_DEEPLINK_URL = 'iphone_deeplink_url';
  const URL_TAGS = 'url_tags';
  const WEBSITE_URL = 'website_url';

  public function getFieldTypes() {
    return array(
      'android_deeplink_url' => 'string',
      'carousel_see_more_url' => 'string',
      'deeplink_url' => 'string',
      'display_url' => 'string',
      'id' => 'string',
      'ipad_deeplink_url' => 'string',
      'iphone_deeplink_url' => 'string',
      'url_tags' => 'string',
      'website_url' => 'string',
    );
  }
}
