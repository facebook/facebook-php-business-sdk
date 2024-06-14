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

class AdLimitsEnforcementDataFields extends AbstractEnum {

  const AD_LIMIT_ON_PAGE = 'ad_limit_on_page';
  const AD_LIMIT_ON_SCOPE = 'ad_limit_on_scope';
  const AD_VOLUME_ON_PAGE = 'ad_volume_on_page';
  const AD_VOLUME_ON_SCOPE = 'ad_volume_on_scope';
  const IS_ADMIN = 'is_admin';
  const PAGE_NAME = 'page_name';

  public function getFieldTypes() {
    return array(
      'ad_limit_on_page' => 'int',
      'ad_limit_on_scope' => 'int',
      'ad_volume_on_page' => 'int',
      'ad_volume_on_scope' => 'int',
      'is_admin' => 'bool',
      'page_name' => 'string',
    );
  }
}
