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

class PageUserWithLeadsAccessFields extends AbstractEnum {

  const ACTIVE_ON_BUSINESS = 'active_on_business';
  const BUSINESS_ROLE = 'business_role';
  const CAN_ACCESS_LEADS = 'can_access_leads';
  const PAGE_ROLE = 'page_role';

  public function getFieldTypes() {
    return array(
      'active_on_business' => 'bool',
      'business_role' => 'string',
      'can_access_leads' => 'bool',
      'page_role' => 'string',
    );
  }
}
