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

class ProductCatalogProductFeedsPostFields extends AbstractEnum {

  const COUNTRY = 'country';
  const CREATED_TIME = 'created_time';
  const DEFAULT_CURRENCY = 'default_currency';
  const DELETION_ENABLED = 'deletion_enabled';
  const DELIMITER = 'delimiter';
  const ENCODING = 'encoding';
  const ERRORS = 'errors';
  const FILE_NAME = 'file_name';
  const ID = 'id';
  const INGESTION_SOURCE_TYPE = 'ingestion_source_type';
  const ITEM_SUB_TYPE = 'item_sub_type';
  const NAME = 'name';
  const OVERRIDE_TYPE = 'override_type';
  const PRIMARY_FEEDS = 'primary_feeds';
  const PRODUCT_COUNT = 'product_count';
  const QUOTED_FIELDS_MODE = 'quoted_fields_mode';
  const SCHEDULE = 'schedule';
  const UPDATE_SCHEDULE = 'update_schedule';

  public function getFieldTypes() {
    return array(
      'country' => 'string',
      'created_time' => 'string',
      'default_currency' => 'string',
      'deletion_enabled' => 'bool',
      'delimiter' => 'Delimiter',
      'encoding' => 'Encoding',
      'errors' => 'list<object>',
      'file_name' => 'string',
      'id' => 'int',
      'ingestion_source_type' => 'IngestionSourceType',
      'item_sub_type' => 'ItemSubType',
      'name' => 'string',
      'override_type' => 'OverrideType',
      'primary_feeds' => 'list<int>',
      'product_count' => 'int',
      'quoted_fields_mode' => 'QuotedFieldsMode',
      'schedule' => 'object',
      'update_schedule' => 'object',
    );
  }
}
