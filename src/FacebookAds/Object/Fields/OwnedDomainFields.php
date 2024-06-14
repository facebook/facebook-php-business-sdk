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

class OwnedDomainFields extends AbstractEnum {

  const DOMAIN_NAME = 'domain_name';
  const ID = 'id';
  const OWNER_BUSINESS = 'owner_business';
  const STATUS = 'status';
  const VERIFICATION_CODE = 'verification_code';

  public function getFieldTypes() {
    return array(
      'domain_name' => 'string',
      'id' => 'string',
      'owner_business' => 'Business',
      'status' => 'string',
      'verification_code' => 'string',
    );
  }
}
