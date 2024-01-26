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

class CommerceMerchantSettingsSetupStatusFields extends AbstractEnum {

  const DEALS_SETUP = 'deals_setup';
  const MARKETPLACE_APPROVAL_STATUS = 'marketplace_approval_status';
  const MARKETPLACE_APPROVAL_STATUS_DETAILS = 'marketplace_approval_status_details';
  const PAYMENT_SETUP = 'payment_setup';
  const REVIEW_STATUS = 'review_status';
  const SHOP_SETUP = 'shop_setup';

  public function getFieldTypes() {
    return array(
      'deals_setup' => 'string',
      'marketplace_approval_status' => 'string',
      'marketplace_approval_status_details' => 'Object',
      'payment_setup' => 'string',
      'review_status' => 'Object',
      'shop_setup' => 'string',
    );
  }
}
