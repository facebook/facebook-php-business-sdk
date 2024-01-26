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

class AdPlacePageSetFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ID = 'id';
  const LOCATION_TYPES = 'location_types';
  const NAME = 'name';
  const PAGES_COUNT = 'pages_count';
  const PARENT_PAGE = 'parent_page';
  const TARGETED_AREA_TYPE = 'targeted_area_type';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'id' => 'string',
      'location_types' => 'list<string>',
      'name' => 'string',
      'pages_count' => 'int',
      'parent_page' => 'Page',
      'targeted_area_type' => 'TargetedAreaType',
    );
  }
}
