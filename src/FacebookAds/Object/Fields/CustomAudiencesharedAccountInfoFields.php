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

class CustomAudiencesharedAccountInfoFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ACCOUNT_NAME = 'account_name';
  const BUSINESS_ID = 'business_id';
  const BUSINESS_NAME = 'business_name';
  const SHARING_STATUS = 'sharing_status';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'account_name' => 'string',
      'business_id' => 'string',
      'business_name' => 'string',
      'sharing_status' => 'string',
    );
  }
}
