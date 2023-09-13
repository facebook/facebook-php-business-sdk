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

class CatalogSegmentAllMatchCountLaserFields extends AbstractEnum {

  const DATE_START = 'date_start';
  const DATE_STOP = 'date_stop';
  const EVENT = 'event';
  const SOURCE = 'source';
  const TOTAL_MATCHED_CONTENT_IDS = 'total_matched_content_ids';
  const UNIQUE_MATCHED_CONTENT_IDS = 'unique_matched_content_ids';

  public function getFieldTypes() {
    return array(
      'date_start' => 'string',
      'date_stop' => 'string',
      'event' => 'string',
      'source' => 'ExternalEventSource',
      'total_matched_content_ids' => 'int',
      'unique_matched_content_ids' => 'int',
    );
  }
}
