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

class ThirdPartyPartnerViewabilityRequestFields extends AbstractEnum {

  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const HOUR = 'hour';
  const ID = 'id';
  const METRIC = 'metric';
  const MODIFIED_TIME = 'modified_time';
  const OWNER_INSTANCE_ID = 'owner_instance_id';
  const PLATFORM = 'platform';
  const STATUS = 'status';
  const TOTAL_FILE_COUNT = 'total_file_count';

  public function getFieldTypes() {
    return array(
      'created_time' => 'datetime',
      'description' => 'string',
      'hour' => 'datetime',
      'id' => 'string',
      'metric' => 'Metric',
      'modified_time' => 'datetime',
      'owner_instance_id' => 'string',
      'platform' => 'Platform',
      'status' => 'Status',
      'total_file_count' => 'unsigned int',
    );
  }
}
