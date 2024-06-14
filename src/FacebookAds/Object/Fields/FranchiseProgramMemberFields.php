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

class FranchiseProgramMemberFields extends AbstractEnum {

  const BUSINESS = 'business';
  const END_DATE = 'end_date';
  const ID = 'id';
  const JOIN_DATE = 'join_date';
  const MEMBER_AD_ACCOUNT = 'member_ad_account';
  const MEMBER_USER = 'member_user';
  const MEMBERSHIP_STATUS = 'membership_status';
  const PAGE = 'page';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'end_date' => 'datetime',
      'id' => 'string',
      'join_date' => 'datetime',
      'member_ad_account' => 'AdAccount',
      'member_user' => 'User',
      'membership_status' => 'string',
      'page' => 'Page',
    );
  }
}
