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

class AIGeneratedProductImageFields extends AbstractEnum {

  const FLAGGED_FOR_MANUAL_REVIEW = 'flagged_for_manual_review';
  const TRANSFORMED_IMAGE_URL = 'transformed_image_url';

  public function getFieldTypes() {
    return array(
      'flagged_for_manual_review' => 'bool',
      'transformed_image_url' => 'string',
    );
  }
}
