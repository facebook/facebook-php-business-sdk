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

class CopyrightAttributionInsightsFields extends AbstractEnum {

  const L7_ATTRIBUTION_PAGE_VIEW = 'l7_attribution_page_view';
  const L7_ATTRIBUTION_PAGE_VIEW_DELTA = 'l7_attribution_page_view_delta';
  const L7_ATTRIBUTION_VIDEO_VIEW = 'l7_attribution_video_view';
  const L7_ATTRIBUTION_VIDEO_VIEW_DELTA = 'l7_attribution_video_view_delta';
  const METRICS_ENDING_DATE = 'metrics_ending_date';

  public function getFieldTypes() {
    return array(
      'l7_attribution_page_view' => 'int',
      'l7_attribution_page_view_delta' => 'float',
      'l7_attribution_video_view' => 'int',
      'l7_attribution_video_view_delta' => 'float',
      'metrics_ending_date' => 'string',
    );
  }
}
