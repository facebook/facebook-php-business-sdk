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

class ReachFrequencySpecFields extends AbstractEnum {

  const COUNTRIES = 'countries';
  const DEFAULT_CREATION_DATA = 'default_creation_data';
  const GLOBAL_IO_MAX_CAMPAIGN_DURATION = 'global_io_max_campaign_duration';
  const MAX_CAMPAIGN_DURATION = 'max_campaign_duration';
  const MAX_DAYS_TO_FINISH = 'max_days_to_finish';
  const MAX_PAUSE_WITHOUT_PREDICTION_RERUN = 'max_pause_without_prediction_rerun';
  const MIN_CAMPAIGN_DURATION = 'min_campaign_duration';
  const MIN_REACH_LIMITS = 'min_reach_limits';

  public function getFieldTypes() {
    return array(
      'countries' => 'list<string>',
      'default_creation_data' => 'Object',
      'global_io_max_campaign_duration' => 'unsigned int',
      'max_campaign_duration' => 'Object',
      'max_days_to_finish' => 'Object',
      'max_pause_without_prediction_rerun' => 'Object',
      'min_campaign_duration' => 'Object',
      'min_reach_limits' => 'Object',
    );
  }
}
