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

abstract class AbstractArchivableCrudObjectFields extends AbstractEnum {

  const CONFIGURED_STATUS = 'configured_status';
  const EFFECTIVE_STATUS = 'effective_status';
}
