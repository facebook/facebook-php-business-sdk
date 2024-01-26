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

class BusinessPartnerPremiumOptionsFields extends AbstractEnum {

  const ENABLE_BASKET_INSIGHT = 'enable_basket_insight';
  const ENABLE_EXTENDED_AUDIENCE_RETARGETING = 'enable_extended_audience_retargeting';
  const RETAILER_CUSTOM_AUDIENCE_CONFIG = 'retailer_custom_audience_config';

  public function getFieldTypes() {
    return array(
      'enable_basket_insight' => 'bool',
      'enable_extended_audience_retargeting' => 'bool',
      'retailer_custom_audience_config' => 'Object',
    );
  }
}
