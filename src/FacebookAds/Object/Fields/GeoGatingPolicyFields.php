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

class GeoGatingPolicyFields extends AbstractEnum {

  const AFTER_SCHEDULE = 'after_schedule';
  const EXCLUDE_COUNTRY = 'exclude_country';
  const ID = 'id';
  const INCLUDE_COUNTRY = 'include_country';
  const NAME = 'name';
  const VALID_FROM = 'valid_from';
  const VALID_UNTIL = 'valid_until';

  public function getFieldTypes() {
    return array(
      'after_schedule' => 'string',
      'exclude_country' => 'list<string>',
      'id' => 'string',
      'include_country' => 'list<string>',
      'name' => 'string',
      'valid_from' => 'datetime',
      'valid_until' => 'datetime',
    );
  }
}
