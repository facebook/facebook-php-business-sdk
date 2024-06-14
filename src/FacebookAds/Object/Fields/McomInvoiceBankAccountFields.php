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

class McomInvoiceBankAccountFields extends AbstractEnum {

  const NUM_PENDING_VERIFICATION_ACCOUNTS = 'num_pending_verification_accounts';
  const NUM_VERIFIED_ACCOUNTS = 'num_verified_accounts';
  const PENDING_VERIFICATION_ACCOUNTS = 'pending_verification_accounts';
  const VERIFIED_ACCOUNTS = 'verified_accounts';

  public function getFieldTypes() {
    return array(
      'num_pending_verification_accounts' => 'int',
      'num_verified_accounts' => 'int',
      'pending_verification_accounts' => 'list<Object>',
      'verified_accounts' => 'list<Object>',
    );
  }
}
