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

class AdsCustomPivotsPreviewFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_NAME = 'account_name';
  const AD_ID = 'ad_id';
  const AD_NAME = 'ad_name';
  const ADSET_ID = 'adset_id';
  const ADSET_NAME = 'adset_name';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_NAME = 'campaign_name';
  const CUSTOM_BREAKDOWN = 'custom_breakdown';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'account_name' => 'string',
      'ad_id' => 'string',
      'ad_name' => 'string',
      'adset_id' => 'string',
      'adset_name' => 'string',
      'campaign_id' => 'string',
      'campaign_name' => 'string',
      'custom_breakdown' => 'list<string>',
    );
  }
}
