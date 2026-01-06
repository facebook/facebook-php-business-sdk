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

class AdAccountAgencyFeeConfigFields extends AbstractEnum {

  const CAN_ADD_AGENCY_FEE_TO_INVOICE = 'can_add_agency_fee_to_invoice';
  const DEFAULT_AGENCY_FEE_PCT = 'default_agency_fee_pct';
  const ID = 'id';
  const IS_AGENCY_FEE_DISABLED = 'is_agency_fee_disabled';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'can_add_agency_fee_to_invoice' => 'bool',
      'default_agency_fee_pct' => 'float',
      'id' => 'string',
      'is_agency_fee_disabled' => 'bool',
      'status' => 'Status',
    );
  }
}
