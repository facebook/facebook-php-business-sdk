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

class BusinessFields extends AbstractEnum {

  const BLOCK_OFFLINE_ANALYTICS = 'block_offline_analytics';
  const COLLABORATIVE_ADS_MANAGED_PARTNER_BUSINESS_INFO = 'collaborative_ads_managed_partner_business_info';
  const COLLABORATIVE_ADS_MANAGED_PARTNER_ELIGIBILITY = 'collaborative_ads_managed_partner_eligibility';
  const COLLABORATIVE_ADS_PARTNER_PREMIUM_OPTIONS = 'collaborative_ads_partner_premium_options';
  const CREATED_BY = 'created_by';
  const CREATED_TIME = 'created_time';
  const EXTENDED_UPDATED_TIME = 'extended_updated_time';
  const ID = 'id';
  const IS_HIDDEN = 'is_hidden';
  const LINK = 'link';
  const NAME = 'name';
  const PRIMARY_PAGE = 'primary_page';
  const PROFILE_PICTURE_URI = 'profile_picture_uri';
  const TIMEZONE_ID = 'timezone_id';
  const TWO_FACTOR_TYPE = 'two_factor_type';
  const UPDATED_BY = 'updated_by';
  const UPDATED_TIME = 'updated_time';
  const USER_ACCESS_EXPIRE_TIME = 'user_access_expire_time';
  const VERIFICATION_STATUS = 'verification_status';
  const VERTICAL = 'vertical';
  const VERTICAL_ID = 'vertical_id';

  public function getFieldTypes() {
    return array(
      'block_offline_analytics' => 'bool',
      'collaborative_ads_managed_partner_business_info' => 'ManagedPartnerBusiness',
      'collaborative_ads_managed_partner_eligibility' => 'BusinessManagedPartnerEligibility',
      'collaborative_ads_partner_premium_options' => 'BusinessPartnerPremiumOptions',
      'created_by' => 'Object',
      'created_time' => 'datetime',
      'extended_updated_time' => 'datetime',
      'id' => 'string',
      'is_hidden' => 'bool',
      'link' => 'string',
      'name' => 'string',
      'primary_page' => 'Page',
      'profile_picture_uri' => 'string',
      'timezone_id' => 'unsigned int',
      'two_factor_type' => 'string',
      'updated_by' => 'Object',
      'updated_time' => 'datetime',
      'user_access_expire_time' => 'datetime',
      'verification_status' => 'VerificationStatus',
      'vertical' => 'string',
      'vertical_id' => 'unsigned int',
    );
  }
}
