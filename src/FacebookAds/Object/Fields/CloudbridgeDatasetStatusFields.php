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

class CloudbridgeDatasetStatusFields extends AbstractEnum {

  const APP_REDACTED_EVENT = 'app_redacted_event';
  const APP_SENSITIVE_PARAMS = 'app_sensitive_params';
  const APP_UNVERIFIED_EVENT = 'app_unverified_event';
  const HAS_APP_ASSOCIATED = 'has_app_associated';
  const IS_APP_PROHIBITED = 'is_app_prohibited';
  const IS_DATASET = 'is_dataset';

  public function getFieldTypes() {
    return array(
      'app_redacted_event' => 'list<string>',
      'app_sensitive_params' => 'list<map<string, list<string>>>',
      'app_unverified_event' => 'list<string>',
      'has_app_associated' => 'bool',
      'is_app_prohibited' => 'bool',
      'is_dataset' => 'bool',
    );
  }
}
