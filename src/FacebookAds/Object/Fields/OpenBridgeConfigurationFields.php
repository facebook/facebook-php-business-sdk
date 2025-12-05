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
  const BLOCKED_EVENT_TYPES = 'blocked_event_types';
  const BLOCKED_WEBSITES = 'blocked_websites';
  const BROWSER_AGENT = 'browser_agent';
  const CLOUD_PROVIDER = 'cloud_provider';
  const CLOUD_REGION = 'cloud_region';
  const DESTINATION_ID = 'destination_id';
  const ENDPOINT = 'endpoint';
  const EVENT_ENRICHMENT_STATE = 'event_enrichment_state';
  const FALLBACK_DOMAIN = 'fallback_domain';
  const FIRST_PARTY_DOMAIN = 'first_party_domain';
  const HOST_BUSINESS_ID = 'host_business_id';
  const ID = 'id';
  const INSTANCE_ID = 'instance_id';
  const INSTANCE_VERSION = 'instance_version';
  const IS_SGW_INSTANCE = 'is_sgw_instance';
  const IS_SGW_PIXEL_FROM_META_PIXEL = 'is_sgw_pixel_from_meta_pixel';
  const PARTNER_NAME = 'partner_name';
  const PIXEL_ID = 'pixel_id';
  const SGW_ACCOUNT_ID = 'sgw_account_id';
  const SGW_INSTANCE_URL = 'sgw_instance_url';
  const SGW_PIXEL_ID = 'sgw_pixel_id';

  public function getFieldTypes() {
    return array(
      'active' => 'bool',
      'blocked_event_types' => 'list<string>',
      'blocked_websites' => 'list<string>',
      'browser_agent' => 'list<string>',
      'cloud_provider' => 'string',
      'cloud_region' => 'string',
      'destination_id' => 'string',
      'endpoint' => 'string',
      'event_enrichment_state' => 'string',
      'fallback_domain' => 'string',
      'first_party_domain' => 'string',
      'host_business_id' => 'string',
      'id' => 'string',
      'instance_id' => 'string',
      'instance_version' => 'string',
      'is_sgw_instance' => 'bool',
      'is_sgw_pixel_from_meta_pixel' => 'bool',
      'partner_name' => 'string',
      'pixel_id' => 'string',
      'sgw_account_id' => 'string',
      'sgw_instance_url' => 'string',
      'sgw_pixel_id' => 'string',
    );
  }
}
