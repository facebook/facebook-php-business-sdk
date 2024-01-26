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

class AdAccountIosFourteenCampaignLimitsFields extends AbstractEnum {

  const CAMPAIGN_GROUP_LIMIT = 'campaign_group_limit';
  const CAMPAIGN_GROUP_LIMITS_DETAILS = 'campaign_group_limits_details';
  const CAMPAIGN_LIMIT = 'campaign_limit';

  public function getFieldTypes() {
    return array(
      'campaign_group_limit' => 'int',
      'campaign_group_limits_details' => 'list<Object>',
      'campaign_limit' => 'int',
    );
  }
}
