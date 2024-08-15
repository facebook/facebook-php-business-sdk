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

class PrivacyOptionFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const ICON_SRC = 'icon_src';
  const ID = 'id';
  const IS_CURRENTLY_SELECTED = 'is_currently_selected';
  const TYPE = 'type';
  const USER_ID = 'user_id';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'icon_src' => 'string',
      'id' => 'string',
      'is_currently_selected' => 'bool',
      'type' => 'string',
      'user_id' => 'string',
    );
  }
}
