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

class ProductDeliveryPreferenceFields extends AbstractEnum {

  const AD_OBJECT_ID = 'ad_object_id';
  const ID = 'id';
  const PRODUCT_PRIORITY = 'product_priority';
  const PRODUCT_PRIORITY_CATEGORY = 'product_priority_category';

  public function getFieldTypes() {
    return array(
      'ad_object_id' => 'string',
      'id' => 'string',
      'product_priority' => 'string',
      'product_priority_category' => 'list<string>',
    );
  }
}
