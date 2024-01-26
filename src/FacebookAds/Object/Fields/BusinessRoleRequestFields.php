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

class BusinessRoleRequestFields extends AbstractEnum {

  const CREATED_BY = 'created_by';
  const CREATED_TIME = 'created_time';
  const EMAIL = 'email';
  const EXPIRATION_TIME = 'expiration_time';
  const EXPIRY_TIME = 'expiry_time';
  const FINANCE_ROLE = 'finance_role';
  const ID = 'id';
  const INVITE_LINK = 'invite_link';
  const IP_ROLE = 'ip_role';
  const OWNER = 'owner';
  const ROLE = 'role';
  const STATUS = 'status';
  const UPDATED_BY = 'updated_by';
  const UPDATED_TIME = 'updated_time';

  public function getFieldTypes() {
    return array(
      'created_by' => 'Object',
      'created_time' => 'datetime',
      'email' => 'string',
      'expiration_time' => 'datetime',
      'expiry_time' => 'datetime',
      'finance_role' => 'string',
      'id' => 'string',
      'invite_link' => 'string',
      'ip_role' => 'string',
      'owner' => 'Business',
      'role' => 'string',
      'status' => 'string',
      'updated_by' => 'Object',
      'updated_time' => 'datetime',
    );
  }
}
