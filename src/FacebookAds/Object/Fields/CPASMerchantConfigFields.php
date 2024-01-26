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

class CPASMerchantConfigFields extends AbstractEnum {

  const ACCEPTED_TOS = 'accepted_tos';
  const BETA_FEATURES = 'beta_features';
  const BUSINESS_OUTCOMES_STATUS = 'business_outcomes_status';
  const ID = 'id';
  const IS_TEST_MERCHANT = 'is_test_merchant';
  const OUTCOMES_COMPLIANCE_STATUS = 'outcomes_compliance_status';
  const QUALIFIED_TO_ONBOARD = 'qualified_to_onboard';

  public function getFieldTypes() {
    return array(
      'accepted_tos' => 'bool',
      'beta_features' => 'list<string>',
      'business_outcomes_status' => 'list<map<string, string>>',
      'id' => 'string',
      'is_test_merchant' => 'bool',
      'outcomes_compliance_status' => 'list<map<string, Object>>',
      'qualified_to_onboard' => 'bool',
    );
  }
}
