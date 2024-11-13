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

class ResellerGuidanceFields extends AbstractEnum {

  const AD_ACCOUNT_FIRST_SPEND_DATE = 'ad_account_first_spend_date';
  const AD_ACCOUNT_ID = 'ad_account_id';
  const ADOPTED_GUIDANCE_L7D = 'adopted_guidance_l7d';
  const ADVERTISER_NAME = 'advertiser_name';
  const ATTRIBUTED_TO_RESELLER_L7D = 'attributed_to_reseller_l7d';
  const AVAILABLE_GUIDANCE = 'available_guidance';
  const GUIDANCE_ADOPTION_RATE_L7D = 'guidance_adoption_rate_l7d';
  const NURTURED_BY_RESELLER_L7D = 'nurtured_by_reseller_l7d';
  const PLANNING_AGENCY_NAME = 'planning_agency_name';
  const RECOMMENDATION_TIME = 'recommendation_time';
  const REPORTING_DS = 'reporting_ds';
  const RESELLER = 'reseller';
  const REVENUE_L30D = 'revenue_l30d';
  const ULTIMATE_ADVERTISER_NAME = 'ultimate_advertiser_name';

  public function getFieldTypes() {
    return array(
      'ad_account_first_spend_date' => 'string',
      'ad_account_id' => 'string',
      'adopted_guidance_l7d' => 'list<string>',
      'advertiser_name' => 'string',
      'attributed_to_reseller_l7d' => 'bool',
      'available_guidance' => 'list<string>',
      'guidance_adoption_rate_l7d' => 'float',
      'nurtured_by_reseller_l7d' => 'bool',
      'planning_agency_name' => 'string',
      'recommendation_time' => 'datetime',
      'reporting_ds' => 'string',
      'reseller' => 'Business',
      'revenue_l30d' => 'float',
      'ultimate_advertiser_name' => 'string',
    );
  }
}
