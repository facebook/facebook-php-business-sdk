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

class AdCampaignLearningStageInfoFields extends AbstractEnum {

  const ATTRIBUTION_WINDOWS = 'attribution_windows';
  const CAS_SEGMENT = 'cas_segment';
  const CONVERSIONS = 'conversions';
  const CURRENT_BUDGET_PREDICTION = 'current_budget_prediction';
  const DYNAMIC_LP_CONVERSIONS_THRESHOLD = 'dynamic_lp_conversions_threshold';
  const DYNAMIC_LP_DAYS_THRESHOLD = 'dynamic_lp_days_threshold';
  const DYNAMIC_LP_STATUS = 'dynamic_lp_status';
  const IS_ONE_TO_ONE_CBO_BUDGET = 'is_one_to_one_cbo_budget';
  const LAST_SIG_EDIT_TS = 'last_sig_edit_ts';
  const RECOMMENDED_BUDGET_PREDICTION = 'recommended_budget_prediction';
  const SIGEDIT_REMOVAL = 'sigedit_removal';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'attribution_windows' => 'list<string>',
      'cas_segment' => 'string',
      'conversions' => 'unsigned int',
      'current_budget_prediction' => 'Object',
      'dynamic_lp_conversions_threshold' => 'unsigned int',
      'dynamic_lp_days_threshold' => 'unsigned int',
      'dynamic_lp_status' => 'string',
      'is_one_to_one_cbo_budget' => 'bool',
      'last_sig_edit_ts' => 'int',
      'recommended_budget_prediction' => 'Object',
      'sigedit_removal' => 'bool',
      'status' => 'string',
    );
  }
}
