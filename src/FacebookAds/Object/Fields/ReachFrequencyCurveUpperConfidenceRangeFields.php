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

class ReachFrequencyCurveUpperConfidenceRangeFields extends AbstractEnum {

  const IMPRESSION_UPPER = 'impression_upper';
  const NUM_POINTS = 'num_points';
  const REACH = 'reach';
  const REACH_UPPER = 'reach_upper';
  const UNIQ_VIDEO_VIEWS_2S_UPPER = 'uniq_video_views_2s_upper';
  const VIDEO_VIEWS_2S_UPPER = 'video_views_2s_upper';

  public function getFieldTypes() {
    return array(
      'impression_upper' => 'list<int>',
      'num_points' => 'unsigned int',
      'reach' => 'list<int>',
      'reach_upper' => 'list<int>',
      'uniq_video_views_2s_upper' => 'list<int>',
      'video_views_2s_upper' => 'list<int>',
    );
  }
}
