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

class AdAccountUserSettingsFields extends AbstractEnum {

  const AD_ACCOUNT = 'ad_account';
  const AD_OBJECT_EXPORT_FORMAT = 'ad_object_export_format';
  const AUTO_REVIEW_VIDEO_CAPTION = 'auto_review_video_caption';
  const COLUMN_SUGGESTION_STATUS = 'column_suggestion_status';
  const DEFAULT_ACCOUNT_OVERVIEW_AGEGENDER_METRICS = 'default_account_overview_agegender_metrics';
  const DEFAULT_ACCOUNT_OVERVIEW_LOCATION_METRICS = 'default_account_overview_location_metrics';
  const DEFAULT_ACCOUNT_OVERVIEW_METRICS = 'default_account_overview_metrics';
  const DEFAULT_ACCOUNT_OVERVIEW_TIME_METRICS = 'default_account_overview_time_metrics';
  const DEFAULT_BUILTIN_COLUMN_PRESET = 'default_builtin_column_preset';
  const DEFAULT_NAM_TIME_RANGE = 'default_nam_time_range';
  const DRAFT_MODE_ENABLED = 'draft_mode_enabled';
  const EXPORT_DELETED_ITEMS_WITH_DELIVERY = 'export_deleted_items_with_delivery';
  const EXPORT_SUMMARY_ROW = 'export_summary_row';
  const ID = 'id';
  const LAST_USED_COLUMNS = 'last_used_columns';
  const LAST_USED_PE_FILTERS = 'last_used_pe_filters';
  const RB_EXPORT_FORMAT = 'rb_export_format';
  const RB_EXPORT_RAW_DATA = 'rb_export_raw_data';
  const RB_EXPORT_SUMMARY_ROW = 'rb_export_summary_row';
  const SHOW_ARCHIVED_DATA = 'show_archived_data';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'ad_account' => 'AdAccount',
      'ad_object_export_format' => 'string',
      'auto_review_video_caption' => 'bool',
      'column_suggestion_status' => 'string',
      'default_account_overview_agegender_metrics' => 'list<string>',
      'default_account_overview_location_metrics' => 'list<string>',
      'default_account_overview_metrics' => 'list<string>',
      'default_account_overview_time_metrics' => 'list<string>',
      'default_builtin_column_preset' => 'string',
      'default_nam_time_range' => 'string',
      'draft_mode_enabled' => 'bool',
      'export_deleted_items_with_delivery' => 'bool',
      'export_summary_row' => 'bool',
      'id' => 'string',
      'last_used_columns' => 'Object',
      'last_used_pe_filters' => 'list<Object>',
      'rb_export_format' => 'string',
      'rb_export_raw_data' => 'bool',
      'rb_export_summary_row' => 'bool',
      'show_archived_data' => 'bool',
      'user' => 'User',
    );
  }
}
