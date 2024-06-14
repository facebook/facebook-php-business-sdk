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

class WebsiteCreativeAssetSuggestionsFields extends AbstractEnum {

  const AD_ACCOUNT_ID = 'ad_account_id';
  const EXTRACTION_STATUS = 'extraction_status';
  const ID = 'id';
  const LINK_URL = 'link_url';

  public function getFieldTypes() {
    return array(
      'ad_account_id' => 'string',
      'extraction_status' => 'string',
      'id' => 'string',
      'link_url' => 'string',
    );
  }
}
