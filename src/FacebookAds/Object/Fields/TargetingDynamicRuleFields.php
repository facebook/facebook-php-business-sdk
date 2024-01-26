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

class TargetingDynamicRuleFields extends AbstractEnum {

  const FIELD_ACTION_TYPE = 'action.type';
  const AD_GROUP_ID = 'ad_group_id';
  const CAMPAIGN_GROUP_ID = 'campaign_group_id';
  const CAMPAIGN_ID = 'campaign_id';
  const IMPRESSION_COUNT = 'impression_count';
  const PAGE_ID = 'page_id';
  const POST = 'post';
  const RETENTION_SECONDS = 'retention_seconds';

  public function getFieldTypes() {
    return array(
      'action.type' => 'string',
      'ad_group_id' => 'string',
      'campaign_group_id' => 'string',
      'campaign_id' => 'string',
      'impression_count' => 'string',
      'page_id' => 'string',
      'post' => 'string',
      'retention_seconds' => 'string',
    );
  }
}
