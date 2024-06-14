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

class VideoTextQuestionFields extends AbstractEnum {

  const ID = 'id';
  const QUESTION_TARGET_ID = 'question_target_id';
  const QUESTION_TEXT = 'question_text';
  const STATUS = 'status';

  public function getFieldTypes() {
    return array(
      'id' => 'string',
      'question_target_id' => 'string',
      'question_text' => 'string',
      'status' => 'string',
    );
  }
}
