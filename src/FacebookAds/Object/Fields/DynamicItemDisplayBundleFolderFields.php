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

class DynamicItemDisplayBundleFolderFields extends AbstractEnum {

  const CATEGORIZATION_CRITERIA = 'categorization_criteria';
  const ID = 'id';
  const NAME = 'name';
  const PRODUCT_CATALOG = 'product_catalog';
  const PRODUCT_SET = 'product_set';
  const VALID_LABELS = 'valid_labels';

  public function getFieldTypes() {
    return array(
      'categorization_criteria' => 'string',
      'id' => 'string',
      'name' => 'string',
      'product_catalog' => 'ProductCatalog',
      'product_set' => 'ProductSet',
      'valid_labels' => 'list<map<string, list<string>>>',
    );
  }
}
