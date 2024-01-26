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

class RecommendationFields extends AbstractEnum {

  const CREATED_TIME = 'created_time';
  const HAS_RATING = 'has_rating';
  const HAS_REVIEW = 'has_review';
  const OPEN_GRAPH_STORY = 'open_graph_story';
  const RATING = 'rating';
  const RECOMMENDATION_TYPE = 'recommendation_type';
  const REVIEW_TEXT = 'review_text';
  const REVIEWER = 'reviewer';

  public function getFieldTypes() {
    return array(
      'created_time' => 'datetime',
      'has_rating' => 'bool',
      'has_review' => 'bool',
      'open_graph_story' => 'Object',
      'rating' => 'int',
      'recommendation_type' => 'string',
      'review_text' => 'string',
      'reviewer' => 'User',
    );
  }
}
