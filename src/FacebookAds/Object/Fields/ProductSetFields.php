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

class ProductSetFields extends AbstractEnum {

  const AUTO_CREATION_URL = 'auto_creation_url';
  const FILTER = 'filter';
  const ID = 'id';
  const LATEST_METADATA = 'latest_metadata';
  const LIVE_METADATA = 'live_metadata';
  const NAME = 'name';
  const ORDERING_INFO = 'ordering_info';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCT_COUNT = 'product_count';
  const RETAILER_ID = 'retailer_id';
  const METADATA = 'metadata';
  const PUBLISH_TO_SHOPS = 'publish_to_shops';

  public function getFieldTypes() {
    return array(
      'auto_creation_url' => 'string',
      'filter' => 'string',
      'id' => 'string',
      'latest_metadata' => 'ProductSetMetadata',
      'live_metadata' => 'ProductSetMetadata',
      'name' => 'string',
      'ordering_info' => 'list<int>',
      'product_catalog' => 'ProductCatalog',
      'product_count' => 'unsigned int',
      'retailer_id' => 'string',
      'metadata' => 'map',
      'publish_to_shops' => 'list<map>',
    );
  }
}
