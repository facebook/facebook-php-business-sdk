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

class ProductFeedRulePreviewSampleFields extends AbstractEnum {

  const PROPERTIES_AFTER = 'properties_after';
  const PROPERTIES_BEFORE = 'properties_before';

  public function getFieldTypes() {
    return array(
      'properties_after' => 'list<map<string, string>>',
      'properties_before' => 'list<map<string, string>>',
    );
  }
}
