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

class AdsSegmentsFields extends AbstractEnum {

  const DAILY_AUDIENCE_SIZE = 'daily_audience_size';
  const DAILY_IMPRESSIONS = 'daily_impressions';
  const DESCRIPTION = 'description';
  const ID = 'id';
  const NAME = 'name';
  const PATH = 'path';
  const POPULARITY = 'popularity';
  const PROJECTED_CPM = 'projected_cpm';
  const PROJECTED_DAILY_REVENUE = 'projected_daily_revenue';

  public function getFieldTypes() {
    return array(
      'daily_audience_size' => 'int',
      'daily_impressions' => 'int',
      'description' => 'string',
      'id' => 'string',
      'name' => 'string',
      'path' => 'list<string>',
      'popularity' => 'float',
      'projected_cpm' => 'int',
      'projected_daily_revenue' => 'int',
    );
  }
}
