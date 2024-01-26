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

class AdKeywordsFields extends AbstractEnum {

  const BRANDS = 'brands';
  const PRODUCT_CATEGORIES = 'product_categories';
  const PRODUCT_NAMES = 'product_names';
  const SEARCH_TERMS = 'search_terms';

  public function getFieldTypes() {
    return array(
      'brands' => 'list<string>',
      'product_categories' => 'list<string>',
      'product_names' => 'list<string>',
      'search_terms' => 'list<string>',
    );
  }
}
