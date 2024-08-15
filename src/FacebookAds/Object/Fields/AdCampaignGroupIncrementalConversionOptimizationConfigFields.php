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

class AdCampaignGroupIncrementalConversionOptimizationConfigFields extends AbstractEnum {

  const ACTION_TYPE = 'action_type';
  const AD_STUDY_END_TIME = 'ad_study_end_time';
  const AD_STUDY_ID = 'ad_study_id';
  const AD_STUDY_NAME = 'ad_study_name';
  const AD_STUDY_START_TIME = 'ad_study_start_time';
  const CELL_ID = 'cell_id';
  const CELL_NAME = 'cell_name';
  const HOLDOUT_SIZE = 'holdout_size';
  const ICO_TYPE = 'ico_type';
  const OBJECTIVES = 'objectives';

  public function getFieldTypes() {
    return array(
      'action_type' => 'string',
      'ad_study_end_time' => 'datetime',
      'ad_study_id' => 'string',
      'ad_study_name' => 'string',
      'ad_study_start_time' => 'datetime',
      'cell_id' => 'string',
      'cell_name' => 'string',
      'holdout_size' => 'float',
      'ico_type' => 'string',
      'objectives' => 'list<Object>',
    );
  }
}
