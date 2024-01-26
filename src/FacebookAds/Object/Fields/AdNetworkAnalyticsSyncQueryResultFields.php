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

class AdNetworkAnalyticsSyncQueryResultFields extends AbstractEnum {

  const OMITTED_RESULTS = 'omitted_results';
  const QUERY_ID = 'query_id';
  const RESULTS = 'results';

  public function getFieldTypes() {
    return array(
      'omitted_results' => 'list<Object>',
      'query_id' => 'string',
      'results' => 'list<Object>',
    );
  }
}
