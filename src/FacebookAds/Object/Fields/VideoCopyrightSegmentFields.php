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

class VideoCopyrightSegmentFields extends AbstractEnum {

  const DURATION_IN_SEC = 'duration_in_sec';
  const MEDIA_TYPE = 'media_type';
  const START_TIME_IN_SEC = 'start_time_in_sec';

  public function getFieldTypes() {
    return array(
      'duration_in_sec' => 'float',
      'media_type' => 'string',
      'start_time_in_sec' => 'float',
    );
  }
}
