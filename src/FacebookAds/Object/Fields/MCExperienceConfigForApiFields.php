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

class MCExperienceConfigForApiFields extends AbstractEnum {

  const IS_CAMPAIGN_ENABLED = 'is_campaign_enabled';
  const IS_TERMS_SIGNED = 'is_terms_signed';
  const MERCHANT_TYPE = 'merchant_type';

  public function getFieldTypes() {
    return array(
      'is_campaign_enabled' => 'bool',
      'is_terms_signed' => 'bool',
      'merchant_type' => 'string',
    );
  }
}
