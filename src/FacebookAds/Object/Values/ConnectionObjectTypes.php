<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * @method static ConnectionObjectTypes getInstance()
 */
class ConnectionObjectTypes extends AbstractEnum {

  const PAGE = 1;
  const APPLICATION = 2;
  const EVENT = 3;
  const PLACE = 6;
  const DOMAIN = 7;
}
