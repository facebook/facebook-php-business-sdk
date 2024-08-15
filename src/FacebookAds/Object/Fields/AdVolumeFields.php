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

class AdVolumeFields extends AbstractEnum {

  const AD_VOLUME_BREAK_DOWN = 'ad_volume_break_down';
  const ADS_RUNNING_OR_IN_REVIEW_COUNT = 'ads_running_or_in_review_count';
  const FUTURE_LIMIT_ACTIVATION_DATE = 'future_limit_activation_date';
  const FUTURE_LIMIT_ON_ADS_RUNNING_OR_IN_REVIEW = 'future_limit_on_ads_running_or_in_review';
  const INDIVIDUAL_ACCOUNTS_AD_VOLUME = 'individual_accounts_ad_volume';
  const IS_GPA_PAGE = 'is_gpa_page';
  const LIMIT_ON_ADS_RUNNING_OR_IN_REVIEW = 'limit_on_ads_running_or_in_review';
  const OWNING_BUSINESS_AD_VOLUME = 'owning_business_ad_volume';
  const PARTNER_BUSINESS_AD_VOLUME = 'partner_business_ad_volume';
  const USER_ROLE = 'user_role';

  public function getFieldTypes() {
    return array(
      'ad_volume_break_down' => 'list<Object>',
      'ads_running_or_in_review_count' => 'unsigned int',
      'future_limit_activation_date' => 'string',
      'future_limit_on_ads_running_or_in_review' => 'unsigned int',
      'individual_accounts_ad_volume' => 'int',
      'is_gpa_page' => 'bool',
      'limit_on_ads_running_or_in_review' => 'unsigned int',
      'owning_business_ad_volume' => 'int',
      'partner_business_ad_volume' => 'int',
      'user_role' => 'string',
    );
  }
}
