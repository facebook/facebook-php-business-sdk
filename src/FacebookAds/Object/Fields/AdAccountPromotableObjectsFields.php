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

class AdAccountPromotableObjectsFields extends AbstractEnum {

  const PROMOTABLE_APP_IDS = 'promotable_app_ids';
  const PROMOTABLE_PAGE_IDS = 'promotable_page_ids';
  const PROMOTABLE_URLS = 'promotable_urls';

  public function getFieldTypes() {
    return array(
      'promotable_app_ids' => 'list<string>',
      'promotable_page_ids' => 'list<string>',
      'promotable_urls' => 'list<string>',
    );
  }
}
