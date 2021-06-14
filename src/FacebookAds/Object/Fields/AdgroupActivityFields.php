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

class AdgroupActivityFields extends AbstractEnum {

  const AD_CREATIVE_ID_NEW = 'ad_creative_id_new';
  const AD_CREATIVE_ID_OLD = 'ad_creative_id_old';
  const ASSET_FEED_ID_NEW = 'asset_feed_id_new';
  const ASSET_FEED_ID_OLD = 'asset_feed_id_old';
  const BID_AMOUNT_NEW = 'bid_amount_new';
  const BID_AMOUNT_OLD = 'bid_amount_old';
  const BID_INFO_NEW = 'bid_info_new';
  const BID_INFO_OLD = 'bid_info_old';
  const BID_TYPE_NEW = 'bid_type_new';
  const BID_TYPE_OLD = 'bid_type_old';
  const CONVERSION_SPECS_NEW = 'conversion_specs_new';
  const CONVERSION_SPECS_OLD = 'conversion_specs_old';
  const CREATED_TIME = 'created_time';
  const DISPLAY_SEQUENCE_NEW = 'display_sequence_new';
  const DISPLAY_SEQUENCE_OLD = 'display_sequence_old';
  const ENGAGEMENT_AUDIENCE_NEW = 'engagement_audience_new';
  const ENGAGEMENT_AUDIENCE_OLD = 'engagement_audience_old';
  const EVENT_TIME = 'event_time';
  const EVENT_TYPE = 'event_type';
  const FORCE_RUN_STATUS_NEW = 'force_run_status_new';
  const FORCE_RUN_STATUS_OLD = 'force_run_status_old';
  const FRIENDLY_NAME_NEW = 'friendly_name_new';
  const FRIENDLY_NAME_OLD = 'friendly_name_old';
  const ID = 'id';
  const IS_REVIEWER_ADMIN_NEW = 'is_reviewer_admin_new';
  const IS_REVIEWER_ADMIN_OLD = 'is_reviewer_admin_old';
  const OBJECTIVE_NEW = 'objective_new';
  const OBJECTIVE_OLD = 'objective_old';
  const OBJECTIVE_SOURCE_NEW = 'objective_source_new';
  const OBJECTIVE_SOURCE_OLD = 'objective_source_old';
  const PRIORITY_NEW = 'priority_new';
  const PRIORITY_OLD = 'priority_old';
  const REASON_NEW = 'reason_new';
  const REASON_OLD = 'reason_old';
  const RUN_STATUS_NEW = 'run_status_new';
  const RUN_STATUS_OLD = 'run_status_old';
  const SOURCE_ADGROUP_ID_NEW = 'source_adgroup_id_new';
  const SOURCE_ADGROUP_ID_OLD = 'source_adgroup_id_old';
  const START_TIME_NEW = 'start_time_new';
  const START_TIME_OLD = 'start_time_old';
  const STOP_TIME_NEW = 'stop_time_new';
  const STOP_TIME_OLD = 'stop_time_old';
  const TARGET_SPEC_ID_NEW = 'target_spec_id_new';
  const TARGET_SPEC_ID_OLD = 'target_spec_id_old';
  const TARGETS_SPEC_NEW = 'targets_spec_new';
  const TARGETS_SPEC_OLD = 'targets_spec_old';
  const TRACKING_SPECS_NEW = 'tracking_specs_new';
  const TRACKING_SPECS_OLD = 'tracking_specs_old';
  const UPDATE_TIME_NEW = 'update_time_new';
  const UPDATE_TIME_OLD = 'update_time_old';
  const VIEW_TAGS_NEW = 'view_tags_new';
  const VIEW_TAGS_OLD = 'view_tags_old';

  public function getFieldTypes() {
    return array(
      'ad_creative_id_new' => 'AdCreative',
      'ad_creative_id_old' => 'AdCreative',
      'asset_feed_id_new' => 'string',
      'asset_feed_id_old' => 'string',
      'bid_amount_new' => 'int',
      'bid_amount_old' => 'int',
      'bid_info_new' => 'map<string, int>',
      'bid_info_old' => 'map<string, int>',
      'bid_type_new' => 'string',
      'bid_type_old' => 'string',
      'conversion_specs_new' => 'list<Object>',
      'conversion_specs_old' => 'list<Object>',
      'created_time' => 'datetime',
      'display_sequence_new' => 'int',
      'display_sequence_old' => 'int',
      'engagement_audience_new' => 'bool',
      'engagement_audience_old' => 'bool',
      'event_time' => 'datetime',
      'event_type' => 'string',
      'force_run_status_new' => 'bool',
      'force_run_status_old' => 'bool',
      'friendly_name_new' => 'string',
      'friendly_name_old' => 'string',
      'id' => 'string',
      'is_reviewer_admin_new' => 'bool',
      'is_reviewer_admin_old' => 'bool',
      'objective_new' => 'ObjectiveNew',
      'objective_old' => 'ObjectiveOld',
      'objective_source_new' => 'string',
      'objective_source_old' => 'string',
      'priority_new' => 'int',
      'priority_old' => 'int',
      'reason_new' => 'string',
      'reason_old' => 'string',
      'run_status_new' => 'string',
      'run_status_old' => 'string',
      'source_adgroup_id_new' => 'Ad',
      'source_adgroup_id_old' => 'Ad',
      'start_time_new' => 'datetime',
      'start_time_old' => 'datetime',
      'stop_time_new' => 'datetime',
      'stop_time_old' => 'datetime',
      'target_spec_id_new' => 'string',
      'target_spec_id_old' => 'string',
      'targets_spec_new' => 'Object',
      'targets_spec_old' => 'Object',
      'tracking_specs_new' => 'list<Object>',
      'tracking_specs_old' => 'list<Object>',
      'update_time_new' => 'datetime',
      'update_time_old' => 'datetime',
      'view_tags_new' => 'list<string>',
      'view_tags_old' => 'list<string>',
    );
  }
}
