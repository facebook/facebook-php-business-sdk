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
 * @method static CustomAudienceTypes getInstance()
 */
class CustomAudienceTypes extends AbstractEnum {

  /**
   * @var string
   */
  const ID = 'UID';

  /**
   * @var string
   */
  const CLAIM = 'CLAIM';

  /**
   * @var string
   */
  const EMAIL = 'EMAIL_SHA256';

  /**
   * @var string
   */
  const PHONE = 'PHONE_SHA256';

  /**
   * @var string
   */
  const MOBILE_ADVERTISER_ID = 'MOBILE_ADVERTISER_ID';
}
