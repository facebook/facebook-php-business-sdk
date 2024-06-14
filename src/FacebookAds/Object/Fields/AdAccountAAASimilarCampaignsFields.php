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

class AdAccountAAASimilarCampaignsFields extends AbstractEnum {

  const SIMILAR_CAMPAIGN_LIMIT = 'similar_campaign_limit';
  const SIMILAR_CAMPAIGNS_INFO = 'similar_campaigns_info';
  const USED_CAMPAIGN_SLOTS = 'used_campaign_slots';

  public function getFieldTypes() {
    return array(
      'similar_campaign_limit' => 'unsigned int',
      'similar_campaigns_info' => 'list<map<string, Object>>',
      'used_campaign_slots' => 'unsigned int',
    );
  }
}
