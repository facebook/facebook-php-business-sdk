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

class DogNotificationSettingsFields extends AbstractEnum {

  const DOG_CHECK_KEY = 'dog_check_key';
  const ID = 'id';
  const SUBSCRIPTION_STATUS_PER_CHANNEL = 'subscription_status_per_channel';

  public function getFieldTypes() {
    return array(
      'dog_check_key' => 'string',
      'id' => 'string',
      'subscription_status_per_channel' => 'list<map<string, string>>',
    );
  }
}
