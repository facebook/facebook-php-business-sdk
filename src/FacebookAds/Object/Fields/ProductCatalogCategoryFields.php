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

class ProductCatalogCategoryFields extends AbstractEnum {

  const CRITERIA_VALUE = 'criteria_value';
  const DESCRIPTION = 'description';
  const DESTINATION_URI = 'destination_uri';
  const IMAGE_URL = 'image_url';
  const NAME = 'name';
  const NUM_ITEMS = 'num_items';
  const TOKENS = 'tokens';
  const DATA = 'data';

  public function getFieldTypes() {
    return array(
      'criteria_value' => 'string',
      'description' => 'string',
      'destination_uri' => 'string',
      'image_url' => 'string',
      'name' => 'string',
      'num_items' => 'int',
      'tokens' => 'list<map<string, string>>',
      'data' => 'list<map>',
    );
  }
}
