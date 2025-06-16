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

class ManagedPartnerBusinessFields extends AbstractEnum {

  const AD_ACCOUNT = 'ad_account';
  const CATALOG_SEGMENT = 'catalog_segment';
  const EXTENDED_CREDIT = 'extended_credit';
  const PAGE = 'page';
  const SELLER_BUSINESS_INFO = 'seller_business_info';
  const SELLER_BUSINESS_STATUS = 'seller_business_status';
  const TEMPLATE = 'template';
  const AD_ACCOUNT_CURRENCY = 'ad_account_currency';
  const CATALOG_ID = 'catalog_id';
  const CHILD_BUSINESS_EXTERNAL_ID = 'child_business_external_id';
  const CREDIT_LIMIT = 'credit_limit';
  const LINE_OF_CREDIT_ID = 'line_of_credit_id';
  const NAME = 'name';
  const NO_AD_ACCOUNT = 'no_ad_account';
  const PAGE_NAME = 'page_name';
  const PAGE_PROFILE_IMAGE_URL = 'page_profile_image_url';
  const PARTITION_TYPE = 'partition_type';
  const PARTNER_FACEBOOK_PAGE_URL = 'partner_facebook_page_url';
  const PARTNER_REGISTRATION_COUNTRIES = 'partner_registration_countries';
  const SALES_REP_EMAIL = 'sales_rep_email';
  const SELLER_EXTERNAL_WEBSITE_URL = 'seller_external_website_url';
  const SELLER_TARGETING_COUNTRIES = 'seller_targeting_countries';
  const SKIP_PARTNER_PAGE_CREATION = 'skip_partner_page_creation';
  const SURVEY_BUSINESS_TYPE = 'survey_business_type';
  const SURVEY_NUM_ASSETS = 'survey_num_assets';
  const SURVEY_NUM_PEOPLE = 'survey_num_people';
  const TIMEZONE_ID = 'timezone_id';
  const VERTICAL = 'vertical';

  public function getFieldTypes() {
    return array(
      'ad_account' => 'AdAccount',
      'catalog_segment' => 'ProductCatalog',
      'extended_credit' => 'ManagedPartnerExtendedCredit',
      'page' => 'Page',
      'seller_business_info' => 'Object',
      'seller_business_status' => 'string',
      'template' => 'list<Object>',
      'ad_account_currency' => 'string',
      'catalog_id' => 'string',
      'child_business_external_id' => 'string',
      'credit_limit' => 'unsigned int',
      'line_of_credit_id' => 'string',
      'name' => 'string',
      'no_ad_account' => 'bool',
      'page_name' => 'string',
      'page_profile_image_url' => 'string',
      'partition_type' => 'PartitionType',
      'partner_facebook_page_url' => 'string',
      'partner_registration_countries' => 'list<string>',
      'sales_rep_email' => 'string',
      'seller_external_website_url' => 'string',
      'seller_targeting_countries' => 'list<string>',
      'skip_partner_page_creation' => 'bool',
      'survey_business_type' => 'SurveyBusinessType',
      'survey_num_assets' => 'unsigned int',
      'survey_num_people' => 'unsigned int',
      'timezone_id' => 'TimezoneId',
      'vertical' => 'Vertical',
    );
  }
}
