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

class AdRecommendationFields extends AbstractEnum {

  const BLAME_FIELD = 'blame_field';
  const CODE = 'code';
  const CONFIDENCE = 'confidence';
  const IMPORTANCE = 'importance';
  const MESSAGE = 'message';
  const RECOMMENDATION_DATA = 'recommendation_data';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'blame_field' => 'string',
      'code' => 'int',
      'confidence' => 'Confidence',
      'importance' => 'Importance',
      'message' => 'string',
      'recommendation_data' => 'AdRecommendationData',
      'title' => 'string',
    );
  }
}
