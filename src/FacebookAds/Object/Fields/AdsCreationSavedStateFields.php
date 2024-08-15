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

class AdsCreationSavedStateFields extends AbstractEnum {

  const AD_ACCOUNT = 'ad_account';
  const ID = 'id';
  const SERIALIZED_STORE_DATA = 'serialized_store_data';
  const TIME_UPDATED = 'time_updated';
  const USER = 'user';

  public function getFieldTypes() {
    return array(
      'ad_account' => 'AdAccount',
      'id' => 'string',
      'serialized_store_data' => 'string',
      'time_updated' => 'datetime',
      'user' => 'Object',
    );
  }
}
