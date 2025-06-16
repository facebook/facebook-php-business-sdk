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

class AdsPixelCAPIIntegrationQualityFields extends AbstractEnum {

  const ACR = 'acr';
  const DATA_FRESHNESS = 'data_freshness';
  const DEDUPE_KEY_FEEDBACK = 'dedupe_key_feedback';
  const EVENT_COVERAGE = 'event_coverage';
  const EVENT_MATCH_QUALITY = 'event_match_quality';
  const EVENT_NAME = 'event_name';
  const EVENT_POTENTIAL_ALY_ACR_INCREASE = 'event_potential_aly_acr_increase';

  public function getFieldTypes() {
    return array(
      'acr' => 'Object',
      'data_freshness' => 'Object',
      'dedupe_key_feedback' => 'list<Object>',
      'event_coverage' => 'Object',
      'event_match_quality' => 'Object',
      'event_name' => 'string',
      'event_potential_aly_acr_increase' => 'Object',
    );
  }
}
