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

class AdSavedKeywordsFields extends AbstractEnum {

  const ACCOUNT = 'account';
  const ID = 'id';
  const KEYWORDS = 'keywords';
  const NAME = 'name';
  const RUN_STATUS = 'run_status';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';

  public function getFieldTypes() {
    return array(
      'account' => 'AdAccount',
      'id' => 'string',
      'keywords' => 'AdKeywords',
      'name' => 'string',
      'run_status' => 'string',
      'time_created' => 'datetime',
      'time_updated' => 'datetime',
    );
  }
}
