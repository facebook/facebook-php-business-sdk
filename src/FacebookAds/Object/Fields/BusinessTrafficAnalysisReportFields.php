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

class BusinessTrafficAnalysisReportFields extends AbstractEnum {

  const AUDIENCE_LOCATION = 'audience_location';
  const EVENT_CATEGORY = 'event_category';
  const TRAFFIC_ANALYSIS_IMPRESSIONS = 'traffic_analysis_impressions';

  public function getFieldTypes() {
    return array(
      'audience_location' => 'list<Object>',
      'event_category' => 'list<Object>',
      'traffic_analysis_impressions' => 'list<Object>',
    );
  }
}
