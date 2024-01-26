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

class ProductSetMetadataFields extends AbstractEnum {

  const COVER_IMAGE_URL = 'cover_image_url';
  const DESCRIPTION = 'description';
  const EXTERNAL_URL = 'external_url';
  const INTEGRITY_REVIEW_STATUS = 'integrity_review_status';

  public function getFieldTypes() {
    return array(
      'cover_image_url' => 'string',
      'description' => 'string',
      'external_url' => 'string',
      'integrity_review_status' => 'string',
    );
  }
}
