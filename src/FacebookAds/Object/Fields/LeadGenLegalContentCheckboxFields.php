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

class LeadGenLegalContentCheckboxFields extends AbstractEnum {

  const ID = 'id';
  const IS_CHECKED_BY_DEFAULT = 'is_checked_by_default';
  const IS_REQUIRED = 'is_required';
  const KEY = 'key';
  const TEXT = 'text';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'is_checked_by_default' => 'bool',
      'is_required' => 'bool',
      'key' => 'string',
      'text' => 'string',
    );
  }
}
