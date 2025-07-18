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

class BrandedContentFBPromodeUserFields extends AbstractEnum {

  const DELEGATE_PAGE_FOR_ADS_ONLY_ID = 'delegate_page_for_ads_only_id';
  const IS_IABP = 'is_iabp';
  const IS_MANAGED = 'is_managed';
  const NAME = 'name';
  const PROFILE_PICTURE_URL = 'profile_picture_url';

  public function getFieldTypes() {
    return array(
      'delegate_page_for_ads_only_id' => 'string',
      'is_iabp' => 'bool',
      'is_managed' => 'bool',
      'name' => 'string',
      'profile_picture_url' => 'string',
    );
  }
}
