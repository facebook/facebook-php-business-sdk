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

class ExtendedCreditInfoFields extends AbstractEnum {

  const CREDIT_LEFT = 'credit_left';
  const CREDIT_REVOKED = 'credit_revoked';
  const CREDIT_USED = 'credit_used';
  const USING_BIZ_EC = 'using_biz_ec';

  public function getFieldTypes() {
    return array(
      'credit_left' => 'string',
      'credit_revoked' => 'bool',
      'credit_used' => 'string',
      'using_biz_ec' => 'string',
    );
  }
}
