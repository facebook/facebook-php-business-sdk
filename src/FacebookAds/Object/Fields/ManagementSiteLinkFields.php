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

class ManagementSiteLinkFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const ID = 'id';
  const LINK_DOMAIN = 'link_domain';
  const LINK_HASH = 'link_hash';
  const LINK_IMAGE_HASH = 'link_image_hash';
  const LINK_IMAGE_URL = 'link_image_url';
  const LINK_TITLE = 'link_title';
  const LINK_TYPE = 'link_type';
  const LINK_URL = 'link_url';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'id' => 'string',
      'link_domain' => 'string',
      'link_hash' => 'string',
      'link_image_hash' => 'string',
      'link_image_url' => 'string',
      'link_title' => 'string',
      'link_type' => 'string',
      'link_url' => 'string',
    );
  }
}
