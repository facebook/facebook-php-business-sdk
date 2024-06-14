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

class CPASParentCatalogSettingsFields extends AbstractEnum {

  const ATTRIBUTION_WINDOWS = 'attribution_windows';
  const DEFAULT_CURRENCY = 'default_currency';
  const DISABLE_USE_AS_PARENT_CATALOG = 'disable_use_as_parent_catalog';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'attribution_windows' => 'list<string>',
      'default_currency' => 'string',
      'disable_use_as_parent_catalog' => 'bool',
      'id' => 'string',
    );
  }
}
