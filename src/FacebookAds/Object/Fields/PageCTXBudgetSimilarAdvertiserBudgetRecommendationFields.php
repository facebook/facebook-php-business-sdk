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

class PageCTXBudgetSimilarAdvertiserBudgetRecommendationFields extends AbstractEnum {

  const BUDGET = 'budget';
  const BUDGET_NEW_MODEL = 'budget_new_model';
  const BUDGET_WITHOUT_THRESHOLD = 'budget_without_threshold';
  const REPORTED_CONVERSION = 'reported_conversion';
  const REPORTED_CONVERSIONS_NEW_MODEL = 'reported_conversions_new_model';
  const REPORTED_CONVERSIONS_WITHOUT_THRESHOLD = 'reported_conversions_without_threshold';

  public function getFieldTypes() {
    return array(
      'budget' => 'string',
      'budget_new_model' => 'string',
      'budget_without_threshold' => 'string',
      'reported_conversion' => 'string',
      'reported_conversions_new_model' => 'string',
      'reported_conversions_without_threshold' => 'string',
    );
  }
}
