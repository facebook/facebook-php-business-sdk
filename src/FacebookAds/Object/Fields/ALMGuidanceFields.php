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

class ALMGuidanceFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const GUIDANCES = 'guidances';
  const PARENT_ADVERTISER_ID = 'parent_advertiser_id';
  const PARENT_ADVERTISER_NAME = 'parent_advertiser_name';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'guidances' => 'list<Object>',
      'parent_advertiser_id' => 'string',
      'parent_advertiser_name' => 'string',
    );
  }
}
