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

class PreapprovalReviewFields extends AbstractEnum {

  const COMP_TYPE = 'comp_type';
  const CROW_COMPONENT_ID = 'crow_component_id';
  const IS_HUMAN_REVIEWED = 'is_human_reviewed';
  const IS_REVIEWED = 'is_reviewed';
  const POLICY_INFO = 'policy_info';

  public function getFieldTypes() {
    return array(
      'comp_type' => 'string',
      'crow_component_id' => 'int',
      'is_human_reviewed' => 'bool',
      'is_reviewed' => 'bool',
      'policy_info' => 'list<map<string, Object>>',
    );
  }
}
