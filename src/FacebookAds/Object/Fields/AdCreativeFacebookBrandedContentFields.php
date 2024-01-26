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

class AdCreativeFacebookBrandedContentFields extends AbstractEnum {

  const SHARED_TO_SPONSOR_STATUS = 'shared_to_sponsor_status';
  const SPONSOR_PAGE_ID = 'sponsor_page_id';
  const SPONSOR_RELATIONSHIP = 'sponsor_relationship';

  public function getFieldTypes() {
    return array(
      'shared_to_sponsor_status' => 'string',
      'sponsor_page_id' => 'string',
      'sponsor_relationship' => 'string',
    );
  }
}
