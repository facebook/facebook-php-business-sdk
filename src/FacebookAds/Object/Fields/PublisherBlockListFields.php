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

class PublisherBlockListFields extends AbstractEnum {

  const APP_PUBLISHERS = 'app_publishers';
  const BUSINESS_OWNER_ID = 'business_owner_id';
  const ID = 'id';
  const IS_AUTO_BLOCKING_ON = 'is_auto_blocking_on';
  const IS_ELIGIBLE_AT_CAMPAIGN_LEVEL = 'is_eligible_at_campaign_level';
  const LAST_UPDATE_TIME = 'last_update_time';
  const LAST_UPDATE_USER = 'last_update_user';
  const NAME = 'name';
  const OWNER_AD_ACCOUNT_ID = 'owner_ad_account_id';
  const WEB_PUBLISHERS = 'web_publishers';

  public function getFieldTypes() {
    return array(
      'app_publishers' => 'list<Object>',
      'business_owner_id' => 'string',
      'id' => 'string',
      'is_auto_blocking_on' => 'bool',
      'is_eligible_at_campaign_level' => 'bool',
      'last_update_time' => 'datetime',
      'last_update_user' => 'string',
      'name' => 'string',
      'owner_ad_account_id' => 'string',
      'web_publishers' => 'list<Object>',
    );
  }
}
