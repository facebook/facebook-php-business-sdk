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

class RegionalRegulationIdentitiesFields extends AbstractEnum {

  const TAIWAN_FINSERV_BENEFICIARY = 'taiwan_finserv_beneficiary';
  const TAIWAN_FINSERV_PAYER = 'taiwan_finserv_payer';

  public function getFieldTypes() {
    return array(
      'taiwan_finserv_beneficiary' => 'string',
      'taiwan_finserv_payer' => 'string',
    );
  }
}
