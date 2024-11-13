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

class AdCreativeSiteLinksSpecFields extends AbstractEnum {

  const SITE_LINK_IMAGE_HASH = 'site_link_image_hash';
  const SITE_LINK_IMAGE_URL = 'site_link_image_url';
  const SITE_LINK_RECOMMENDATION_TYPE = 'site_link_recommendation_type';
  const SITE_LINK_TITLE = 'site_link_title';
  const SITE_LINK_URL = 'site_link_url';

  public function getFieldTypes() {
    return array(
      'site_link_image_hash' => 'string',
      'site_link_image_url' => 'string',
      'site_link_recommendation_type' => 'string',
      'site_link_title' => 'string',
      'site_link_url' => 'string',
    );
  }
}
