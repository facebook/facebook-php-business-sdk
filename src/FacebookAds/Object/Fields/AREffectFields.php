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

class AREffectFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const LAST_MODIFIED_TIME = 'last_modified_time';
  const NAME = 'name';
  const STATUS = 'status';
  const SURFACES = 'surfaces';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'id' => 'string',
      'last_modified_time' => 'datetime',
      'name' => 'string',
      'status' => 'string',
      'surfaces' => 'list<string>',
    );
  }
}
