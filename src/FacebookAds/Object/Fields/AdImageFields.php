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

class AdImageFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const CREATED_TIME = 'created_time';
  const CREATIVES = 'creatives';
  const HASH = 'hash';
  const HEIGHT = 'height';
  const ID = 'id';
  const IS_ASSOCIATED_CREATIVES_IN_ADGROUPS = 'is_associated_creatives_in_adgroups';
  const NAME = 'name';
  const ORIGINAL_HEIGHT = 'original_height';
  const ORIGINAL_WIDTH = 'original_width';
  const OWNER_BUSINESS = 'owner_business';
  const PERMALINK_URL = 'permalink_url';
  const STATUS = 'status';
  const UPDATED_TIME = 'updated_time';
  const URL = 'url';
  const URL_128 = 'url_128';
  const WIDTH = 'width';
  const BYTES = 'bytes';
  const COPY_FROM = 'copy_from';
  const FILENAME = 'filename';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'created_time' => 'datetime',
      'creatives' => 'list<string>',
      'hash' => 'string',
      'height' => 'unsigned int',
      'id' => 'string',
      'is_associated_creatives_in_adgroups' => 'bool',
      'name' => 'string',
      'original_height' => 'unsigned int',
      'original_width' => 'unsigned int',
      'owner_business' => 'Business',
      'permalink_url' => 'string',
      'status' => 'Status',
      'updated_time' => 'datetime',
      'url' => 'string',
      'url_128' => 'string',
      'width' => 'unsigned int',
      'bytes' => 'string',
      'copy_from' => 'Object',
      'filename' => 'file',
    );
  }
}
