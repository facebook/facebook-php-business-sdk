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

class AdAccountAdVolumeFields extends AbstractEnum {

  const ACTOR_ID = 'actor_id';
  const ACTOR_NAME = 'actor_name';
  const AD_LIMIT_SCOPE_BUSINESS = 'ad_limit_scope_business';
  const AD_LIMIT_SCOPE_BUSINESS_MANAGER_ID = 'ad_limit_scope_business_manager_id';
  const AD_LIMIT_SET_BY_PAGE_ADMIN = 'ad_limit_set_by_page_admin';
  const ADS_RUNNING_OR_IN_REVIEW_COUNT = 'ads_running_or_in_review_count';
  const ADS_RUNNING_OR_IN_REVIEW_COUNT_SUBJECT_TO_LIMIT_SET_BY_PAGE = 'ads_running_or_in_review_count_subject_to_limit_set_by_page';
  const CURRENT_ACCOUNT_ADS_RUNNING_OR_IN_REVIEW_COUNT = 'current_account_ads_running_or_in_review_count';
  const FUTURE_LIMIT_ACTIVATION_DATE = 'future_limit_activation_date';
  const FUTURE_LIMIT_ON_ADS_RUNNING_OR_IN_REVIEW = 'future_limit_on_ads_running_or_in_review';
  const LIMIT_ON_ADS_RUNNING_OR_IN_REVIEW = 'limit_on_ads_running_or_in_review';
  const RECOMMENDATIONS = 'recommendations';

  public function getFieldTypes() {
    return array(
      'actor_id' => 'string',
      'actor_name' => 'string',
      'ad_limit_scope_business' => 'Business',
      'ad_limit_scope_business_manager_id' => 'string',
      'ad_limit_set_by_page_admin' => 'unsigned int',
      'ads_running_or_in_review_count' => 'unsigned int',
      'ads_running_or_in_review_count_subject_to_limit_set_by_page' => 'unsigned int',
      'current_account_ads_running_or_in_review_count' => 'unsigned int',
      'future_limit_activation_date' => 'string',
      'future_limit_on_ads_running_or_in_review' => 'unsigned int',
      'limit_on_ads_running_or_in_review' => 'unsigned int',
      'recommendations' => 'list<Object>',
    );
  }
}
