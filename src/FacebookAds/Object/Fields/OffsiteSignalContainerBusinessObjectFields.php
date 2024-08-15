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

class OffsiteSignalContainerBusinessObjectFields extends AbstractEnum {

  const BUSINESS = 'business';
  const ID = 'id';
  const IS_ELIGIBLE_FOR_SHARING_TO_AD_ACCOUNT = 'is_eligible_for_sharing_to_ad_account';
  const IS_ELIGIBLE_FOR_SHARING_TO_BUSINESS = 'is_eligible_for_sharing_to_business';
  const IS_UNAVAILABLE = 'is_unavailable';
  const NAME = 'name';
  const PRIMARY_CONTAINER_ID = 'primary_container_id';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'id' => 'string',
      'is_eligible_for_sharing_to_ad_account' => 'bool',
      'is_eligible_for_sharing_to_business' => 'bool',
      'is_unavailable' => 'bool',
      'name' => 'string',
      'primary_container_id' => 'string',
    );
  }
}
