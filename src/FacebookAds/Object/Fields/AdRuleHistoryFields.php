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

class AdRuleHistoryFields extends AbstractEnum {

  const EVALUATION_SPEC = 'evaluation_spec';
  const EXCEPTION_CODE = 'exception_code';
  const EXCEPTION_MESSAGE = 'exception_message';
  const EXECUTION_SPEC = 'execution_spec';
  const IS_MANUAL = 'is_manual';
  const RESULTS = 'results';
  const SCHEDULE_SPEC = 'schedule_spec';
  const TIMESTAMP = 'timestamp';

  public function getFieldTypes() {
    return array(
      'evaluation_spec' => 'AdRuleEvaluationSpec',
      'exception_code' => 'int',
      'exception_message' => 'string',
      'execution_spec' => 'AdRuleExecutionSpec',
      'is_manual' => 'bool',
      'results' => 'list<AdRuleHistoryResult>',
      'schedule_spec' => 'AdRuleScheduleSpec',
      'timestamp' => 'datetime',
    );
  }
}
