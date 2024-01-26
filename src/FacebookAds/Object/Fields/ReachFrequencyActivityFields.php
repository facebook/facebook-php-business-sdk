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

class ReachFrequencyActivityFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const CAMPAIGN_ACTIVE = 'campaign_active';
  const CAMPAIGN_STARTED = 'campaign_started';
  const CREATIVE_UPLOADED = 'creative_uploaded';
  const IO_APPROVED = 'io_approved';
  const SF_LINK = 'sf_link';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'campaign_active' => 'bool',
      'campaign_started' => 'bool',
      'creative_uploaded' => 'bool',
      'io_approved' => 'bool',
      'sf_link' => 'string',
    );
  }
}
