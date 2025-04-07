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

  const ACTIVE = 'active';
  const CLOUD_PROVIDER = 'cloud_provider';
  const CLOUD_REGION = 'cloud_region';
  const DESTINATION_ID = 'destination_id';
  const ENDPOINT = 'endpoint';
  const FALLBACK_DOMAIN = 'fallback_domain';
  const FIRST_PARTY_DOMAIN = 'first_party_domain';
  const HOST_BUSINESS_ID = 'host_business_id';
  const ID = 'id';
  const INSTANCE_ID = 'instance_id';
  const INSTANCE_VERSION = 'instance_version';
  const IS_SGW_INSTANCE = 'is_sgw_instance';
  const PARTNER_NAME = 'partner_name';
  const PIXEL_ID = 'pixel_id';

  public function getFieldTypes() {
    return array(
      'active' => 'bool',
      'cloud_provider' => 'string',
      'cloud_region' => 'string',
      'destination_id' => 'string',
      'endpoint' => 'string',
      'fallback_domain' => 'string',
      'first_party_domain' => 'string',
      'host_business_id' => 'string',
      'id' => 'string',
      'instance_id' => 'string',
      'instance_version' => 'string',
      'is_sgw_instance' => 'bool',
      'partner_name' => 'string',
      'pixel_id' => 'string',
    );
  }
}
