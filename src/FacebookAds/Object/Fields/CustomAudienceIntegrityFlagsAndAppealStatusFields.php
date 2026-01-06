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

class CustomAudienceIntegrityFlagsAndAppealStatusFields extends AbstractEnum {

  const CLOSEOUT_TIME = 'closeout_time';
  const DAYS_UNTIL_ENFORCEMENT = 'days_until_enforcement';
  const FLAGGED_FIELDS = 'flagged_fields';
  const IS_ENFORCEMENT_ROLLED_OUT = 'is_enforcement_rolled_out';
  const LATEST_APPEAL_REQUESTOR = 'latest_appeal_requestor';
  const LATEST_APPEAL_TIME = 'latest_appeal_time';
  const RESTRICTION_STATUS = 'restriction_status';

  public function getFieldTypes() {
    return array(
      'closeout_time' => 'unsigned int',
      'days_until_enforcement' => 'unsigned int',
      'flagged_fields' => 'list<string>',
      'is_enforcement_rolled_out' => 'bool',
      'latest_appeal_requestor' => 'string',
      'latest_appeal_time' => 'unsigned int',
      'restriction_status' => 'string',
    );
  }
}
