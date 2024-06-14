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

class AdCreationPackageConfigFields extends AbstractEnum {

  const API_VERSION = 'api_version';
  const ID = 'id';
  const IS_ELIGIBLE_FOR_DEFAULT_OPT_IN = 'is_eligible_for_default_opt_in';
  const OBJECTIVE = 'objective';
  const PACKAGE_ID = 'package_id';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'api_version' => 'string',
      'id' => 'string',
      'is_eligible_for_default_opt_in' => 'bool',
      'objective' => 'string',
      'package_id' => 'string',
      'status' => 'string',
    );
  }
}
