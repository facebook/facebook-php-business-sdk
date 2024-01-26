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

class LeadFields extends AbstractEnum {

  const AD_ID = 'ad_id';
  const AD_NAME = 'ad_name';
  const ADSET_ID = 'adset_id';
  const ADSET_NAME = 'adset_name';
  const CAMPAIGN_ID = 'campaign_id';
  const CAMPAIGN_NAME = 'campaign_name';
  const CREATED_TIME = 'created_time';
  const CUSTOM_DISCLAIMER_RESPONSES = 'custom_disclaimer_responses';
  const FIELD_DATA = 'field_data';
  const FORM_ID = 'form_id';
  const HOME_LISTING = 'home_listing';
  const ID = 'id';
  const IS_ORGANIC = 'is_organic';
  const PARTNER_NAME = 'partner_name';
  const PLATFORM = 'platform';
  const POST = 'post';
  const POST_SUBMISSION_CHECK_RESULT = 'post_submission_check_result';
  const RETAILER_ITEM_ID = 'retailer_item_id';
  const VEHICLE = 'vehicle';

  public function getFieldTypes() {
    return array(
      'ad_id' => 'string',
      'ad_name' => 'string',
      'adset_id' => 'string',
      'adset_name' => 'string',
      'campaign_id' => 'string',
      'campaign_name' => 'string',
      'created_time' => 'datetime',
      'custom_disclaimer_responses' => 'list<UserLeadGenDisclaimerResponse>',
      'field_data' => 'list<UserLeadGenFieldData>',
      'form_id' => 'string',
      'home_listing' => 'HomeListing',
      'id' => 'string',
      'is_organic' => 'bool',
      'partner_name' => 'string',
      'platform' => 'string',
      'post' => 'Link',
      'post_submission_check_result' => 'LeadGenPostSubmissionCheckResult',
      'retailer_item_id' => 'string',
      'vehicle' => 'Vehicle',
    );
  }
}
