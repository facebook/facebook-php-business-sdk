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

class BrandedContentAdErrorFields extends AbstractEnum {

  const BLAME_FIELD_SPEC = 'blame_field_spec';
  const ERROR_CODE = 'error_code';
  const ERROR_DESCRIPTION = 'error_description';
  const ERROR_MESSAGE = 'error_message';
  const ERROR_PLACEMENT = 'error_placement';
  const ERROR_SEVERITY = 'error_severity';
  const HELP_CENTER_ID = 'help_center_id';

  public function getFieldTypes() {
    return array(
      'blame_field_spec' => 'list<string>',
      'error_code' => 'int',
      'error_description' => 'string',
      'error_message' => 'string',
      'error_placement' => 'string',
      'error_severity' => 'string',
      'help_center_id' => 'int',
    );
  }
}
