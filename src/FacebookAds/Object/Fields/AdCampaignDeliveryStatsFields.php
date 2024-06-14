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

class AdCampaignDeliveryStatsFields extends AbstractEnum {

  const BID_RECOMMENDATION = 'bid_recommendation';
  const CURRENT_AVERAGE_COST = 'current_average_cost';
  const LAST_SIGNIFICANT_EDIT_TS = 'last_significant_edit_ts';
  const LEARNING_STAGE_EXIT_INFO = 'learning_stage_exit_info';
  const LEARNING_STAGE_INFO = 'learning_stage_info';
  const UNSUPPORTED_FEATURES = 'unsupported_features';

  public function getFieldTypes() {
    return array(
      'bid_recommendation' => 'int',
      'current_average_cost' => 'float',
      'last_significant_edit_ts' => 'int',
      'learning_stage_exit_info' => 'Object',
      'learning_stage_info' => 'AdCampaignLearningStageInfo',
      'unsupported_features' => 'list<map<string, AdCampaignDeliveryStatsUnsupportedReasons>>',
    );
  }
}
