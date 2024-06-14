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

class ConversionHealthKPIFields extends AbstractEnum {

  const HEALTH_INDICATOR = 'health_indicator';
  const IMPACTED_BROWSERS_MATCH_RATE = 'impacted_browsers_match_rate';
  const IMPACTED_BROWSERS_MATCH_RATE_MOM_TREND = 'impacted_browsers_match_rate_mom_trend';
  const IMPACTED_BROWSERS_TRAFFIC_SHARE = 'impacted_browsers_traffic_share';
  const IMPACTED_BROWSERS_TRAFFIC_SHARE_MOM_TREND = 'impacted_browsers_traffic_share_mom_trend';
  const MATCH_RATE = 'match_rate';
  const MATCH_RATE_MOM_TREND = 'match_rate_mom_trend';
  const MATCH_RATE_VERTICAL_BENCHMARK = 'match_rate_vertical_benchmark';
  const MATCH_RATE_VS_BENCHMARK_MOM_TREND = 'match_rate_vs_benchmark_mom_trend';

  public function getFieldTypes() {
    return array(
      'health_indicator' => 'string',
      'impacted_browsers_match_rate' => 'float',
      'impacted_browsers_match_rate_mom_trend' => 'float',
      'impacted_browsers_traffic_share' => 'float',
      'impacted_browsers_traffic_share_mom_trend' => 'float',
      'match_rate' => 'float',
      'match_rate_mom_trend' => 'float',
      'match_rate_vertical_benchmark' => 'float',
      'match_rate_vs_benchmark_mom_trend' => 'float',
    );
  }
}
