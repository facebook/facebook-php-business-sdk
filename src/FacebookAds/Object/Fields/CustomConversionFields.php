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

class CustomConversionFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AGGREGATION_RULE = 'aggregation_rule';
  const BUSINESS = 'business';
  const CREATION_TIME = 'creation_time';
  const CUSTOM_EVENT_TYPE = 'custom_event_type';
  const DATA_SOURCES = 'data_sources';
  const DEFAULT_CONVERSION_VALUE = 'default_conversion_value';
  const DESCRIPTION = 'description';
  const EVENT_SOURCE_TYPE = 'event_source_type';
  const FIRST_FIRED_TIME = 'first_fired_time';
  const ID = 'id';
  const IS_ARCHIVED = 'is_archived';
  const IS_UNAVAILABLE = 'is_unavailable';
  const LAST_FIRED_TIME = 'last_fired_time';
  const NAME = 'name';
  const OFFLINE_CONVERSION_DATA_SET = 'offline_conversion_data_set';
  const PIXEL = 'pixel';
  const RETENTION_DAYS = 'retention_days';
  const RULE = 'rule';
  const ADVANCED_RULE = 'advanced_rule';
  const EVENT_SOURCE_ID = 'event_source_id';
  const CUSTOM_CONVERSION_ID = 'custom_conversion_id';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'aggregation_rule' => 'string',
      'business' => 'Business',
      'creation_time' => 'datetime',
      'custom_event_type' => 'CustomEventType',
      'data_sources' => 'list<ExternalEventSource>',
      'default_conversion_value' => 'int',
      'description' => 'string',
      'event_source_type' => 'string',
      'first_fired_time' => 'datetime',
      'id' => 'string',
      'is_archived' => 'bool',
      'is_unavailable' => 'bool',
      'last_fired_time' => 'datetime',
      'name' => 'string',
      'offline_conversion_data_set' => 'OfflineConversionDataSet',
      'pixel' => 'AdsPixel',
      'retention_days' => 'unsigned int',
      'rule' => 'string',
      'advanced_rule' => 'string',
      'event_source_id' => 'string',
      'custom_conversion_id' => 'string',
    );
  }
}
