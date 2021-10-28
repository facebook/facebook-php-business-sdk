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

class ProductFeedFields extends AbstractEnum {

  const COUNTRY = 'country';
  const CREATED_TIME = 'created_time';
  const DEFAULT_CURRENCY = 'default_currency';
  const DELETION_ENABLED = 'deletion_enabled';
  const DELIMITER = 'delimiter';
  const ENCODING = 'encoding';
  const FILE_NAME = 'file_name';
  const ID = 'id';
  const INGESTION_SOURCE_TYPE = 'ingestion_source_type';
  const ITEM_SUB_TYPE = 'item_sub_type';
  const LATEST_UPLOAD = 'latest_upload';
  const MIGRATED_FROM_FEED_ID = 'migrated_from_feed_id';
  const NAME = 'name';
  const OVERRIDE_TYPE = 'override_type';
  const PRIMARY_FEEDS = 'primary_feeds';
  const PRODUCT_COUNT = 'product_count';
  const QUOTED_FIELDS_MODE = 'quoted_fields_mode';
  const SCHEDULE = 'schedule';
  const SUPPLEMENTARY_FEEDS = 'supplementary_feeds';
  const UPDATE_SCHEDULE = 'update_schedule';
  const FEED_TYPE = 'feed_type';
  const OVERRIDE_VALUE = 'override_value';
  const PRIMARY_FEED_IDS = 'primary_feed_ids';
  const RULES = 'rules';
  const SELECTED_OVERRIDE_FIELDS = 'selected_override_fields';

  public function getFieldTypes() {
    return array(
      'country' => 'string',
      'created_time' => 'datetime',
      'default_currency' => 'string',
      'deletion_enabled' => 'bool',
      'delimiter' => 'Delimiter',
      'encoding' => 'string',
      'file_name' => 'string',
      'id' => 'string',
      'ingestion_source_type' => 'string',
      'item_sub_type' => 'string',
      'latest_upload' => 'ProductFeedUpload',
      'migrated_from_feed_id' => 'string',
      'name' => 'string',
      'override_type' => 'string',
      'primary_feeds' => 'list<string>',
      'product_count' => 'int',
      'quoted_fields_mode' => 'QuotedFieldsMode',
      'schedule' => 'ProductFeedSchedule',
      'supplementary_feeds' => 'list<string>',
      'update_schedule' => 'ProductFeedSchedule',
      'feed_type' => 'FeedType',
      'override_value' => 'string',
      'primary_feed_ids' => 'list<string>',
      'rules' => 'list<string>',
      'selected_override_fields' => 'list<string>',
    );
  }
}
