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

class CreativeReadinessFields extends AbstractEnum {

  const AD_IDS = 'ad_ids';
  const ANALYSIS_STATUS = 'analysis_status';
  const ASSET_TYPE = 'asset_type';
  const CHECKS = 'checks';
  const CREATIVE_ID = 'creative_id';

  public function getFieldTypes() {
    return array(
      'ad_ids' => 'list<string>',
      'analysis_status' => 'string',
      'asset_type' => 'string',
      'checks' => 'list<Object>',
      'creative_id' => 'string',
    );
  }
}
