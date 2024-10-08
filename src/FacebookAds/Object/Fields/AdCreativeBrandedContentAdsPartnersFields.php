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

class AdCreativeBrandedContentAdsPartnersFields extends AbstractEnum {

  const FB_PAGE_ID = 'fb_page_id';
  const HAS_CREATE_ADS_ACCESS = 'has_create_ads_access';
  const IDENTITY_TYPE = 'identity_type';
  const IG_ASSET_ID = 'ig_asset_id';
  const IG_USER_ID = 'ig_user_id';

  public function getFieldTypes() {
    return array(
      'fb_page_id' => 'string',
      'has_create_ads_access' => 'bool',
      'identity_type' => 'string',
      'ig_asset_id' => 'string',
      'ig_user_id' => 'string',
    );
  }
}
