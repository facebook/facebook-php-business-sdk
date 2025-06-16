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

class LeadGenClientValidationRulesFields extends AbstractEnum {

  const EXCLUDE_EMOJI_AND_SPECIAL_CHARS_ENABLED = 'exclude_emoji_and_special_chars_enabled';
  const MAX_LENGTH_VALUE = 'max_length_value';
  const MIN_LENGTH_VALUE = 'min_length_value';

  public function getFieldTypes() {
    return array(
      'exclude_emoji_and_special_chars_enabled' => 'bool',
      'max_length_value' => 'int',
      'min_length_value' => 'int',
    );
  }
}
