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

class PageChangeProposalFields extends AbstractEnum {

  const ACCEPTANCE_STATUS = 'acceptance_status';
  const CATEGORY = 'category';
  const CURRENT_VALUE = 'current_value';
  const ID = 'id';
  const PROPOSED_VALUE = 'proposed_value';
  const UPCOMING_CHANGE_INFO = 'upcoming_change_info';

  public function getFieldTypes() {
    return array(
      'acceptance_status' => 'string',
      'category' => 'string',
      'current_value' => 'string',
      'id' => 'string',
      'proposed_value' => 'string',
      'upcoming_change_info' => 'PageUpcomingChange',
    );
  }
}
