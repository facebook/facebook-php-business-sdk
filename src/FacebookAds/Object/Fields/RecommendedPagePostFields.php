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

class RecommendedPagePostFields extends AbstractEnum {

  const INTENT_SCORE = 'intent_score';
  const IS_IG_MEDIA = 'is_ig_media';
  const POST_ID = 'post_id';

  public function getFieldTypes() {
    return array(
      'intent_score' => 'float',
      'is_ig_media' => 'bool',
      'post_id' => 'string',
    );
  }
}
