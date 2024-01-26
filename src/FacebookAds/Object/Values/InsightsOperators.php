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
 * @method static InsightsOperators getInstance()
 */
class InsightsOperators extends AbstractEnum {

  const ALL = 'ALL';
  const ANY = 'ANY';
  const CONTAIN = 'CONTAIN';
  const EQUAL = 'EQUAL';
  const GREATER_THAN = 'GREATER_THAN';
  const GREATER_THAN_OR_EQUAL = 'GREATER_THAN_OR_EQUAL';
  const IN = 'IN';
  const IN_RANGE = 'IN_RANGE';
  const LESS_THAN = 'LESS_THAN';
  const LESS_THAN_OR_EQUAL = 'LESS_THAN_OR_EQUAL';
  const NONE = 'NONE';
  const NOT_CONTAIN = 'NOT_CONTAIN';
  const NOT_EQUAL = 'NOT_EQUAL';
  const NOT_IN = 'NOT_IN';
  const NOT_IN_RANGE = 'NOT_IN_RANGE';
}
