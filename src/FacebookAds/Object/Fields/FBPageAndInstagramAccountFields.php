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

class FBPageAndInstagramAccountFields extends AbstractEnum {

  const AD_PERMISSIONS = 'ad_permissions';
  const BC_PERMISSION_STATUS = 'bc_permission_status';
  const BC_PERMISSIONS = 'bc_permissions';
  const IS_MANAGED = 'is_managed';
  const MATCHED_BY = 'matched_by';

  public function getFieldTypes() {
    return array(
      'ad_permissions' => 'list<string>',
      'bc_permission_status' => 'string',
      'bc_permissions' => 'list<map<string, string>>',
      'is_managed' => 'bool',
      'matched_by' => 'string',
    );
  }
}
