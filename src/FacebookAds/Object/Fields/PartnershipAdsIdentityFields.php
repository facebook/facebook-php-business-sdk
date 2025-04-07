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

class PartnershipAdsIdentityFields extends AbstractEnum {

  const IS_SAVED = 'is_saved';
  const POST_TYPES = 'post_types';
  const SECONDARY_IDENTITIES = 'secondary_identities';

  public function getFieldTypes() {
    return array(
      'is_saved' => 'bool',
      'post_types' => 'list<string>',
      'secondary_identities' => 'list<Object>',
    );
  }
}
