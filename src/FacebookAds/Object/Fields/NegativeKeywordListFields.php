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

class NegativeKeywordListFields extends AbstractEnum {

  const APPLIED_ACTIVE_AD_CAMPAIGN_GROUPS = 'applied_active_ad_campaign_groups';
  const APPLIED_INACTIVE_AD_CAMPAIGN_GROUPS = 'applied_inactive_ad_campaign_groups';
  const CREATOR_ID = 'creator_id';
  const ID = 'id';
  const IS_FULLY_REVIEWED = 'is_fully_reviewed';
  const LAST_UPDATE_TIME = 'last_update_time';
  const LAST_UPDATE_USER_ID = 'last_update_user_id';
  const LIST_NAME = 'list_name';
  const TOTAL_APPROVED_KEYWORD_COUNT = 'total_approved_keyword_count';
  const TOTAL_DECLINED_KEYWORD_COUNT = 'total_declined_keyword_count';
  const TOTAL_NEGATIVE_KEYWORD_COUNT = 'total_negative_keyword_count';
  const TOTAL_VALIDATED_KEYWORD_COUNT = 'total_validated_keyword_count';

  public function getFieldTypes() {
    return array(
      'applied_active_ad_campaign_groups' => 'list<map<string, string>>',
      'applied_inactive_ad_campaign_groups' => 'list<map<string, string>>',
      'creator_id' => 'string',
      'id' => 'string',
      'is_fully_reviewed' => 'bool',
      'last_update_time' => 'datetime',
      'last_update_user_id' => 'string',
      'list_name' => 'string',
      'total_approved_keyword_count' => 'int',
      'total_declined_keyword_count' => 'int',
      'total_negative_keyword_count' => 'int',
      'total_validated_keyword_count' => 'int',
    );
  }
}
