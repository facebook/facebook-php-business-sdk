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
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class MediaFingerprintFields extends AbstractEnum {

  const DURATION_IN_SEC = 'duration_in_sec';
  const FINGERPRINT_CONTENT_TYPE = 'fingerprint_content_type';
  const FINGERPRINT_TYPE = 'fingerprint_type';
  const ID = 'id';
  const METADATA = 'metadata';
  const TITLE = 'title';
  const UNIVERSAL_CONTENT_ID = 'universal_content_id';

  public function getFieldTypes() {
    return array(
      'duration_in_sec' => 'float',
      'fingerprint_content_type' => 'string',
      'fingerprint_type' => 'string',
      'id' => 'string',
      'metadata' => 'Object',
      'title' => 'string',
      'universal_content_id' => 'string',
    );
  }
}
