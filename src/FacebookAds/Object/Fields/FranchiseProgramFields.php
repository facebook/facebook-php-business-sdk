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

class FranchiseProgramFields extends AbstractEnum {

  const BUSINESS_ASSET_GROUP = 'business_asset_group';
  const CREATOR_BUSINESS = 'creator_business';
  const DESCRIPTION = 'description';
  const END_DATE = 'end_date';
  const ID = 'id';
  const NAME = 'name';
  const PROGRAM_ACCESS_TYPE = 'program_access_type';
  const PROGRAM_APPROVAL_TYPE = 'program_approval_type';
  const PROGRAM_IMAGE_LINK = 'program_image_link';
  const PROGRAM_URL = 'program_url';
  const SHARED_CUSTOM_AUDIENCE = 'shared_custom_audience';
  const START_DATE = 'start_date';

  public function getFieldTypes() {
    return array(
      'business_asset_group' => 'BusinessAssetGroup',
      'creator_business' => 'Business',
      'description' => 'string',
      'end_date' => 'datetime',
      'id' => 'string',
      'name' => 'string',
      'program_access_type' => 'string',
      'program_approval_type' => 'string',
      'program_image_link' => 'string',
      'program_url' => 'string',
      'shared_custom_audience' => 'CustomAudience',
      'start_date' => 'datetime',
    );
  }
}
