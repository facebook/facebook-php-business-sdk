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

class CPASSetupCatalogProgressFields extends AbstractEnum {

  const CHILD_CATALOG_COUNT = 'child_catalog_count';
  const CHILD_CATALOG_ISSUES = 'child_catalog_issues';
  const ID = 'id';
  const ISSUES = 'issues';
  const NAME = 'name';

  public function getFieldTypes() {
    return array(
      'child_catalog_count' => 'int',
      'child_catalog_issues' => 'list<Object>',
      'id' => 'string',
      'issues' => 'list<Object>',
      'name' => 'string',
    );
  }
}
