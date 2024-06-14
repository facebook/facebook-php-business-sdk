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

class AnalyticsCohortQueryResultFields extends AbstractEnum {

  const DATA = 'data';
  const ERROR = 'error';
  const QUERY_ID = 'query_id';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'data' => 'Object',
      'error' => 'Object',
      'query_id' => 'string',
      'status' => 'string',
    );
  }
}
