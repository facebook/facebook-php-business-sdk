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

class BAPIDomainFields extends AbstractEnum {

  const DOMAIN = 'domain';
  const IN_COOL_DOWN_UNTIL = 'in_cool_down_until';
  const IS_ELIGIBLE_FOR_VO = 'is_eligible_for_vo';
  const IS_IN_COOL_DOWN = 'is_in_cool_down';

  public function getFieldTypes() {
    return array(
      'domain' => 'string',
      'in_cool_down_until' => 'int',
      'is_eligible_for_vo' => 'bool',
      'is_in_cool_down' => 'bool',
    );
  }
}
