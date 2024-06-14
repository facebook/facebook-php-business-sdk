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

class PublisherWhiteListFields extends AbstractEnum {

  const BUSINESS_OWNER_ID = 'business_owner_id';
  const ID = 'id';
  const LAST_UPDATED_TIME = 'last_updated_time';
  const LAST_UPDATED_USER = 'last_updated_user';
  const NAME = 'name';
  const PLACEMENT_TYPE = 'placement_type';

  public function getFieldTypes() {
    return array(
      'business_owner_id' => 'string',
      'id' => 'string',
      'last_updated_time' => 'datetime',
      'last_updated_user' => 'string',
      'name' => 'string',
      'placement_type' => 'string',
    );
  }
}
