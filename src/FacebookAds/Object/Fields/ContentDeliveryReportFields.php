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

class ContentDeliveryReportFields extends AbstractEnum {

  const CONTENT_NAME = 'content_name';
  const CONTENT_URL = 'content_url';
  const CREATOR_NAME = 'creator_name';
  const CREATOR_URL = 'creator_url';
  const ESTIMATED_IMPRESSIONS = 'estimated_impressions';

  public function getFieldTypes() {
    return array(
      'content_name' => 'string',
      'content_url' => 'string',
      'creator_name' => 'string',
      'creator_url' => 'string',
      'estimated_impressions' => 'unsigned int',
    );
  }
}
