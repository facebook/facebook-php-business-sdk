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

class ProductItemProductDisclosureFields extends AbstractEnum {

  const CONTENT = 'content';
  const DISPLAY_PREFERENCES = 'display_preferences';
  const JURISDICTIONS = 'jurisdictions';
  const SYMBOL = 'symbol';
  const TAXONOMY_PUBLIC_ID = 'taxonomy_public_id';
  const TITLE = 'title';

  public function getFieldTypes() {
    return array(
      'content' => 'string',
      'display_preferences' => 'Object',
      'jurisdictions' => 'list<string>',
      'symbol' => 'Object',
      'taxonomy_public_id' => 'string',
      'title' => 'string',
    );
  }
}
