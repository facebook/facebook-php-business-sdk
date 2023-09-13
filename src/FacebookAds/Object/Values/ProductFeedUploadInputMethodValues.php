<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static ProductFeedUploadInputMethodValues getInstance()
 */
class ProductFeedUploadInputMethodValues extends AbstractEnum {

  const GOOGLE_SHEETS_FETCH = 'Google Sheets Fetch';
  const MANUAL_UPLOAD = 'Manual Upload';
  const REUPLOAD_LAST_FILE = 'Reupload Last File';
  const SERVER_FETCH = 'Server Fetch';
  const USER_INITIATED_SERVER_FETCH = 'User initiated server fetch';
}
