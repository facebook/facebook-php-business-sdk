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

class AdStudyObjectiveFields extends AbstractEnum {

  const ID = 'id';
  const IS_PRIMARY = 'is_primary';
  const LAST_UPDATED_RESULTS = 'last_updated_results';
  const NAME = 'name';
  const RESULTS = 'results';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'is_primary' => 'bool',
      'last_updated_results' => 'string',
      'name' => 'string',
      'results' => 'list<string>',
      'type' => 'string',
    );
  }
}
