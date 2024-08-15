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

class AdsReportBuilderFields extends AbstractEnum {

  const HEADERS = 'headers';
  const ROWS = 'rows';
  const SKAN_READINESS_STATUS = 'skan_readiness_status';

  public function getFieldTypes() {
    return array(
      'headers' => 'Object',
      'rows' => 'list<Object>',
      'skan_readiness_status' => 'list<map<string, string>>',
    );
  }
}
