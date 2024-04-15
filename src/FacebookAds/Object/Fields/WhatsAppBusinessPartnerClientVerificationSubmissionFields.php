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

class WhatsAppBusinessPartnerClientVerificationSubmissionFields extends AbstractEnum {

  const CLIENT_BUSINESS_ID = 'client_business_id';
  const ID = 'id';
  const REJECTION_REASONS = 'rejection_reasons';
  const SUBMITTED_INFO = 'submitted_info';
  const SUBMITTED_TIME = 'submitted_time';
  const UPDATE_TIME = 'update_time';
  const VERIFICATION_STATUS = 'verification_status';

  public function getFieldTypes() {
    return array(
      'client_business_id' => 'string',
      'id' => 'string',
      'rejection_reasons' => 'list<RejectionReasons>',
      'submitted_info' => 'Object',
      'submitted_time' => 'datetime',
      'update_time' => 'datetime',
      'verification_status' => 'VerificationStatus',
    );
  }
}
