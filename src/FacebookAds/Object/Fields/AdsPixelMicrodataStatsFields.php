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

class AdsPixelMicrodataStatsFields extends AbstractEnum {

  const ALLOWED_DOMAINS = 'allowed_domains';
  const ERRORS_STATS_FOR_TIME_RANGES = 'errors_stats_for_time_ranges';
  const HAS_VALID_EVENTS = 'has_valid_events';
  const SUGGESTED_ALLOWED_DOMAINS_COUNT_MAX = 'suggested_allowed_domains_count_max';
  const SUGGESTED_TRUSTED_DOMAINS = 'suggested_trusted_domains';

  public function getFieldTypes() {
    return array(
      'allowed_domains' => 'list<string>',
      'errors_stats_for_time_ranges' => 'list<Object>',
      'has_valid_events' => 'bool',
      'suggested_allowed_domains_count_max' => 'int',
      'suggested_trusted_domains' => 'list<string>',
    );
  }
}
