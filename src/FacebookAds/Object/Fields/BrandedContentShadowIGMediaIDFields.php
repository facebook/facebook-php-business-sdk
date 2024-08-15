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

class BrandedContentShadowIGMediaIDFields extends AbstractEnum {

  const ELIGIBILITY_ERRORS = 'eligibility_errors';
  const HAS_PERMISSION_FOR_PARTNERSHIP_AD = 'has_permission_for_partnership_ad';
  const ID = 'id';
  const OWNER_ID = 'owner_id';
  const PERMALINK = 'permalink';

  public function getFieldTypes() {
    return array(
      'eligibility_errors' => 'list<string>',
      'has_permission_for_partnership_ad' => 'bool',
      'id' => 'string',
      'owner_id' => 'string',
      'permalink' => 'string',
    );
  }
}
