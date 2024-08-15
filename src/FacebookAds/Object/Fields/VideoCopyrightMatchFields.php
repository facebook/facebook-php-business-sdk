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

class VideoCopyrightMatchFields extends AbstractEnum {

  const CREATED_DATE = 'created_date';
  const ID = 'id';
  const LAST_MODIFIED_USER = 'last_modified_user';
  const MATCH_DATA = 'match_data';
  const MATCH_STATUS = 'match_status';
  const NOTES = 'notes';
  const PERMALINK = 'permalink';

  public function getFieldTypes() {
    return array(
      'created_date' => 'datetime',
      'id' => 'string',
      'last_modified_user' => 'User',
      'match_data' => 'list<Object>',
      'match_status' => 'string',
      'notes' => 'string',
      'permalink' => 'string',
    );
  }
}
