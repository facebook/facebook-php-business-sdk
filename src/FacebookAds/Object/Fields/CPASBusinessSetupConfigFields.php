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

class CPASBusinessSetupConfigFields extends AbstractEnum {

  const ACCEPTED_COLLAB_ADS_TOS = 'accepted_collab_ads_tos';
  const BUSINESS = 'business';
  const BUSINESS_CAPABILITIES_STATUS = 'business_capabilities_status';
  const CAPABILITIES_COMPLIANCE_STATUS = 'capabilities_compliance_status';
  const ID = 'id';
  const AD_ACCOUNTS = 'ad_accounts';

  public function getFieldTypes() {
    return array(
      'accepted_collab_ads_tos' => 'bool',
      'business' => 'Business',
      'business_capabilities_status' => 'list<map<string, string>>',
      'capabilities_compliance_status' => 'list<map<string, Object>>',
      'id' => 'string',
      'ad_accounts' => 'list<string>',
    );
  }
}
