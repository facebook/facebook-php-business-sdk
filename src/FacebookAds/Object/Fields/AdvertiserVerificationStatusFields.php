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

class AdvertiserVerificationStatusFields extends AbstractEnum {

  const BANNER_TYPE = 'banner_type';
  const GRACE_PERIOD_ENDS_AT = 'grace_period_ends_at';
  const UFAC_REDIRECT_URI = 'ufac_redirect_uri';
  const VERIFICATION_STATUS = 'verification_status';

  public function getFieldTypes() {
    return array(
      'banner_type' => 'string',
      'grace_period_ends_at' => 'datetime',
      'ufac_redirect_uri' => 'string',
      'verification_status' => 'string',
    );
  }
}
