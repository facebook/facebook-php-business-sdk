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

class AdRuleFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const CREATED_BY = 'created_by';
  const CREATED_TIME = 'created_time';
  const EVALUATION_SPEC = 'evaluation_spec';
  const EXECUTION_SPEC = 'execution_spec';
  const ID = 'id';
  const NAME = 'name';
  const SCHEDULE_SPEC = 'schedule_spec';
  const STATUS = 'status';
  const UPDATED_TIME = 'updated_time';
  const UI_CREATION_SOURCE = 'ui_creation_source';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'created_by' => 'User',
      'created_time' => 'datetime',
      'evaluation_spec' => 'AdRuleEvaluationSpec',
      'execution_spec' => 'AdRuleExecutionSpec',
      'id' => 'string',
      'name' => 'string',
      'schedule_spec' => 'AdRuleScheduleSpec',
      'status' => 'string',
      'updated_time' => 'datetime',
      'ui_creation_source' => 'UiCreationSource',
    );
  }
}
