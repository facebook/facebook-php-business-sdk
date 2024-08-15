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

class AudiencePermissionFields extends AbstractEnum {

  const AUDIENCE = 'audience';
  const SHARE_ACCOUNT_ID = 'share_account_id';
  const SHARE_ACCOUNT_NAME = 'share_account_name';

  public function getFieldTypes() {
    return array(
      'audience' => 'CustomAudience',
      'share_account_id' => 'string',
      'share_account_name' => 'string',
    );
  }
}
