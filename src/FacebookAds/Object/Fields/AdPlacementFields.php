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

class AdPlacementFields extends AbstractEnum {

  const BUNDLE_ID = 'bundle_id';
  const DISPLAY_FORMAT = 'display_format';
  const EXTERNAL_PLACEMENT_ID = 'external_placement_id';
  const GOOGLE_DISPLAY_FORMAT = 'google_display_format';
  const ID = 'id';
  const NAME = 'name';
  const PLACEMENT_GROUP = 'placement_group';
  const PLATFORM = 'platform';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'bundle_id' => 'string',
      'display_format' => 'string',
      'external_placement_id' => 'string',
      'google_display_format' => 'string',
      'id' => 'string',
      'name' => 'string',
      'placement_group' => 'Object',
      'platform' => 'string',
      'status' => 'string',
    );
  }
}
