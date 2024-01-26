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

class LeadGenPostSubmissionCheckResultFields extends AbstractEnum {

  const API_CALL_RESULT = 'api_call_result';
  const API_ERROR_MESSAGE = 'api_error_message';
  const SHOWN_THANK_YOU_PAGE = 'shown_thank_you_page';

  public function getFieldTypes() {
    return array(
      'api_call_result' => 'string',
      'api_error_message' => 'string',
      'shown_thank_you_page' => 'string',
    );
  }
}
