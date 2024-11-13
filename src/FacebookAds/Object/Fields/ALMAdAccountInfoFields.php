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

class ALMAdAccountInfoFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const ID = 'id';
  const MANAGED_BY = 'managed_by';
  const OWNED_BY = 'owned_by';
  const PARENT_ADVERTISER_ID = 'parent_advertiser_id';
  const SUB_VERTICAL = 'sub_vertical';
  const TAG = 'tag';
  const USER_IDS = 'user_ids';
  const VERTICAL = 'vertical';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'id' => 'string',
      'managed_by' => 'string',
      'owned_by' => 'string',
      'parent_advertiser_id' => 'string',
      'sub_vertical' => 'string',
      'tag' => 'list<string>',
      'user_ids' => 'list<string>',
      'vertical' => 'string',
    );
  }
}
