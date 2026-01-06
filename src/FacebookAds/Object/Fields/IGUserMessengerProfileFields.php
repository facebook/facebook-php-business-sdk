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

class IGUserMessengerProfileFields extends AbstractEnum {

  const ICE_BREAKERS = 'ice_breakers';
  const PERSISTENT_MENU = 'persistent_menu';

  public function getFieldTypes() {
    return array(
      'ice_breakers' => 'list<Object>',
      'persistent_menu' => 'list<Object>',
    );
  }
}
