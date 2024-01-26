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

class OfflineConversionDataSetPermissionsFields extends AbstractEnum {

  const CAN_EDIT = 'can_edit';
  const CAN_EDIT_OR_UPLOAD = 'can_edit_or_upload';
  const CAN_UPLOAD = 'can_upload';
  const SHOULD_BLOCK_VANILLA_BUSINESS_EMPLOYEE_ACCESS = 'should_block_vanilla_business_employee_access';

  public function getFieldTypes() {
    return array(
      'can_edit' => 'bool',
      'can_edit_or_upload' => 'bool',
      'can_upload' => 'bool',
      'should_block_vanilla_business_employee_access' => 'bool',
    );
  }
}
