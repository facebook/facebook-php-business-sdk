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

class AdCampaignMultiAdsFields extends AbstractEnum {

  const ENROLL_STATUS = 'enroll_status';
  const SOURCE_TYPE = 'source_type';

  public function getFieldTypes() {
    return array(
      'enroll_status' => 'string',
      'source_type' => 'string',
    );
  }
}
