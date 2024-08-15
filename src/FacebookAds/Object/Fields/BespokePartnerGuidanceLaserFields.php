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

class BespokePartnerGuidanceLaserFields extends AbstractEnum {

  const BUSINESS = 'business';
  const CAMPAIGN_GROUP = 'campaign_group';
  const CPA_IMPROVEMENT = 'cpa_improvement';
  const GUIDANCE_TYPE = 'guidance_type';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'campaign_group' => 'Campaign',
      'cpa_improvement' => 'float',
      'guidance_type' => 'string',
      'id' => 'string',
    );
  }
}
