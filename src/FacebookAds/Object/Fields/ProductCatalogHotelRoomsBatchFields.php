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

class ProductCatalogHotelRoomsBatchFields extends AbstractEnum {

  const ERRORS = 'errors';
  const ERRORS_TOTAL_COUNT = 'errors_total_count';
  const HANDLE = 'handle';
  const STATUS = 'status';
  const FILE = 'file';
  const PASSWORD = 'password';
  const STANDARD = 'standard';
  const UPDATE_ONLY = 'update_only';
  const URL = 'url';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'errors' => 'list<Object>',
      'errors_total_count' => 'int',
      'handle' => 'string',
      'status' => 'string',
      'file' => 'file',
      'password' => 'string',
      'standard' => 'Standard',
      'update_only' => 'bool',
      'url' => 'string',
      'username' => 'string',
    );
  }
}
