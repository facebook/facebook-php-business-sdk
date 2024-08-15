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

class BrandSafetyDownloadableFields extends AbstractEnum {

  const ACCOUNT_CONTEXT_ID = 'account_context_id';
  const ASYNC_JOB_PERCENT_COMPLETE = 'async_job_percent_complete';
  const ASYNC_JOB_STATUS = 'async_job_status';
  const FILE_NAME = 'file_name';
  const ID = 'id';
  const REQUEST_SURFACE = 'request_surface';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'account_context_id' => 'string',
      'async_job_percent_complete' => 'int',
      'async_job_status' => 'string',
      'file_name' => 'string',
      'id' => 'string',
      'request_surface' => 'string',
      'url' => 'string',
    );
  }
}
