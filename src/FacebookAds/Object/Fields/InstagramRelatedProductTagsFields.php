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

class InstagramRelatedProductTagsFields extends AbstractEnum {

  const CHECKOUT_SETTING = 'checkout_setting';
  const ID = 'id';
  const IMAGE_URI = 'image_uri';
  const NAME = 'name';
  const PRICE_LABEL = 'price_label';
  const SALE_PRICE_LABEL = 'sale_price_label';

  public function getFieldTypes() {
    return array(
      'checkout_setting' => 'string',
      'id' => 'int',
      'image_uri' => 'string',
      'name' => 'string',
      'price_label' => 'string',
      'sale_price_label' => 'string',
    );
  }
}
