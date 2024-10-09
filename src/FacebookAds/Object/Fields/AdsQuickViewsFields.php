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

class AdsQuickViewsFields extends AbstractEnum {

  const ATTRIBUTION_WINDOWS = 'attribution_windows';
  const BREAKDOWNS = 'breakdowns';
  const COLUMN_FIELDS = 'column_fields';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const NAME = 'name';
  const PERMISSION = 'permission';
  const SORT = 'sort';

  public function getFieldTypes() {
    return array(
      'attribution_windows' => 'list<string>',
      'breakdowns' => 'list<string>',
      'column_fields' => 'list<string>',
      'description' => 'string',
      'id' => 'string',
      'name' => 'string',
      'permission' => 'string',
      'sort' => 'list<Object>',
    );
  }
}
