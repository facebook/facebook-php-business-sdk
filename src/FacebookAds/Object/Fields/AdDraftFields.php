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

class AdDraftFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const API_VERSION = 'api_version';
  const ASYNC_REQUEST_SET = 'async_request_set';
  const AUTHOR_ID = 'author_id';
  const CREATED_BY = 'created_by';
  const DRAFT_VERSION = 'draft_version';
  const ID = 'id';
  const IS_ACTIVE = 'is_active';
  const NAME = 'name';
  const OWNERSHIP_TYPE = 'ownership_type';
  const PUBLISH_STATUS = 'publish_status';
  const STATE = 'state';
  const SUMMARY = 'summary';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'api_version' => 'string',
      'async_request_set' => 'AdAsyncRequestSet',
      'author_id' => 'string',
      'created_by' => 'string',
      'draft_version' => 'string',
      'id' => 'string',
      'is_active' => 'bool',
      'name' => 'string',
      'ownership_type' => 'string',
      'publish_status' => 'Object',
      'state' => 'string',
      'summary' => 'string',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
    );
  }
}
