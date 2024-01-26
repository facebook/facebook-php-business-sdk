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
 * @method static ReachFrequencyPredictionStatuses getInstance()
 */
class ReachFrequencyPredictionStatuses extends AbstractEnum {

  const SUCCESS = 1;
  const PENDING = 2;
  const UNREACHABLE_AUDIENCE = 3;
  const CONFIG_INVALID = 4;
  const TARGET_SPEC_INVALID = 5;
  const BUDGET_TOO_LOW = 6;
  const TOO_SHORT_AD_SET_LENGTH = 7;
  const TOO_LONG_AD_SET_LENGTH = 8;
  const END_DATE_TOO_FAR = 9;
  const FREQUENCY_CAP_NOT_SPECIFIED = 10;
  const UNSUPPORTED_PLACEMENT = 11;
  const DATE_ERROR = 12;
  const COUNTRY_NOT_SUPPORTED = 13;
  const BLACKOUT_DAYS = 14;
  const INSUFFICIENT_INVENTORY = 15;
  const REACH_BELOW_1_MILLION = 16;
  const MINIMUM_REACH_NOT_AVAILABLE = 17;
  const INVENTORY_CHANGED = 21;
}
