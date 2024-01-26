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
 * @method static SystemUserFields getInstance()
 */
class SystemUserFields extends AbstractEnum {

  const ID = 'id';
  const NAME = 'name';
  const PERMISSIONS = 'permissions';
  const ROLE = 'role';
}
