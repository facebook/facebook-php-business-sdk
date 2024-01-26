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

class LookalikeSpecFields extends AbstractEnum {

  const COUNTRY = 'country';
  const IS_FINANCIAL_SERVICE = 'is_financial_service';
  const ORIGIN = 'origin';
  const ORIGIN_EVENT_NAME = 'origin_event_name';
  const ORIGIN_EVENT_SOURCE_NAME = 'origin_event_source_name';
  const ORIGIN_EVENT_SOURCE_TYPE = 'origin_event_source_type';
  const PRODUCT_SET_NAME = 'product_set_name';
  const RATIO = 'ratio';
  const STARTING_RATIO = 'starting_ratio';
  const TARGET_COUNTRIES = 'target_countries';
  const TARGET_COUNTRY_NAMES = 'target_country_names';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'country' => 'string',
      'is_financial_service' => 'bool',
      'origin' => 'list<Object>',
      'origin_event_name' => 'string',
      'origin_event_source_name' => 'string',
      'origin_event_source_type' => 'string',
      'product_set_name' => 'string',
      'ratio' => 'float',
      'starting_ratio' => 'float',
      'target_countries' => 'list<string>',
      'target_country_names' => 'list',
      'type' => 'string',
    );
  }
}
