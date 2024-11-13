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

class ALMEventFields extends AbstractEnum {

  const AD_ACCOUNT_IDS = 'ad_account_ids';
  const CAMPAIGN_IDS = 'campaign_ids';
  const CHANNEL = 'channel';
  const EVENT = 'event';
  const EVENT_TIME = 'event_time';
  const GUIDANCE = 'guidance';
  const GUIDANCE_DETAIL = 'guidance_detail';
  const ID = 'id';
  const PARENT_ADVERTISER_IDS = 'parent_advertiser_ids';
  const RESELLER_BUSINESS_ID = 'reseller_business_id';
  const SUB_CHANNEL = 'sub_channel';
  const USER_ID = 'user_id';

  public function getFieldTypes() {
    return array(
      'ad_account_ids' => 'list<string>',
      'campaign_ids' => 'list<string>',
      'channel' => 'string',
      'event' => 'string',
      'event_time' => 'datetime',
      'guidance' => 'string',
      'guidance_detail' => 'string',
      'id' => 'string',
      'parent_advertiser_ids' => 'list<string>',
      'reseller_business_id' => 'string',
      'sub_channel' => 'string',
      'user_id' => 'string',
    );
  }
}
