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

class CTXPartnerAppWelcomeMessageFlowFields extends AbstractEnum {

  const COMPATIBLE_PLATFORMS = 'compatible_platforms';
  const ELIGIBLE_PLATFORMS = 'eligible_platforms';
  const ID = 'id';
  const IS_USED_IN_AD = 'is_used_in_ad';
  const LAST_UPDATE_TIME = 'last_update_time';
  const NAME = 'name';
  const WELCOME_MESSAGE_FLOW = 'welcome_message_flow';

  public function getFieldTypes() {
    return array(
      'compatible_platforms' => 'list<string>',
      'eligible_platforms' => 'list<string>',
      'id' => 'string',
      'is_used_in_ad' => 'bool',
      'last_update_time' => 'datetime',
      'name' => 'string',
      'welcome_message_flow' => 'string',
    );
  }
}
