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
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AnalyticsSegmentFields extends AbstractEnum {

  const CUSTOM_AUDIENCE_INELIGIBLITY_REASONS = 'custom_audience_ineligiblity_reasons';
  const DESCRIPTION = 'description';
  const ESTIMATED_CUSTOM_AUDIENCE_SIZE = 'estimated_custom_audience_size';
  const EVENT_INFO_RULES = 'event_info_rules';
  const EVENT_RULES = 'event_rules';
  const EVENT_SOURCE = 'event_source';
  const FILTER_SET = 'filter_set';
  const HAS_DEMOGRAPHIC_RULES = 'has_demographic_rules';
  const ID = 'id';
  const IS_ALL_USER = 'is_all_user';
  const IS_ELIGIBLE_FOR_PUSH_CAMPAIGN = 'is_eligible_for_push_campaign';
  const IS_INTERNAL = 'is_internal';
  const NAME = 'name';
  const PERCENTILE_RULES = 'percentile_rules';
  const PUSH_BACKFILL_STATUS = 'push_backfill_status';
  const TIME_LAST_SEEN = 'time_last_seen';
  const TIME_LAST_UPDATED = 'time_last_updated';
  const USER_PROPERTY_RULES = 'user_property_rules';
  const WEB_PARAM_RULES = 'web_param_rules';

  public function getFieldTypes() {
    return array(
      'custom_audience_ineligiblity_reasons' => 'list<string>',
      'description' => 'string',
      'estimated_custom_audience_size' => 'unsigned int',
      'event_info_rules' => 'list<Object>',
      'event_rules' => 'list<Object>',
      'event_source' => 'ExternalEventSource',
      'filter_set' => 'string',
      'has_demographic_rules' => 'bool',
      'id' => 'string',
      'is_all_user' => 'bool',
      'is_eligible_for_push_campaign' => 'bool',
      'is_internal' => 'bool',
      'name' => 'string',
      'percentile_rules' => 'list<Object>',
      'push_backfill_status' => 'Object',
      'time_last_seen' => 'unsigned int',
      'time_last_updated' => 'unsigned int',
      'user_property_rules' => 'list<Object>',
      'web_param_rules' => 'list<Object>',
    );
  }
}
