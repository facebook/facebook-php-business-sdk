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

class ExternalEventSourceDAStatsResultFields extends AbstractEnum {

  const COUNT_CONTENT_IDS = 'count_content_ids';
  const COUNT_CONTENT_IDS_MATCH_ANY_CATALOG = 'count_content_ids_match_any_catalog';
  const COUNT_FIRES = 'count_fires';
  const COUNT_FIRES_MATCH_ANY_CATALOG = 'count_fires_match_any_catalog';
  const DATE = 'date';
  const PERCENTAGE_MISSED_USERS = 'percentage_missed_users';

  public function getFieldTypes() {
    return array(
      'count_content_ids' => 'unsigned int',
      'count_content_ids_match_any_catalog' => 'unsigned int',
      'count_fires' => 'unsigned int',
      'count_fires_match_any_catalog' => 'unsigned int',
      'date' => 'string',
      'percentage_missed_users' => 'float',
    );
  }
}
