<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class CustomConversionFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const AGGREGATION_RULE = 'aggregation_rule';
  const CREATION_TIME = 'creation_time';
  const CUSTOM_EVENT_TYPE = 'custom_event_type';
  const DEFAULT_CONVERSION_VALUE = 'default_conversion_value';
  const DESCRIPTION = 'description';
  const EVENT_SOURCE_TYPE = 'event_source_type';
  const FIRST_FIRED_TIME = 'first_fired_time';
  const ID = 'id';
  const IS_ARCHIVED = 'is_archived';
  const LAST_FIRED_TIME = 'last_fired_time';
  const NAME = 'name';
  const OFFLINE_CONVERSION_DATA_SET = 'offline_conversion_data_set';
  const PIXEL = 'pixel';
  const PIXEL_AGGREGATION_RULE = 'pixel_aggregation_rule';
  const PIXEL_RULE = 'pixel_rule';
  const RETENTION_DAYS = 'retention_days';
  const RULE = 'rule';
  const EVENT_SOURCE_ID = 'event_source_id';
  const PIXEL_ID = 'pixel_id';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'aggregation_rule' => 'string',
      'creation_time' => 'datetime',
      'custom_event_type' => 'CustomEventType',
      'default_conversion_value' => 'int',
      'description' => 'string',
      'event_source_type' => 'string',
      'first_fired_time' => 'datetime',
      'id' => 'string',
      'is_archived' => 'bool',
      'last_fired_time' => 'datetime',
      'name' => 'string',
      'offline_conversion_data_set' => 'Object',
      'pixel' => 'AdsPixel',
      'pixel_aggregation_rule' => 'string',
      'pixel_rule' => 'string',
      'retention_days' => 'unsigned int',
      'rule' => 'string',
      'event_source_id' => 'string',
      'pixel_id' => 'string',
    );
  }
}
