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

class BCPCampaignFields extends AbstractEnum {

  const ADS_PERMISSION_REQUIRED = 'ads_permission_required';
  const APPLICATION_DEADLINE = 'application_deadline';
  const CAMPAIGN_GOAL = 'campaign_goal';
  const CAMPAIGN_GOAL_OTHER = 'campaign_goal_other';
  const CONTENT_DELIVERY_DEADLINE = 'content_delivery_deadline';
  const CONTENT_DELIVERY_START_DATE = 'content_delivery_start_date';
  const CONTENT_REQUIREMENTS = 'content_requirements';
  const CONTENT_REQUIREMENTS_DESCRIPTION = 'content_requirements_description';
  const CURRENCY = 'currency';
  const DEAL_NEGOTIATION_TYPE = 'deal_negotiation_type';
  const DESCRIPTION = 'description';
  const HAS_FREE_PRODUCT = 'has_free_product';
  const ID = 'id';
  const NAME = 'name';
  const PAYMENT_AMOUNT_FOR_ADS = 'payment_amount_for_ads';
  const PAYMENT_AMOUNT_FOR_CONTENT = 'payment_amount_for_content';
  const PAYMENT_DESCRIPTION = 'payment_description';

  public function getFieldTypes() {
    return array(
      'ads_permission_required' => 'bool',
      'application_deadline' => 'string',
      'campaign_goal' => 'string',
      'campaign_goal_other' => 'string',
      'content_delivery_deadline' => 'string',
      'content_delivery_start_date' => 'string',
      'content_requirements' => 'list<map<string, unsigned int>>',
      'content_requirements_description' => 'string',
      'currency' => 'string',
      'deal_negotiation_type' => 'string',
      'description' => 'string',
      'has_free_product' => 'bool',
      'id' => 'string',
      'name' => 'string',
      'payment_amount_for_ads' => 'unsigned int',
      'payment_amount_for_content' => 'unsigned int',
      'payment_description' => 'string',
    );
  }
}
