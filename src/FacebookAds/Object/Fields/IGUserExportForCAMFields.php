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

class IGUserExportForCAMFields extends AbstractEnum {

  const EMAIL = 'email';
  const ID = 'id';
  const IS_PAID_PARTNERSHIP_MESSAGES_ENABLED = 'is_paid_partnership_messages_enabled';
  const MESSAGING_ID = 'messaging_id';
  const PORTFOLIO_URL = 'portfolio_url';
  const USERNAME = 'username';

  public function getFieldTypes() {
    return array(
      'email' => 'string',
      'id' => 'string',
      'is_paid_partnership_messages_enabled' => 'bool',
      'messaging_id' => 'string',
      'portfolio_url' => 'string',
      'username' => 'string',
    );
  }
}
