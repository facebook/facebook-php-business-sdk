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

class WearableDevicePublicKeyFields extends AbstractEnum {

  const BASE64_ENCODED_PUBLIC_KEY = 'base64_encoded_public_key';
  const CREATION_TIME_ON_DEVICE = 'creation_time_on_device';
  const DEVICE_UUID = 'device_uuid';
  const ID = 'id';
  const KEY_TYPE = 'key_type';
  const OWNER_ID = 'owner_id';
  const PRODUCT_USE_CASE = 'product_use_case';
  const VERSION = 'version';

  public function getFieldTypes() {
    return array(
      'base64_encoded_public_key' => 'string',
      'creation_time_on_device' => 'datetime',
      'device_uuid' => 'string',
      'id' => 'string',
      'key_type' => 'string',
      'owner_id' => 'string',
      'product_use_case' => 'string',
      'version' => 'string',
    );
  }
}
