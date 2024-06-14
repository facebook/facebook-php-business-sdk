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

class AdvAInstanceFields extends AbstractEnum {

  const ID = 'id';
  const INSTANCE_TYPE = 'instance_type';
  const NAME = 'name';
  const OWNER_BUSINESS = 'owner_business';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'instance_type' => 'string',
      'name' => 'string',
      'owner_business' => 'Business',
    );
  }
}
