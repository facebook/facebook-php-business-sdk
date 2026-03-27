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

class TrendingTopicsSpecFields extends AbstractEnum {

  const IS_ALL_TRENDING = 'is_all_trending';
  const IS_SPECIAL_BUDGET_ALLOC = 'is_special_budget_alloc';
  const TRENDING_TOPICS = 'trending_topics';

  public function getFieldTypes() {
    return array(
      'is_all_trending' => 'bool',
      'is_special_budget_alloc' => 'bool',
      'trending_topics' => 'list<string>',
    );
  }
}
