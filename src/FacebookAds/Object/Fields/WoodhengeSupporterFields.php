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

class WoodhengeSupporterFields extends AbstractEnum {

  const CREATION_TIME = 'creation_time';
  const ID = 'id';
  const IS_GIFTED_SUBSCRIPTION = 'is_gifted_subscription';
  const MOST_RECENT_SUBSCRIPTION_TIME = 'most_recent_subscription_time';
  const NUMBER_OF_MONTHS_SUBSCRIBED = 'number_of_months_subscribed';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'creation_time' => 'datetime',
      'id' => 'string',
      'is_gifted_subscription' => 'bool',
      'most_recent_subscription_time' => 'datetime',
      'number_of_months_subscribed' => 'unsigned int',
      'user' => 'User',
    );
  }
}
