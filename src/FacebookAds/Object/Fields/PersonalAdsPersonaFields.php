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

class PersonalAdsPersonaFields extends AbstractEnum {

  const EMAIL = 'email';
  const FIRST_NAME = 'first_name';
  const ID = 'id';
  const LAST_NAME = 'last_name';
  const PENDING_EMAIL = 'pending_email';

  public function getFieldTypes() {
    return array(
      'email' => 'string',
      'first_name' => 'string',
      'id' => 'string',
      'last_name' => 'string',
      'pending_email' => 'string',
    );
  }
}
