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

class BusinessFranchiseConfigFields extends AbstractEnum {

  const ACTIVE_PARTNER_COUNT = 'active_partner_count';
  const AGENCY_BUSINESS = 'agency_business';
  const AGENCY_BUSINESS_ASSET_GROUP = 'agency_business_asset_group';
  const BRAND_NAME = 'brand_name';
  const BUSINESS = 'business';
  const BUSINESS_VERTICAL = 'business_vertical';
  const ID = 'id';
  const PARTNER_COUNT = 'partner_count';
  const PENDING_AGENCY_BUSINESS = 'pending_agency_business';
  const PROGRAM_COUNT = 'program_count';
  const SHARED_BUSINESS_ASSET_GROUP = 'shared_business_asset_group';
  const SHARED_CREATIVE_FOLDER_COUNT = 'shared_creative_folder_count';
  const SHARED_CUSTOM_AUDIENCE_COUNT = 'shared_custom_audience_count';

  public function getFieldTypes() {
    return array(
      'active_partner_count' => 'int',
      'agency_business' => 'Business',
      'agency_business_asset_group' => 'BusinessAssetGroup',
      'brand_name' => 'string',
      'business' => 'Business',
      'business_vertical' => 'string',
      'id' => 'string',
      'partner_count' => 'int',
      'pending_agency_business' => 'string',
      'program_count' => 'int',
      'shared_business_asset_group' => 'BusinessAssetGroup',
      'shared_creative_folder_count' => 'int',
      'shared_custom_audience_count' => 'int',
    );
  }
}
