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

class AdAssetFeedAdditionalDataFields extends AbstractEnum {

  const AUTOMATED_PRODUCT_TAGS = 'automated_product_tags';
  const BRAND_PAGE_ID = 'brand_page_id';
  const IS_CLICK_TO_MESSAGE = 'is_click_to_message';
  const MULTI_SHARE_END_CARD = 'multi_share_end_card';
  const PAGE_WELCOME_MESSAGE = 'page_welcome_message';

  public function getFieldTypes() {
    return array(
      'automated_product_tags' => 'bool',
      'brand_page_id' => 'string',
      'is_click_to_message' => 'bool',
      'multi_share_end_card' => 'bool',
      'page_welcome_message' => 'string',
    );
  }
}
