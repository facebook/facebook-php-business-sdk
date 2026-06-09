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

class PageCTXBudgetDFOBudgetRecommendationFields extends AbstractEnum {

  const BUDGET = 'budget';
  const BUDGET_LEADS = 'budget_leads';
  const BUDGET_NEW_MODEL = 'budget_new_model';
  const BUDGET_PURCHASES = 'budget_purchases';
  const BUDGET_VALUE = 'budget_value';
  const BUDGET_WITHOUT_THRESHOLD = 'budget_without_threshold';
  const REPORTED_CONVERSION = 'reported_conversion';
  const REPORTED_CONVERSION_LEADS = 'reported_conversion_leads';
  const REPORTED_CONVERSION_PURCHASES = 'reported_conversion_purchases';
  const REPORTED_CONVERSION_VALUE = 'reported_conversion_value';
  const REPORTED_CONVERSIONS_NEW_MODEL = 'reported_conversions_new_model';
  const REPORTED_CONVERSIONS_WITHOUT_THRESHOLD = 'reported_conversions_without_threshold';
  const ZO_BUDGET = 'zo_budget';
  const ZO_BUDGET_LEADS = 'zo_budget_leads';
  const ZO_BUDGET_PURCHASES = 'zo_budget_purchases';
  const ZO_BUDGET_VALUE = 'zo_budget_value';

  public function getFieldTypes() {
    return array(
      'budget' => 'string',
      'budget_leads' => 'string',
      'budget_new_model' => 'string',
      'budget_purchases' => 'string',
      'budget_value' => 'string',
      'budget_without_threshold' => 'string',
      'reported_conversion' => 'string',
      'reported_conversion_leads' => 'string',
      'reported_conversion_purchases' => 'string',
      'reported_conversion_value' => 'string',
      'reported_conversions_new_model' => 'string',
      'reported_conversions_without_threshold' => 'string',
      'zo_budget' => 'string',
      'zo_budget_leads' => 'string',
      'zo_budget_purchases' => 'string',
      'zo_budget_value' => 'string',
    );
  }
}
