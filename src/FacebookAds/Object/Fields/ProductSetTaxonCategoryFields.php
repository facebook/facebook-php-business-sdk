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

class ProductSetTaxonCategoryFields extends AbstractEnum {

  const CATEGORY_ID = 'category_id';
  const CATEGORY_NAME = 'category_name';
  const IMAGE_URL = 'image_url';

  public function getFieldTypes() {
    return array(
      'category_id' => 'int',
      'category_name' => 'string',
      'image_url' => 'string',
    );
  }
}
