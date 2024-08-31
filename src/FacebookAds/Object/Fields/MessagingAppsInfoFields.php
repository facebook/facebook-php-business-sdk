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

class MessagingAppsInfoFields extends AbstractEnum {

  const CTD_SUPPORT_ONLY_FOR_IG_APP = 'ctd_support_only_for_ig_app';
  const HAS_INSTAGRAM_MESSAGING_PERMISSION = 'has_instagram_messaging_permission';
  const HAS_MESSENGER_MESSAGING_PERMISSION = 'has_messenger_messaging_permission';
  const ID = 'id';
  const NAME = 'name';

  public function getFieldTypes() {
    return array(
      'ctd_support_only_for_ig_app' => 'bool',
      'has_instagram_messaging_permission' => 'bool',
      'has_messenger_messaging_permission' => 'bool',
      'id' => 'string',
      'name' => 'string',
    );
  }
}
