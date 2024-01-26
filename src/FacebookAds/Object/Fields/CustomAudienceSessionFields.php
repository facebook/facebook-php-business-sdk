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

class CustomAudienceSessionFields extends AbstractEnum {

  const END_TIME = 'end_time';
  const NUM_INVALID_ENTRIES = 'num_invalid_entries';
  const NUM_MATCHED = 'num_matched';
  const NUM_RECEIVED = 'num_received';
  const PROGRESS = 'progress';
  const SESSION_ID = 'session_id';
  const STAGE = 'stage';
  const START_TIME = 'start_time';

  public function getFieldTypes() {
    return array(
      'end_time' => 'string',
      'num_invalid_entries' => 'string',
      'num_matched' => 'string',
      'num_received' => 'string',
      'progress' => 'string',
      'session_id' => 'string',
      'stage' => 'string',
      'start_time' => 'string',
    );
  }
}
