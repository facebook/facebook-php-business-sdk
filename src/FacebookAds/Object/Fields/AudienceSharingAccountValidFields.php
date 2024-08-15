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

class AudienceSharingAccountValidFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_TYPE = 'account_type';
  const BUSINESS_ID = 'business_id';
  const BUSINESS_NAME = 'business_name';
  const CAN_AD_ACCOUNT_USE_LOOKALIKE_CONTAINER = 'can_ad_account_use_lookalike_container';
  const SHARING_AGREEMENT_STATUS = 'sharing_agreement_status';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'account_type' => 'string',
      'business_id' => 'string',
      'business_name' => 'string',
      'can_ad_account_use_lookalike_container' => 'bool',
      'sharing_agreement_status' => 'int',
    );
  }
}
