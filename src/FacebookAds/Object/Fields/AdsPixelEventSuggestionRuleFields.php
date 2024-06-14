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

class AdsPixelEventSuggestionRuleFields extends AbstractEnum {

  const FIELD_7D_VOLUME = '7d_volume';
  const DISMISSED = 'dismissed';
  const END_TIME = 'end_time';
  const EVENT_TYPE = 'event_type';
  const RANK = 'rank';
  const RULE = 'rule';
  const SAMPLE_URLS = 'sample_urls';
  const START_TIME = 'start_time';

  public function getFieldTypes() {
    return array(
      '7d_volume' => 'int',
      'dismissed' => 'bool',
      'end_time' => 'datetime',
      'event_type' => 'string',
      'rank' => 'int',
      'rule' => 'string',
      'sample_urls' => 'list<string>',
      'start_time' => 'datetime',
    );
  }
}
