<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\CustomAudienceNormalizers;

use FacebookAds\Object\Fields\CustomAudienceMultikeySchemaFields;
use FacebookAds\Object\CustomAudienceNormalizers\ValueNormalizerInterface;

class DateNormalizer implements ValueNormalizerInterface {

  /**
   * @param string $key
   * @param string $key_value
   * @return boolean
   */
  public function shouldNormalize($key, $key_value) {
    return in_array($key, array(
      CustomAudienceMultikeySchemaFields::BIRTH_DATE,
      CustomAudienceMultikeySchemaFields::BIRTH_MONTH
    ));
  }

  /**
   * @param string $key
   * @param string $key_value
   * @return string
   */
  public function normalize($key, $key_value) {
    return str_pad(
      preg_replace('/[^0-9]/', '', $key_value),
      2,
      '0',
      STR_PAD_LEFT);
  }
}
