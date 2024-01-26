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

class CloudGameFields extends AbstractEnum {

  const ID = 'id';
  const NAME = 'name';
  const OWNER = 'owner';
  const PLAYABLE_AD_FILE_SIZE = 'playable_ad_file_size';
  const PLAYABLE_AD_ORIENTATION = 'playable_ad_orientation';
  const PLAYABLE_AD_PACKAGE_NAME = 'playable_ad_package_name';
  const PLAYABLE_AD_REJECT_REASON = 'playable_ad_reject_reason';
  const PLAYABLE_AD_STATUS = 'playable_ad_status';
  const PLAYABLE_AD_UPLOAD_TIME = 'playable_ad_upload_time';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'name' => 'string',
      'owner' => 'Profile',
      'playable_ad_file_size' => 'unsigned int',
      'playable_ad_orientation' => 'string',
      'playable_ad_package_name' => 'string',
      'playable_ad_reject_reason' => 'string',
      'playable_ad_status' => 'string',
      'playable_ad_upload_time' => 'datetime',
    );
  }
}
