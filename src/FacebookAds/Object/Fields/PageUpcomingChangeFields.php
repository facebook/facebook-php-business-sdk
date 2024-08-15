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

class PageUpcomingChangeFields extends AbstractEnum {

  const CHANGE_TYPE = 'change_type';
  const EFFECTIVE_TIME = 'effective_time';
  const ID = 'id';
  const PAGE = 'page';
  const PROPOSAL = 'proposal';
  const TIMER_STATUS = 'timer_status';

  public function getFieldTypes() {
    return array(
      'change_type' => 'string',
      'effective_time' => 'datetime',
      'id' => 'string',
      'page' => 'Page',
      'proposal' => 'PageChangeProposal',
      'timer_status' => 'string',
    );
  }
}
