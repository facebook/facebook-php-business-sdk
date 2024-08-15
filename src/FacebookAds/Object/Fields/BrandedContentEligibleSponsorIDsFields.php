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

class BrandedContentEligibleSponsorIDsFields extends AbstractEnum {

  const FB_PAGE = 'fb_page';
  const IG_ACCOUNT_V2 = 'ig_account_v2';
  const IG_APPROVAL_NEEDED = 'ig_approval_needed';

  public function getFieldTypes() {
    return array(
      'fb_page' => 'Page',
      'ig_account_v2' => 'IGUser',
      'ig_approval_needed' => 'bool',
    );
  }
}
