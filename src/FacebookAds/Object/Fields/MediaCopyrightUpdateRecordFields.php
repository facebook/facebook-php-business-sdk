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

class MediaCopyrightUpdateRecordFields extends AbstractEnum {

  const ACTION_TYPES = 'action_types';
  const ACTOR = 'actor';
  const ACTOR_TYPE = 'actor_type';
  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const OWNERSHIP_COUNTRIES = 'ownership_countries';
  const WHITELISTED_ACCOUNTS = 'whitelisted_accounts';

  public function getFieldTypes() {
    return array(
      'action_types' => 'list<string>',
      'actor' => 'User',
      'actor_type' => 'string',
      'creation_time' => 'datetime',
      'id' => 'string',
      'ownership_countries' => 'list<Object>',
      'whitelisted_accounts' => 'list<Object>',
    );
  }
}
