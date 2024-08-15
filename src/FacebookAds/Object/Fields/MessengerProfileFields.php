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

class MessengerProfileFields extends AbstractEnum {

  const ACCOUNT_LINKING_URL = 'account_linking_url';
  const COMMANDS = 'commands';
  const GET_STARTED = 'get_started';
  const GREETING = 'greeting';
  const ICE_BREAKERS = 'ice_breakers';
  const PAYMENT_SETTINGS = 'payment_settings';
  const PERSISTENT_MENU = 'persistent_menu';
  const SUBJECT_TO_NEW_EU_PRIVACY_RULES = 'subject_to_new_eu_privacy_rules';
  const TARGET_AUDIENCE = 'target_audience';
  const WHITELISTED_DOMAINS = 'whitelisted_domains';

  public function getFieldTypes() {
    return array(
      'account_linking_url' => 'string',
      'commands' => 'list<Object>',
      'get_started' => 'Object',
      'greeting' => 'list<Object>',
      'ice_breakers' => 'list<Object>',
      'payment_settings' => 'Object',
      'persistent_menu' => 'list<Object>',
      'subject_to_new_eu_privacy_rules' => 'bool',
      'target_audience' => 'Object',
      'whitelisted_domains' => 'list<string>',
    );
  }
}
