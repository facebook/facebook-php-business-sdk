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

class AdCampaignGroupAgencyFeeConfigForApiFields extends AbstractEnum {

  const AGENCY_FEE_PCT = 'agency_fee_pct';
  const IS_AGENCY_FEE_DISABLED = 'is_agency_fee_disabled';
  const IS_DEFAULT_AGENCY_FEE = 'is_default_agency_fee';

  public function getFieldTypes() {
    return array(
      'agency_fee_pct' => 'float',
      'is_agency_fee_disabled' => 'bool',
      'is_default_agency_fee' => 'bool',
    );
  }
}
