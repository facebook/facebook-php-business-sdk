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

class ProductItemInsightsFields extends AbstractEnum {

  const AD_CLICK_COUNT = 'ad_click_count';
  const AD_IMPRESSION_COUNT = 'ad_impression_count';
  const ADD_TO_CART_COUNT = 'add_to_cart_count';
  const PURCHASE_COUNT = 'purchase_count';
  const VIEW_CONTENT_COUNT = 'view_content_count';

  public function getFieldTypes() {
    return array(
      'ad_click_count' => 'int',
      'ad_impression_count' => 'int',
      'add_to_cart_count' => 'int',
      'purchase_count' => 'int',
      'view_content_count' => 'int',
    );
  }
}
