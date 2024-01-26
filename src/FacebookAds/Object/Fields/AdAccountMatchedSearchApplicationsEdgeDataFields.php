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

class AdAccountMatchedSearchApplicationsEdgeDataFields extends AbstractEnum {

  const APP_ID = 'app_id';
  const ARE_APP_EVENTS_UNAVAILABLE = 'are_app_events_unavailable';
  const ICON_URL = 'icon_url';
  const NAME = 'name';
  const SEARCH_SOURCE_STORE = 'search_source_store';
  const STORE = 'store';
  const UNIQUE_ID = 'unique_id';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'app_id' => 'string',
      'are_app_events_unavailable' => 'bool',
      'icon_url' => 'string',
      'name' => 'string',
      'search_source_store' => 'string',
      'store' => 'string',
      'unique_id' => 'string',
      'url' => 'string',
    );
  }
}
