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

class BusinessAdvertisableApplicationsResultFields extends AbstractEnum {

  const ARE_APP_EVENTS_UNAVAILABLE = 'are_app_events_unavailable';
  const BUSINESS = 'business';
  const HAS_INSIGHT_PERMISSION = 'has_insight_permission';
  const ID = 'id';
  const NAME = 'name';
  const PHOTO_URL = 'photo_url';

  public function getFieldTypes() {
    return array(
      'are_app_events_unavailable' => 'bool',
      'business' => 'Business',
      'has_insight_permission' => 'bool',
      'id' => 'string',
      'name' => 'string',
      'photo_url' => 'string',
    );
  }
}
