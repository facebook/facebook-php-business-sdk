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

class HasLeadAccessFields extends AbstractEnum {

  const APP_HAS_LEADS_PERMISSION = 'app_has_leads_permission';
  const CAN_ACCESS_LEAD = 'can_access_lead';
  const ENABLED_LEAD_ACCESS_MANAGER = 'enabled_lead_access_manager';
  const FAILURE_REASON = 'failure_reason';
  const FAILURE_RESOLUTION = 'failure_resolution';
  const IS_PAGE_ADMIN = 'is_page_admin';
  const PAGE_ID = 'page_id';
  const USER_HAS_LEADS_PERMISSION = 'user_has_leads_permission';
  const USER_ID = 'user_id';

  public function getFieldTypes() {
    return array(
      'app_has_leads_permission' => 'bool',
      'can_access_lead' => 'bool',
      'enabled_lead_access_manager' => 'bool',
      'failure_reason' => 'string',
      'failure_resolution' => 'string',
      'is_page_admin' => 'bool',
      'page_id' => 'string',
      'user_has_leads_permission' => 'bool',
      'user_id' => 'string',
    );
  }
}
