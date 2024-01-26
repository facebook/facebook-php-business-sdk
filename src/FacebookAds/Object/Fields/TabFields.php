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

class TabFields extends AbstractEnum {

  const APPLICATION = 'application';
  const CUSTOM_IMAGE_URL = 'custom_image_url';
  const CUSTOM_NAME = 'custom_name';
  const ID = 'id';
  const IMAGE_URL = 'image_url';
  const IS_NON_CONNECTION_LANDING_TAB = 'is_non_connection_landing_tab';
  const IS_PERMANENT = 'is_permanent';
  const LINK = 'link';
  const NAME = 'name';
  const POSITION = 'position';

  public function getFieldTypes() {
    return array(
      'application' => 'Application',
      'custom_image_url' => 'string',
      'custom_name' => 'string',
      'id' => 'string',
      'image_url' => 'string',
      'is_non_connection_landing_tab' => 'bool',
      'is_permanent' => 'bool',
      'link' => 'string',
      'name' => 'string',
      'position' => 'unsigned int',
    );
  }
}
