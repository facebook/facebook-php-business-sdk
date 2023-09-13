<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\CustomAudienceNormalizers;

use FacebookAds\Object\CustomAudienceNormalizers\ValueNormalizerInterface;
use FacebookAds\Object\Fields\CustomAudienceMultikeySchemaFields;

class HashNormalizer implements ValueNormalizerInterface {

    /**
     *  @var string
     */
    const HASH_TYPE_SHA256 = 'sha256';

    /**
     * @param string $key
     * @param string $key_value
     * @return boolean
     */
    public function shouldNormalize($key, $key_value) {
        return $key !== CustomAudienceMultikeySchemaFields::LOOKALIKE_VALUE;
    }

    /**
     * @param string $key
     * @param string $key_value
     * @return string
     */
    public function normalize($key, $key_value) {
        return hash(self::HASH_TYPE_SHA256, $key_value);
    }
}
