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
 * @method static TermsOfService getInstance()
 */
class TermsOfService extends AbstractEnum {

  const CUSTOM_AUDIENCE  = 'custom_audience';
  const WEBSITE_CUSTOM_AUDIENCE = 'website_custom_audience';
  const MOBILE_APP_CUSTOM_AUDIENCE = 'mobile_app_custom_audience';
}
