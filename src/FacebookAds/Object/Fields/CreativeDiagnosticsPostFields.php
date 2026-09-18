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

class CreativeDiagnosticsPostFields extends AbstractEnum {

  const APPLIED_CONFIG = 'applied_config';
  const CREATIVE_STRATEGIES = 'creative_strategies';
  const GENERATION_REQUEST_ID = 'generation_request_id';

  public function getFieldTypes() {
    return array(
      'applied_config' => 'object',
      'creative_strategies' => 'list<object>',
      'generation_request_id' => 'string',
    );
  }
}
