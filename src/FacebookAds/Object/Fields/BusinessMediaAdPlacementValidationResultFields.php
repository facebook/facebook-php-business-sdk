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

class BusinessMediaAdPlacementValidationResultFields extends AbstractEnum {

  const AD_PLACEMENT = 'ad_placement';
  const AD_PLACEMENT_LABEL = 'ad_placement_label';
  const ERROR_MESSAGES = 'error_messages';
  const IS_VALID = 'is_valid';

  public function getFieldTypes() {
    return array(
      'ad_placement' => 'string',
      'ad_placement_label' => 'string',
      'error_messages' => 'list<string>',
      'is_valid' => 'bool',
    );
  }
}
