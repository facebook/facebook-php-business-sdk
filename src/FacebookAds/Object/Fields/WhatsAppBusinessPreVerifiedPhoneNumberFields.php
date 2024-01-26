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

class WhatsAppBusinessPreVerifiedPhoneNumberFields extends AbstractEnum {

  const CODE_VERIFICATION_STATUS = 'code_verification_status';
  const CODE_VERIFICATION_TIME = 'code_verification_time';
  const ID = 'id';
  const OWNER_BUSINESS = 'owner_business';
  const PHONE_NUMBER = 'phone_number';
  const VERIFICATION_EXPIRY_TIME = 'verification_expiry_time';

  public function getFieldTypes() {
    return array(
      'code_verification_status' => 'string',
      'code_verification_time' => 'datetime',
      'id' => 'string',
      'owner_business' => 'Business',
      'phone_number' => 'string',
      'verification_expiry_time' => 'datetime',
    );
  }
}
