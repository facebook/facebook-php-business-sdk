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
      'ingestion_source_type' => 'IngestionSourceType',
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
