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

class MinimumBudgetFields extends AbstractEnum {

  const CURRENCY = 'currency';
  const MIN_DAILY_BUDGET_HIGH_FREQ = 'min_daily_budget_high_freq';
  const MIN_DAILY_BUDGET_IMP = 'min_daily_budget_imp';
  const MIN_DAILY_BUDGET_LOW_FREQ = 'min_daily_budget_low_freq';
  const MIN_DAILY_BUDGET_VIDEO_VIEWS = 'min_daily_budget_video_views';

  public function getFieldTypes() {
    return array(
      'currency' => 'string',
      'min_daily_budget_high_freq' => 'int',
      'min_daily_budget_imp' => 'int',
      'min_daily_budget_low_freq' => 'int',
      'min_daily_budget_video_views' => 'int',
    );
  }
}
