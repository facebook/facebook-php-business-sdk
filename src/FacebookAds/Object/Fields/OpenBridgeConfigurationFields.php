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

class OpenBridgeConfigurationFields extends AbstractEnum {

  const ACCESS_KEY = 'access_key';
  const ACTIVE = 'active';
  const ENDPOINT = 'endpoint';
  const FALLBACK_DOMAIN = 'fallback_domain';
  const FALLBACK_DOMAIN_ENABLED = 'fallback_domain_enabled';
  const HOST_BUSINESS_ID = 'host_business_id';
  const HOST_EXTERNAL_ID = 'host_external_id';
  const ID = 'id';
  const PIXEL_ID = 'pixel_id';

  public function getFieldTypes() {
    return array(
      'access_key' => 'string',
      'active' => 'bool',
      'endpoint' => 'string',
      'fallback_domain' => 'string',
      'fallback_domain_enabled' => 'bool',
      'host_business_id' => 'string',
      'host_external_id' => 'string',
      'id' => 'string',
      'pixel_id' => 'string',
    );
  }
}
