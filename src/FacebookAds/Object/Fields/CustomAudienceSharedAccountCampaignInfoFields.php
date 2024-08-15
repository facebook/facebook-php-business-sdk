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

class CustomAudienceSharedAccountCampaignInfoFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_NAME = 'account_name';
  const ADSET_EXCLUDING_COUNT = 'adset_excluding_count';
  const ADSET_INCLUDING_COUNT = 'adset_including_count';
  const CAMPAIGN_DELIVERY_STATUS = 'campaign_delivery_status';
  const CAMPAIGN_OBJECTIVE = 'campaign_objective';
  const CAMPAIGN_PAGES = 'campaign_pages';
  const CAMPAIGN_SCHEDULE = 'campaign_schedule';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'account_name' => 'string',
      'adset_excluding_count' => 'unsigned int',
      'adset_including_count' => 'unsigned int',
      'campaign_delivery_status' => 'string',
      'campaign_objective' => 'string',
      'campaign_pages' => 'list<Object>',
      'campaign_schedule' => 'string',
    );
  }
}
