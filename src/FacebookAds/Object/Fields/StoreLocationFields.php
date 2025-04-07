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

class StoreLocationFields extends AbstractEnum {

  const FULL_ADDRESS = 'full_address';
  const HOURS = 'hours';
  const ID = 'id';
  const PHONE_NUMBER = 'phone_number';
  const PICKUP_OPTIONS = 'pickup_options';
  const PRICE_RANGE = 'price_range';
  const STORE_CODE = 'store_code';
  const ZIP_CODE = 'zip_code';

  public function getFieldTypes() {
    return array(
      'full_address' => 'string',
      'hours' => 'Object',
      'id' => 'string',
      'phone_number' => 'string',
      'pickup_options' => 'list<string>',
      'price_range' => 'string',
      'store_code' => 'string',
      'zip_code' => 'string',
    );
  }
}
