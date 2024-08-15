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
 * @method static CustomAudienceSubtypes getInstance()
 */
class CustomAudienceSubtypes extends AbstractEnum {

  const APP = 'APP';
  const APP_COMBINATION = 'APP_COMBINATION';
  const CUSTOM = 'CUSTOM';
  const LOOKALIKE = 'LOOKALIKE';
  const MANAGED = 'MANAGED';
  const PARTNER = 'PARTNER';
  const VIDEO = 'VIDEO';
  const WEBSITE = 'WEBSITE';
}
