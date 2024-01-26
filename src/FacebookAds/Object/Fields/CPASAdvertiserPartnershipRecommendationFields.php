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

class CPASAdvertiserPartnershipRecommendationFields extends AbstractEnum {

  const ADVERTISER_BUSINESS_ID = 'advertiser_business_id';
  const BRAND_BUSINESS_ID = 'brand_business_id';
  const BRANDS = 'brands';
  const COUNTRIES = 'countries';
  const ID = 'id';
  const MERCHANT_BUSINESS_ID = 'merchant_business_id';
  const MERCHANT_CATEGORIES = 'merchant_categories';
  const STATUS = 'status';
  const STATUS_REASON = 'status_reason';

  public function getFieldTypes() {
    return array(
      'advertiser_business_id' => 'string',
      'brand_business_id' => 'string',
      'brands' => 'list<string>',
      'countries' => 'list<string>',
      'id' => 'string',
      'merchant_business_id' => 'string',
      'merchant_categories' => 'list<string>',
      'status' => 'string',
      'status_reason' => 'string',
    );
  }
}
