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

class PageSavedFilterFields extends AbstractEnum {

  const DISPLAY_NAME = 'display_name';
  const FILTERS = 'filters';
  const ID = 'id';
  const PAGE_ID = 'page_id';
  const SECTION = 'section';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';

  public function getFieldTypes() {
    return array(
      'display_name' => 'string',
      'filters' => 'list<Object>',
      'id' => 'string',
      'page_id' => 'string',
      'section' => 'string',
      'time_created' => 'int',
      'time_updated' => 'int',
    );
  }
}
