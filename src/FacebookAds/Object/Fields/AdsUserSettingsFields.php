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

class AdsUserSettingsFields extends AbstractEnum {

  const ADGROUP_COLUMN_VISIBILITY = 'adgroup_column_visibility';
  const ADGROUP_NAME_TEMPLATE = 'adgroup_name_template';
  const ADGROUP_WIDTHS = 'adgroup_widths';
  const ADS_TOOL_VISITS = 'ads_tool_visits';
  const BOOKMARKED_PAGES = 'bookmarked_pages';
  const CAMPAIGN_COLUMN_VISIBILITY = 'campaign_column_visibility';
  const CAMPAIGN_GROUP_COLUMN_VISIBILITY = 'campaign_group_column_visibility';
  const CAMPAIGN_GROUP_NAME_TEMPLATE = 'campaign_group_name_template';
  const CAMPAIGN_GROUP_WIDTHS = 'campaign_group_widths';
  const CAMPAIGN_NAME_TEMPLATE = 'campaign_name_template';
  const CAMPAIGN_WIDTHS = 'campaign_widths';
  const DEFAULT_CREATION_MODE = 'default_creation_mode';
  const ID = 'id';
  const LAST_USED_POST_FORMAT = 'last_used_post_format';
  const LAST_VISITED_TIME = 'last_visited_time';
  const OPEN_TABS = 'open_tabs';
  const SELECTED_AD_ACCOUNT = 'selected_ad_account';
  const SELECTED_COMPARISON_TIMERANGE = 'selected_comparison_timerange';
  const SELECTED_PAGE = 'selected_page';
  const SELECTED_PAGE_SECTION = 'selected_page_section';
  const SELECTED_POWER_EDITOR_PANE = 'selected_power_editor_pane';
  const SELECTED_STAT_RANGE = 'selected_stat_range';
  const SHOULD_NOT_SHOW_PUBLISH_MESSAGE_ON_EDITOR_CLOSE = 'should_not_show_publish_message_on_editor_close';
  const UNOWNED_PAGES = 'unowned_pages';
  const USE_PE_CREATE_FLOW = 'use_pe_create_flow';
  const USE_STEPPER_PRIMARY_ENTRY = 'use_stepper_primary_entry';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'adgroup_column_visibility' => 'list<Object>',
      'adgroup_name_template' => 'Object',
      'adgroup_widths' => 'list<Object>',
      'ads_tool_visits' => 'list<Object>',
      'bookmarked_pages' => 'list<Page>',
      'campaign_column_visibility' => 'list<Object>',
      'campaign_group_column_visibility' => 'list<Object>',
      'campaign_group_name_template' => 'Object',
      'campaign_group_widths' => 'list<Object>',
      'campaign_name_template' => 'Object',
      'campaign_widths' => 'list<Object>',
      'default_creation_mode' => 'string',
      'id' => 'string',
      'last_used_post_format' => 'string',
      'last_visited_time' => 'datetime',
      'open_tabs' => 'list<string>',
      'selected_ad_account' => 'AdAccount',
      'selected_comparison_timerange' => 'Object',
      'selected_page' => 'Page',
      'selected_page_section' => 'string',
      'selected_power_editor_pane' => 'string',
      'selected_stat_range' => 'Object',
      'should_not_show_publish_message_on_editor_close' => 'bool',
      'unowned_pages' => 'list<Page>',
      'use_pe_create_flow' => 'bool',
      'use_stepper_primary_entry' => 'bool',
      'user' => 'User',
    );
  }
}
