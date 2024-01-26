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

class PrivateLiftStudyInstanceFields extends AbstractEnum {

  const BREAKDOWN_KEY = 'breakdown_key';
  const CREATED_TIME = 'created_time';
  const FEATURE_LIST = 'feature_list';
  const ID = 'id';
  const ISSUER_CERTIFICATE = 'issuer_certificate';
  const LATEST_STATUS_UPDATE_TIME = 'latest_status_update_time';
  const RUN_ID = 'run_id';
  const SERVER_HOSTNAMES = 'server_hostnames';
  const SERVER_IPS = 'server_ips';
  const STATUS = 'status';
  const TIER = 'tier';

  public function getFieldTypes() {
    return array(
      'breakdown_key' => 'string',
      'created_time' => 'datetime',
      'feature_list' => 'list<string>',
      'id' => 'string',
      'issuer_certificate' => 'string',
      'latest_status_update_time' => 'datetime',
      'run_id' => 'string',
      'server_hostnames' => 'list<string>',
      'server_ips' => 'list<string>',
      'status' => 'string',
      'tier' => 'string',
    );
  }
}
