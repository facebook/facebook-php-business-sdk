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
  const CONTENT_SEARCH_INPUT = 'content_search_input';
  const CREATOR_AD_PERMISSION_TYPE = 'creator_ad_permission_type';
  const FACEBOOK_BOOST_POST_ACCESS_TOKEN = 'facebook_boost_post_access_token';
  const INSTAGRAM_BOOST_POST_ACCESS_TOKEN = 'instagram_boost_post_access_token';
  const IS_MCA_INTERNAL = 'is_mca_internal';
  const PARENT_SOURCE_FACEBOOK_POST_ID = 'parent_source_facebook_post_id';
  const PARENT_SOURCE_INSTAGRAM_MEDIA_ID = 'parent_source_instagram_media_id';
  const PARTNERS = 'partners';
  const PRODUCT_SET_PARTNER_SELECTION_STATUS = 'product_set_partner_selection_status';
  const PROMOTED_PAGE_ID = 'promoted_page_id';
  const TESTIMONIAL = 'testimonial';
  const TESTIMONIAL_LOCALE = 'testimonial_locale';
  const UI_VERSION = 'ui_version';

  public function getFieldTypes() {
    return array(
      'ad_format' => 'int',
      'content_search_input' => 'string',
      'creator_ad_permission_type' => 'string',
      'facebook_boost_post_access_token' => 'string',
      'instagram_boost_post_access_token' => 'string',
      'is_mca_internal' => 'bool',
      'parent_source_facebook_post_id' => 'string',
      'parent_source_instagram_media_id' => 'string',
      'partners' => 'list<AdCreativeBrandedContentAdsPartners>',
      'product_set_partner_selection_status' => 'string',
      'promoted_page_id' => 'string',
      'testimonial' => 'string',
      'testimonial_locale' => 'string',
      'ui_version' => 'int',
    );
  }
}
