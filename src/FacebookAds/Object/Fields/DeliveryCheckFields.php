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

class DeliveryCheckFields extends AbstractEnum {

  const CHECK_NAME = 'check_name';
  const DESCRIPTION = 'description';
  const EXTRA_INFO = 'extra_info';
  const SUMMARY = 'summary';

  public function getFieldTypes() {
    return array(
      'check_name' => 'string',
      'description' => 'string',
      'extra_info' => 'DeliveryCheckExtraInfo',
      'summary' => 'string',
    );
  }
}
