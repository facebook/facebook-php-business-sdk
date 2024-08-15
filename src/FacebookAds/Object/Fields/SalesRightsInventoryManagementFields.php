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

class SalesRightsInventoryManagementFields extends AbstractEnum {

  const AVAILABLE_IMPRESSIONS = 'available_impressions';
  const BOOKED_IMPRESSIONS = 'booked_impressions';
  const OVERBOOKED_IMPRESSIONS = 'overbooked_impressions';
  const SUPPORTED_COUNTRIES = 'supported_countries';
  const TOTAL_IMPRESSIONS = 'total_impressions';
  const UNAVAILABLE_IMPRESSIONS = 'unavailable_impressions';
  const WARNING_MESSAGES = 'warning_messages';

  public function getFieldTypes() {
    return array(
      'available_impressions' => 'int',
      'booked_impressions' => 'int',
      'overbooked_impressions' => 'int',
      'supported_countries' => 'list<string>',
      'total_impressions' => 'int',
      'unavailable_impressions' => 'int',
      'warning_messages' => 'list<string>',
    );
  }
}
