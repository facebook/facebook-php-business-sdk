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

class AdCreativeBrandedContentAdsFields extends AbstractEnum {

  const AD_FORMAT = 'ad_format';
  const CREATOR_AD_PERMISSION_TYPE = 'creator_ad_permission_type';
  const INSTAGRAM_BOOST_POST_ACCESS_TOKEN = 'instagram_boost_post_access_token';
  const IS_MCA_INTERNAL = 'is_mca_internal';
  const PARTNERS = 'partners';
  const PROMOTED_PAGE_ID = 'promoted_page_id';
  const UI_VERSION = 'ui_version';

  public function getFieldTypes() {
    return array(
      'ad_format' => 'int',
      'creator_ad_permission_type' => 'string',
      'instagram_boost_post_access_token' => 'string',
      'is_mca_internal' => 'bool',
      'partners' => 'list<AdCreativeBrandedContentAdsPartners>',
      'promoted_page_id' => 'string',
      'ui_version' => 'int',
    );
  }
}
