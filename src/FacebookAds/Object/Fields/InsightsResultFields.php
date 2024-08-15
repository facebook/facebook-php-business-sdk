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

class InsightsResultFields extends AbstractEnum {

  const DESCRIPTION = 'description';
  const DESCRIPTION_FROM_API_DOC = 'description_from_api_doc';
  const ID = 'id';
  const NAME = 'name';
  const PERIOD = 'period';
  const TITLE = 'title';
  const VALUES = 'values';

  public function getFieldTypes() {
    return array(
      'description' => 'string',
      'description_from_api_doc' => 'string',
      'id' => 'string',
      'name' => 'string',
      'period' => 'string',
      'title' => 'string',
      'values' => 'list<InsightsValue>',
    );
  }
}
