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

class BusinessUserFields extends AbstractEnum {

  const BUSINESS = 'business';
  const BUSINESS_ROLE_REQUEST = 'business_role_request';
  const EMAIL = 'email';
  const FINANCE_PERMISSION = 'finance_permission';
  const FIRST_NAME = 'first_name';
  const ID = 'id';
  const IP_PERMISSION = 'ip_permission';
  const LAST_NAME = 'last_name';
  const MARKED_FOR_REMOVAL = 'marked_for_removal';
  const NAME = 'name';
  const PENDING_EMAIL = 'pending_email';
  const ROLE = 'role';
  const TITLE = 'title';
  const TWO_FAC_STATUS = 'two_fac_status';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'business_role_request' => 'BusinessRoleRequest',
      'email' => 'string',
      'finance_permission' => 'string',
      'first_name' => 'string',
      'id' => 'string',
      'ip_permission' => 'string',
      'last_name' => 'string',
      'marked_for_removal' => 'bool',
      'name' => 'string',
      'pending_email' => 'string',
      'role' => 'string',
      'title' => 'string',
      'two_fac_status' => 'string',
    );
  }
}
