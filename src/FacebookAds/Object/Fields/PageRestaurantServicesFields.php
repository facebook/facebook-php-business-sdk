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

class PageRestaurantServicesFields extends AbstractEnum {

  const CATERING = 'catering';
  const DELIVERY = 'delivery';
  const GROUPS = 'groups';
  const KIDS = 'kids';
  const OUTDOOR = 'outdoor';
  const PICKUP = 'pickup';
  const RESERVE = 'reserve';
  const TAKEOUT = 'takeout';
  const WAITER = 'waiter';
  const WALKINS = 'walkins';

  public function getFieldTypes() {
    return array(
      'catering' => 'bool',
      'delivery' => 'bool',
      'groups' => 'bool',
      'kids' => 'bool',
      'outdoor' => 'bool',
      'pickup' => 'bool',
      'reserve' => 'bool',
      'takeout' => 'bool',
      'waiter' => 'bool',
      'walkins' => 'bool',
    );
  }
}
