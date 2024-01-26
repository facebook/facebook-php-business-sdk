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

class ReachFrequencyCurveLowerConfidenceRangeFields extends AbstractEnum {

  const IMPRESSION_LOWER = 'impression_lower';
  const NUM_POINTS = 'num_points';
  const REACH = 'reach';
  const REACH_LOWER = 'reach_lower';
  const UNIQ_VIDEO_VIEWS_2S_LOWER = 'uniq_video_views_2s_lower';
  const VIDEO_VIEWS_2S_LOWER = 'video_views_2s_lower';

  public function getFieldTypes() {
    return array(
      'impression_lower' => 'list<int>',
      'num_points' => 'unsigned int',
      'reach' => 'list<int>',
      'reach_lower' => 'list<int>',
      'uniq_video_views_2s_lower' => 'list<int>',
      'video_views_2s_lower' => 'list<int>',
    );
  }
}
